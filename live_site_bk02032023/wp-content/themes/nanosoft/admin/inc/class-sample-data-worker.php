<?php
defined( 'ABSPATH' ) or die();

/**
 * This class will provide all ajax methods to processing
 * sample data.
 */
class NanoSoft_Sample_Data_Worker
{
	const REQUEST_TIMEOUT = 9999;

	/**
	 * Class constructor
	 */
	public function __construct() {
		@set_time_limit( self::REQUEST_TIMEOUT );

		add_action( 'wp_ajax_sd_download', array( $this, 'download' ) );
		add_action( 'wp_ajax_sd_cleanup', array( $this, 'cleanup' ) );
		add_action( 'wp_ajax_sd_import', array( $this, 'install' ) );
		add_action( 'wp_ajax_sd_thumbnails', array( $this, 'thumbnails' ) );
		add_action( 'wp_ajax_sd_finish', array( $this, 'finish' ) );
	}

	public function download() {
		global $wp_filesystem;

		if ( isset($_POST['file']) && nanosoft_initialize_filesystem_api() ) {
			$source           = sprintf( 'http://demo.linethemes.com/data/%s/%s', NANOSOFT_ID, $_POST['file'] );
			$destination      = get_theme_file_path('_temp');
			$destination_file = $destination . DIRECTORY_SEPARATOR . $_POST['file'];

			if ( ! is_dir( $destination ) ) {
				wp_mkdir_p( $destination );
			}

			$remote_response = wp_safe_remote_get( $source, array(
				'timeout'  => self::REQUEST_TIMEOUT,
				'stream'   => true,
				'filename' => $destination_file
			) );

			$this->response(
				wp_remote_retrieve_response_code( $remote_response )
			);
		}
	}

	public function install() {
		global $wpdb;

		if ( isset( $_POST['file'] ) && nanosoft_initialize_filesystem_api() ) {
			$prefix = $wpdb->get_blog_prefix();
			$tables = array_reduce( $wpdb->get_results( "SHOW TABLES", ARRAY_A ), function( $tables, $result ) use ( $prefix ) {
				$table = end( $result );
				$tableKey = substr( $table, strlen( $prefix ) );
				$tables[ $tableKey ] = $table;

				return $tables;
			}, array() );

			$tables_truncated = array();
			$file             = $this->path( $_POST['file'] );

			if ( is_file( $file ) && unzip_file( $file, $this->path() ) ) {
				$data_file  = $this->path( 'data.json' );

				if ( ! is_file( $data_file ) ) {
					throw new Exception( sprintf( esc_html__( 'Sample data file not found: %s', 'nanosoft' ), $data_file ) );
				}

				$upload_dir = wp_upload_dir();
				$sample_upload_dir = trailingslashit( $upload_dir['baseurl'] );
				$site_url = trailingslashit( get_site_url() );

				$open_stream_func = 'f' . 'open';
				$close_stream_func = 'f' . 'close';
				$file_handle = $open_stream_func( $data_file, 'r' );

				// Read the first line for parse manifest
				$manifest = (array) json_decode( fgets( $file_handle ), true );
				$manifest['info']['base'] = trailingslashit( $manifest['info']['base'] );

				// Read the second line for sidebars settings
				$sidebars = (array) json_decode( fgets( $file_handle ), true );

				// Read the third line for the theme options
				$options  = (array) json_decode( fgets( $file_handle ), true );

				// Update theme options
				$this->import_theme_options( $options, $manifest['info'] );

				// Update widgets settings
				$this->import_widgets_settings( $sidebars['data'], $manifest['info'] );

				// Start importing data
				while ( ! feof( $file_handle ) ) {
					$record = (array) json_decode( fgets( $file_handle ), true );

					// Skip process when cannot decode row data
					if ( empty( $record ) ) continue;

					$row   = $record['data'];

					if ( ! isset( $tables[ $record['table']] ) ) {
						continue;
					}

					// Import data for built-in post type
					if ( $record['table'] == 'attachments' ) {
						$record['table'] = 'posts';
					}

					if ( $record['table'] != 'options' && ! in_array( $record['table'], $tables_truncated ) ) {
						$wpdb->query( "TRUNCATE TABLE {$tables[ $record['table'] ]}" );
						$tables_truncated[] = $record['table'];
					}

					if ( $record['table'] === 'posts' && $row['post_type'] === 'points_image' ) {
						if ( is_serialized( $row['post_content'] ) ) {
							$post_content = unserialize( $row['post_content'] );
							$post_content = $this->update_meta_content( $post_content, $manifest['info'] );

							$row['post_content'] = serialize( $post_content );
						}
					}

					// Try to insert or replace row data
					// to the table
					$wpdb->replace( $tables[ $record['table'] ], $row );
				}

				$this->update_metadata( $manifest );

				// Close file handling
				$close_stream_func( $file_handle );
			}
		}
	}

	public function thumbnails() {
		global $wp_filesystem,
			   $wpdb;

		if ( ! nanosoft_initialize_filesystem_api() ) {
			$this->response( array(
				'code'    => 403,
				'message' => esc_html__( 'Invalid files & folders permissions', 'nanosoft' )
			) );
		}

		if ( ! is_dir( $this->path( 'uploads' ) ) ) {
			$this->response( array(
				'code'    => 500,
				'message' => esc_html__( 'Cannot extract the sample data media files', 'nanosoft' ),
				'path'    => $this->path( 'uploads' )
			) );
		}

		$upload_dir        = wp_upload_dir();
		$sample_upload_dir = trailingslashit( $upload_dir['basedir'] );
		$sample_upload_url = trailingslashit( $upload_dir['baseurl'] );

		// Create the folder to store the sample media files
		wp_mkdir_p( $sample_upload_dir );

		// Copy the sample media files
		copy_dir(
			$this->path( 'uploads' ),
			$sample_upload_dir
		);

		$attachments = $wpdb->get_results( "
			SELECT *
			FROM {$wpdb->posts} 
			WHERE 
				post_type LIKE 'attachment'
			",
			ARRAY_A
		);

		$pattern = is_multisite() ? '/uploads\/sites\/[0-9]+\/(.*)/' : '/uploads\/(.*)$/';

		foreach ( $attachments as $row ) {
			if ( preg_match( $pattern, $row['guid'], $matches ) ) {
				$filepath = $matches[1];
				$attach_data = wp_generate_attachment_metadata( $row['ID'], $sample_upload_dir . $filepath );
				wp_update_attachment_metadata( $row['ID'], $attach_data );
			}
			// $filename    = basename( $row['guid'] );
			// $old_path    = dirname( dirname( dirname( $row['guid'] ) ) );
			// $new_path    = substr( $row['guid'], strlen( $old_path ) + 1 );

			// $row['guid'] = substr_replace( $row['guid'], $sample_upload_url, 0, strlen( $old_path ) + 1 );

			// // Update URL for the attachement file
			// $wpdb->replace( $wpdb->posts, $row );

			// Regenerate the attachment metadata
			// $attach_data = wp_generate_attachment_metadata( $row['ID'], $sample_upload_dir . $new_path );
			// wp_update_attachment_metadata( $row['ID'], $attach_data );
		}

		$this->response( array(
			'code'    => 200,
			'message' => esc_html__( 'Thumbnails generation successfully!', 'nanosoft' )
		) );
	}

	public function finish() {
		global $wp_filesystem;

		if ( isset( $_POST['package'] ) && nanosoft_initialize_filesystem_api() ) {
			update_option( get_template() . '_demo', $_POST['package'] );

			// Remove temporary folder
			$wp_filesystem->rmdir( $this->path( '' ), true );
		}
	}

	/**
	 * Import the demo widgets settings
	 * 
	 * @param   array  $data  Widget settings data
	 * @return  void
	 */
	private function import_widgets_settings( $data, $manifest ) {
		global $wp_filesystem,
			   $wp_registered_sidebars;

		$data = $this->update_meta_content( $data, $manifest );

		if ( isset( $data['relationship'] ) &&
			 isset( $data['sidebars'] ) && isset( $data['instances'] ) ) 
		{
			update_option( 'sidebars_widgets', $data['relationship'] );
			update_option( wp_get_theme()->Template . '_sidebars', $data['sidebars'] );

			foreach ( $data['instances'] as $id => $params ) {
				update_option( $id, $params );
			}
		}
	}

	/**
	 * Import the theme options
	 * 
	 * @param   array  $data  Theme options data
	 * @return  void
	 */
	private function import_theme_options( $data, $manifest ) {
		global $wp_filesystem;

		if ( isset( $data['mods'] ) && is_array( $data['mods'] ) ) {
			$theme = get_option( 'stylesheet' );

			foreach ( $data['mods'] as $name => $value ) {
				$data['mods'][$name] = $this->update_meta_content( $value, $manifest );
			}

			update_option( "theme_mods_{$theme}", $data['mods'] );
		}

		if ( isset( $data['core'] ) && is_array( $data['core'] ) ) {
			foreach ( $data['core'] as $name => $value ) {
				update_option( $name, $value );
			}
		}
	}

	private function update_metadata( $manifest ) {
		global $wpdb;

		$prefix = $wpdb->get_blog_prefix();
		$upload_dir = wp_upload_dir();

		$replace_urls = array(
			'base'   => trailingslashit( get_site_url() ),
			'upload' => trailingslashit( $upload_dir['baseurl'] )
		);

		$info = $manifest['info'];
		$info['upload'] = trailingslashit( substr_replace( $info['upload'], $replace_urls['base'], 0, strlen( $info['base'] ) ) );

		foreach ( $replace_urls as $type => $url ) {
			/**
			 * Update link in the post content
			 */
			$wpdb->query( $wpdb->prepare( "UPDATE {$wpdb->posts} SET guid=REPLACE(guid, %s, %s)",
				$info[ $type ],
				$url
			) );

			$wpdb->query( $wpdb->prepare( "UPDATE {$wpdb->posts} SET post_content=REPLACE(post_content, %s, %s)",
				$info[ $type ],
				$url
			) );

			/**
			 * Update link for custom css data
			 */
			$wpdb->query( $wpdb->prepare( "UPDATE {$wpdb->postmeta} SET meta_value=REPLACE(meta_value, %s, %s) WHERE meta_key IN( '_wpb_post_custom_css', '_wpb_shortcodes_custom_css', '_menu_item_url' )",
				$info[ $type ],
				$url
			) );
		}

		/**
		 * Update the author
		 */
		$wpdb->query( $wpdb->prepare( "UPDATE {$wpdb->posts} SET post_author=%d", get_current_user_id() ) );

		$all_tables = array_reduce( $wpdb->get_results( "SHOW TABLES", ARRAY_A ), function( $tables, $result ) {
			$tables[] = end( $result );
			return $tables;
		}, array() );

		/**
		 * Update link for layerslider, revolution slider
		 */
		$tables = array(
			'layerslider'       => array( 'data' ),
			'revslider_slides'  => array( 'params', 'layers' ),
			'revslider_sliders' => array( 'params' )
		);

		foreach ( $tables as $name => $fields ) {
			if ( ! in_array( "{$prefix}{$name}", $all_tables ) )
				continue;

			$joined_fields = implode( ', ', $fields );
			$rows = $wpdb->get_results( "SELECT * FROM {$prefix}{$name}", ARRAY_A );

			foreach ( $rows as $row ) {
				foreach ( $fields as $field ) {
					$row[$field] = $this->update_meta_content( $row[$field], $manifest['info'] );
				}

				$wpdb->replace( $prefix . $name, $row );
			}
		}

		/**
		 * Update link in the post meta
		 */
		$postmeta = $wpdb->get_results( "SELECT * FROM {$wpdb->postmeta} WHERE meta_key IN( '_page_options', '_post_options', '_portfolio_options' )" );
		
		foreach ( $postmeta as $row ) {
			$row->meta_value = serialize( $this->update_meta_content( unserialize( $row->meta_value ), $manifest['info'] ) );
			$wpdb->replace( $wpdb->postmeta, get_object_vars( $row ) );
		}
	}

	private function update_meta_content( $data, $manifest ) {
		if ( is_array( $data ) ) {
			foreach ( $data as $key => $value ) {
				$data[$key] = $this->update_meta_content( $value, $manifest );
			}

			return $data;
		}

		// Try to decode string as json format
		$decoded_string = json_decode( $data, true );

		if ( $decoded_string != null && is_array( $decoded_string ) ) {
			return json_encode( $this->update_meta_content( $decoded_string , $manifest ) );
		}
		
		if ( strpos( $data, $manifest['upload'] ) !== false ) {
			$upload_dir = wp_upload_dir();
			return str_replace( trailingslashit( $manifest['upload'] ), trailingslashit( $upload_dir['baseurl'] ), $data );
		}
		
		if ( strpos( $data, $manifest['base'] ) !== false ) {
			return str_replace( trailingslashit( $manifest['base'] ), trailingslashit( get_site_url() ), $data );
		}

		return $data;
	}

	private function path( $file = '' ) {
		return get_theme_file_path( "_temp/{$file}" );
	}

	private function response( $data ) {
		echo json_encode( $data );
		exit;
	}
}

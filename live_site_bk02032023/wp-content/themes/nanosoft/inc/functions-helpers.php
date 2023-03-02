<?php
defined( 'ABSPATH' ) or die();

/**
 * The helper function that will used to retrieve the
 * theme options value
 * 
 * @param   string  $id  The option ID
 * @return  mixed
 */
function nanosoft_option( $id ) {
	static $theme_settings;

	if ( empty( $theme_settings ) ) {
		$theme_settings = apply_filters( 'nanosoft_customize_settings', array() );
	}

	return get_theme_mod( $id, isset( $theme_settings[ $id ]['default'] )
		? $theme_settings[ $id ]['default']
		: null
	);
}


/**
 * Return currently post type
 * 
 * @return  strings
 */
function nanosoft_current_post_type() {
	global $post, $typenow, $current_screen;
	
	//we have a post so we can just get the post type from that
	if ( true == isset( $post ) && true == isset( $post->post_type ) )
		return $post->post_type;

	//check the global $typenow - set in admin.php
	elseif ( true == isset( $typenow ) )
		return $typenow;

	//check the global $current_screen object - set in sceen.php
	elseif ( true == isset( $current_screen ) && true == isset( $current_screen->post_type ) )
		return $current_screen->post_type;

	//lastly check the post_type querystring
	elseif ( true == isset( $_REQUEST['post_type'] ) )
		return sanitize_key( $_REQUEST['post_type'] );
	
	//we do not know the post type!
	return null;
}


/**
 * The helper function for showing the logo was set
 * from the theme customize
 * 
 * @param   string  $prefix  The option prefix
 * @param   array   $attrs   The additional attributes for the img tag
 * 
 * @return  void
 * @since   1.0.0
 */
function nanosoft_logo( $prefix = '', $attrs = array() ) {
	$logo_key = 'logo';
	$logo_retina_key = 'logoRetina';

	if ( ! empty( $prefix ) ) {
		$logo_key = $prefix . '__' . $logo_key;
		$logo_retina_key = $prefix . '__' . $logo_retina_key;
	}

	$logo = (array) nanosoft_option( $logo_key );
	$logo_retina = (array) nanosoft_option( $logo_retina_key );

	$srcset = array();
	$attributes = array();

	if ( isset( $logo['id'] ) && is_numeric( $logo['id'] ) ) {
		list( $url ) = wp_get_attachment_image_src( $logo['id'], 'full' );
		$srcset[] = sprintf( '%s 1x', $url );
		$attributes['src'] = $url;
	}
	elseif ( isset( $logo['url'] ) && filter_var( $logo['url'], FILTER_VALIDATE_URL ) ) {
		$srcset[] = sprintf( '%s 1x', $logo['url'] );
		$attributes['src'] = $logo['url'];
	}

	if ( isset( $logo_retina['id'] ) && is_numeric( $logo_retina['id'] ) ) {
		list( $url ) = wp_get_attachment_image_src( $logo_retina['id'], 'full' );
		$srcset[] = sprintf( '%s 2x', $url );
	}
	elseif ( isset( $logo_retina['url'] ) && filter_var( $logo_retina['url'], FILTER_VALIDATE_URL ) ) {
		$srcset[] = sprintf( '%s 2x', $logo_retina['url'] );
	}
	

	$attributes['srcset'] = join( ', ', $srcset );
	$attributes['alt'] = get_bloginfo( 'name' );
	$attributes['class'] = sprintf( 'logo %s', $prefix );

	printf( '<img %s />', nanosoft_attributes( $attributes ) );
}


function nanosoft_social_icons( $args ) {
	$args = array_merge( array(
		'location'     => 'top',
		'wrapper'      => '<div class="social-icons">%s</div>',
		'wrapper_icon' => '<i class="%s"></i>',
		'wrapper_link' => '<a href="%1$s" data-tooltip="%2$s" target="_blank">%3$s</a>'
	), $args );
	$positions = nanosoft_option( 'global__social__positions' );

	if ( in_array( $args['location'], $positions ) ) {
		$icons = nanosoft_option( 'global__social__icons' );
		$output = array();

		foreach ( $icons as $icon ) {
			$icon = array_merge( array(
				'url'   => '#',
				'icon'  => 'fa fa-cog',
				'title' => 'Configuration'
			), $icon );

			$icon_output = sprintf( $args['wrapper_icon'], $icon['icon'] );
			$link_output = sprintf( $args['wrapper_link'], $icon['url'], $icon['title'], $icon_output );

			$output[] = $link_output;
		}

		printf( $args['wrapper'], join( '', $output ) );
	}
}


/**
 * This function will be used to generate the HTML attributes
 * string from an given array
 * 
 * @param   array  $attrs  The attribute list
 * 
 * @return  string
 * @since   1.0.0
 */
function nanosoft_attributes( $attrs ) {
	$attributes = array();

	foreach ( $attrs as $name => $value ) {
		$attributes[] = sprintf( '%s="%s"', esc_attr( $name ), esc_attr( $value ) );
	}

	return join( ' ', $attributes );
}


/**
 * Retrieve all google fonts in the array
 * format
 * 
 * @return  array
 * @since   1.0.0
 */
function nanosoft_google_fonts() {
	// Try to retrive the font list from the cache
	$cached = get_transient( 'nanosoft-fonts' );

	if ( ! $cached ) {
		$remote_content = wp_safe_remote_get( 'http://linethemes.com/resources/fonts.php', array(
			'timeout' => 9999
		) );

		if ( is_array( $remote_content ) && isset( $remote_content['body'] ) ) {
			$cached = json_decode( $remote_content['body'], true );

			// Save the requested content to the transient.
			// The transient will be expired after a day.
			set_transient( 'nanosoft-fonts', $cached, 86400 );
		}
	}

	return $cached;
}


function nanosoft_icons() {
	static $icons;

	if ( empty( $icons ) ) {
		$icons = array();
		$icons_path = get_theme_file_path( 'admin/icons.json' );

		if ( nanosoft_initialize_filesystem_api() ) {
			global $wp_filesystem;

			if ( $wp_filesystem->exists( $icons_path ) ) {
				$icons = json_decode( $wp_filesystem->get_contents( $icons_path ), true );
			}
		}
	}

	return $icons;
}


/**
 * The helper function to initialize file system API before
 * using it for manipulation files and folders
 * 
 * @param   string   $url     The action URL
 * @param   mixed    $action  The action
 * @param   string   $name    Nonce name
 * 
 * @return  boolean
 * @since   1.0.0
 */
function nanosoft_initialize_filesystem_api( $url = '', $action = -1, $name = '_wpnonce' ) {
	if ( ! function_exists( 'WP_FileSystem' ) ) {
		require_once (ABSPATH . '/wp-admin/includes/file.php' );
	}

	// okay, let's see about getting credentials
	$url = wp_nonce_url( $url, $action, $name );
	$method = '';

	if ( false === ($creds = request_filesystem_credentials( $url, $method, false, false, null ) ) ) {
		$method = 'ftp';

		if ( false === ( $creds = request_filesystem_credentials( $url, $method, false, false, null ) ) ) {
			// if we get here, then we don't have credentials yet,
			// but have just produced a form for the user to fill in,
			// so stop processing for now
			return false; // stop the normal page form from displaying
		}
	}
	
	// now we have some credentials, try to get the wp_filesystem running
	if ( ! WP_Filesystem( $creds ) ) {
		// our credentials were no good, ask the user for them again
		request_filesystem_credentials( $url, $method, true, false, null );
		return false;
	}
	
	return true;
}


/**
 * The helper function to generate thumbnail
 * on the fly
 *
 * @param   array  $params
 * @return  array
 */
function nanosoft_get_image_resized( $params = array() ) {
	$params = array_merge( array(
		'post_id'  => null,
		'image_id' => null,
		'size'     => 'thumbnail',
		'class'    => '',
		'crop'     => false,
		'atts'     => array()
	), $params );

	if ( ! $params['size'] ) {
		$params['size'] = 'thumbnail';
	}

	if ( ! $params['image_id'] && ! $params['post_id'] ) {
		return false;
	}

	$post_id     = $params['post_id'];
	$attach_id   = $post_id ? get_post_thumbnail_id( $post_id ) : $params['image_id'];
	$thumb_size  = $params['size'];
	$thumb_class = ( isset( $params['class'] ) && '' !== $params['class'] ) ? $params['class'] . ' ' : '';

	global $_wp_additional_image_sizes;
	$thumbnail = '';

	if ( is_string( $thumb_size ) && ( ( ! empty( $_wp_additional_image_sizes[ $thumb_size ] ) && is_array( $_wp_additional_image_sizes[ $thumb_size ] ) ) || in_array( $thumb_size, array(
				'thumbnail',
				'thumb',
				'medium',
				'large',
				'full',
			) ) )
	) {
		$attributes = array( 'class' => $thumb_class . 'attachment-' . $thumb_size );
		$attributes = array_merge( $attributes, $params['atts'] );
		$p_img = wp_get_attachment_image_src( $attach_id, $thumb_size, false, $attributes );
		$thumbnail = wp_get_attachment_image( $attach_id, $thumb_size, false, $attributes );
	} elseif ( $attach_id ) {
		if ( is_string( $thumb_size ) ) {
			preg_match_all( '/\d+/', $thumb_size, $thumb_matches );

			if ( isset( $thumb_matches[0] ) ) {
				$thumb_size = array();
				if ( count( $thumb_matches[0] ) > 1 ) {
					$thumb_size[] = $thumb_matches[0][0]; // width
					$thumb_size[] = $thumb_matches[0][1]; // height
				} elseif ( count( $thumb_matches[0] ) > 0 && count( $thumb_matches[0] ) < 2 ) {
					$thumb_size[] = $thumb_matches[0][0]; // width
					$thumb_size[] = $thumb_matches[0][0]; // height
				} else {
					$thumb_size = false;
				}
			}
		}

		if ( is_array( $thumb_size ) ) {
			// Resize image to custom size
			$p_img = nanosoft_image_resize( $attach_id, null, $thumb_size[0], $thumb_size[1], $params['crop'] );
			$alt = trim( strip_tags( get_post_meta( $attach_id, '_wp_attachment_image_alt', true ) ) );
			$attachment = get_post( $attach_id );

			if ( ! empty( $attachment ) ) {
				$title = trim( strip_tags( $attachment->post_title ) );

				if ( empty( $alt ) ) {
					$alt = trim( strip_tags( $attachment->post_excerpt ) ); // If not, Use the Caption
				}
				if ( empty( $alt ) ) {
					$alt = $title;
				} // Finally, use the title
				if ( $p_img ) {

					$attributes = array(
						'class'  => $thumb_class,
						'src'    => $p_img['url'],
						'width'  => $p_img['width'],
						'height' => $p_img['height'],
						'alt'    => $alt,
						'title'  => $title
					);
					$p_img = array(
						$p_img['url'],
						$p_img['width'],
						$p_img['height']
					);
					$attributes = array_merge( $attributes, $params['atts'] );

					$thumbnail = '<img ' . nanosoft_attributes_stringify( $attributes ) . ' />';
				}
			}
		}
	} else {
		$p_img = wp_get_attachment_image_src( $attach_id, 'full', false );
	}

	$p_img_large = wp_get_attachment_image_src( $attach_id, 'large' );

	return apply_filters( 'nanosoft_get_image_resized', array(
		'thumbnail' => $thumbnail,
		'thumbnail_raw' => $p_img,
		'large' => $p_img_large,
	), $attach_id, $params );
}


/**
 * @param int $attach_id
 * @param string $img_url
 * @param int $width
 * @param int $height
 * @param bool $crop
 *
 * @since 4.2
 * @return array
 */
function nanosoft_image_resize( $attach_id = null, $img_url = null, $width, $height, $crop = false ) {
	// this is an attachment, so we have the ID
	$image_src = array();
	if ( $attach_id ) {
		$image_src = wp_get_attachment_image_src( $attach_id, 'full' );
		$actual_file_path = get_attached_file( $attach_id );
		// this is not an attachment, let's use the image url
	} elseif ( $img_url ) {
		$file_path = parse_url( $img_url );
		$actual_file_path = rtrim( ABSPATH, '/' ) . $file_path['path'];
		$orig_size = getimagesize( $actual_file_path );
		$image_src[0] = $img_url;
		$image_src[1] = $orig_size[0];
		$image_src[2] = $orig_size[1];
	}
	if ( ! empty( $actual_file_path ) ) {
		$file_info = pathinfo( $actual_file_path );
		$extension = '.' . $file_info['extension'];

		// the image path without the extension
		$no_ext_path = $file_info['dirname'] . '/' . $file_info['filename'];

		$cropped_img_path = $no_ext_path . '-' . $width . 'x' . $height . $extension;

		// checking if the file size is larger than the target size
		// if it is smaller or the same size, stop right here and return
		if ( $image_src[1] > $width || $image_src[2] > $height ) {

			// the file is larger, check if the resized version already exists (for $crop = true but will also work for $crop = false if the sizes match)
			if ( file_exists( $cropped_img_path ) ) {
				$cropped_img_url = str_replace( basename( $image_src[0] ), basename( $cropped_img_path ), $image_src[0] );
				$vt_image = array(
					'url' => $cropped_img_url,
					'width' => $width,
					'height' => $height,
				);

				return $vt_image;
			}

			if ( false == $crop ) {
				// calculate the size proportionaly
				$proportional_size = wp_constrain_dimensions( $image_src[1], $image_src[2], $width, $height );
				$resized_img_path = $no_ext_path . '-' . $proportional_size[0] . 'x' . $proportional_size[1] . $extension;

				// checking if the file already exists
				if ( file_exists( $resized_img_path ) ) {
					$resized_img_url = str_replace( basename( $image_src[0] ), basename( $resized_img_path ), $image_src[0] );

					$vt_image = array(
						'url' => $resized_img_url,
						'width' => $proportional_size[0],
						'height' => $proportional_size[1],
					);

					return $vt_image;
				}
			}

			// no cache files - let's finally resize it
			$img_editor = wp_get_image_editor( $actual_file_path );

			if ( is_wp_error( $img_editor ) || is_wp_error( $img_editor->resize( $width, $height, $crop ) ) ) {
				return array(
					'url' => '',
					'width' => '',
					'height' => '',
				);
			}

			$new_img_path = $img_editor->generate_filename();

			if ( is_wp_error( $img_editor->save( $new_img_path ) ) ) {
				return array(
					'url' => '',
					'width' => '',
					'height' => '',
				);
			}
			if ( ! is_string( $new_img_path ) ) {
				return array(
					'url' => '',
					'width' => '',
					'height' => '',
				);
			}

			$new_img_size = getimagesize( $new_img_path );
			$new_img = str_replace( basename( $image_src[0] ), basename( $new_img_path ), $image_src[0] );

			// resized output
			$vt_image = array(
				'url' => $new_img,
				'width' => $new_img_size[0],
				'height' => $new_img_size[1],
			);

			return $vt_image;
		}

		// default output - without resizing
		$vt_image = array(
			'url' => $image_src[0],
			'width' => $image_src[1],
			'height' => $image_src[2],
		);

		return $vt_image;
	}

	return false;
}


/**
 * Convert array of named params to string version
 * All values will be escaped
 *
 * E.g. f(array('name' => 'foo', 'id' => 'bar')) -> 'name="foo" id="bar"'
 *
 * @param $attributes
 *
 * @return string
 */
function nanosoft_attributes_stringify( $attributes ) {
	$atts = array();
	foreach ( $attributes as $name => $value ) {
		$atts[] = $name . '="' . esc_attr( $value ) . '"';
	}

	return implode( ' ', $atts );
}



/**
 * Get size information for all currently-registered image sizes.
 *
 * @global $_wp_additional_image_sizes
 * @uses   get_intermediate_image_sizes()
 * @return array $sizes Data for all currently-registered image sizes.
 */
function nanosoft_get_image_sizes() {
	global $_wp_additional_image_sizes;

	$sizes = array();

	foreach ( get_intermediate_image_sizes() as $_size ) {
		if ( in_array( $_size, array('thumbnail', 'medium', 'medium_large', 'large') ) ) {
			$sizes[ $_size ]['width']  = get_option( "{$_size}_size_w" );
			$sizes[ $_size ]['height'] = get_option( "{$_size}_size_h" );
			$sizes[ $_size ]['crop']   = (bool) get_option( "{$_size}_crop" );
		} elseif ( isset( $_wp_additional_image_sizes[ $_size ] ) ) {
			$sizes[ $_size ] = array(
				'width'  => $_wp_additional_image_sizes[ $_size ]['width'],
				'height' => $_wp_additional_image_sizes[ $_size ]['height'],
				'crop'   => $_wp_additional_image_sizes[ $_size ]['crop'],
			);
		}
	}

	return $sizes;
}

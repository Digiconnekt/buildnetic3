<?php
/**
 * WARNING: This file is part of the Projects plugin. DO NOT edit
 * this file under any circumstances.
 */

/**
 * Prevent direct access to this file
 */
defined( 'ABSPATH' ) or die();

/**
 * @package  Projects
 * @author   Binh Pham Thanh <binhpham@linethemes.com>
 */
final class nProjects_Admin extends nProjects_Base
{
	protected function __construct() {
		add_action( 'admin_enqueue_scripts', array( $this, 'enqueue_styles' ) );
		add_action( 'admin_enqueue_scripts', array( $this, 'enqueue_scripts' ) );
		add_action( 'add_meta_boxes', array( $this, 'add_metabox' ) );
		add_action( 'save_post', array( $this, 'update_media_items' ) );
		add_action( 'admin_menu', array( $this, 'add_settings_page' ) );
	}

	public function add_settings_page () {
		add_submenu_page(
			'edit.php?post_type=nproject',
			__( 'Settings', 'nprojects' ),
			__( 'Settings', 'nprojects' ),
			'manage_options',
			'nprojects-settings',
			array( $this, 'render_settings_page' )
		);
	}

	public function render_settings_page () {
		$message = false;
		$message_type = 'updated';

		if ( $_SERVER['REQUEST_METHOD'] === 'POST' ) {
			update_option( '_nproject_permalink_slug', $_POST['permalink_slug'], true );
			update_option( '_nproject_permalink_category', $_POST['permalink_category'], true );
			update_option( '_nproject_permalink_tag', $_POST['permalink_tag'], true );
			
			$message = esc_html__( 'Project settings has been updated.', 'nprojects' );
		}

		include plugin_dir_path( __DIR__ ) . 'tmpl/settings.php';
	}

	/**
	 * Enqueue the admin styles
	 * 
	 * @return  void
	 */
	public function enqueue_styles() {
		if ( $this->is_editing_template() ) {
			wp_enqueue_style( 'projects-admin' );
		}
	}

	/**
	 * Enqueue the admin scripts
	 * 
	 * @return  void
	 */
	public function enqueue_scripts() {
		if ( $this->is_editing_template() ) {
			wp_enqueue_script( 'projects-admin' );
			wp_localize_script( 'projects-admin', '_projects_i18n', array(
				'SELECT_MEDIA_FILES'    => __( 'Select Media Files', 'nprojects' ),
				'INSERT_SELECTED_FILES' => __( 'Insert Selected File(s)', 'nprojects' )
			) );
		}
	}

	/**
	 * Register metabox
	 *
	 * @return  void
	 */
	public function add_metabox() {
		add_meta_box( 'projects-gallery', __( 'Project Gallery', 'nprojects' ),
			array( $this, 'display_metabox' ),
			nProjects::TYPE_NAME, 
			'normal',
			'high'
		);
	}

	/**
	 * Display the metabox that associated with an post
	 * object
	 * 
	 * @param   object  $post  The given post object
	 * @return  void
	 */
	public function display_metabox( $post ) {
		if ( nProjects_Helper::current_post_type() == nProjects::TYPE_NAME ):

			$project_media_items = get_post_meta( $post->ID, '_project_media', true );
			$project_media_items = is_array( $project_media_items ) ? $project_media_items : array();
			?>

				<div id="project-media">
					<ul class="project-media-items">
						<?php foreach ( $project_media_items as $item ): ?>

							<li class="project-media-item">
								<input type="hidden" class="project-media-id" name="_project_media[id][]" value="<?php esc_attr_e( $item['id'] ) ?>" />
								<input type="hidden" class="project-media-title" name="_project_media[title][]" value="<?php esc_attr_e( $item['title'] ) ?>" />
								<input type="hidden" class="project-media-caption" name="_project_media[caption][]" value="<?php esc_attr_e( $item[ 'caption' ] ) ?>" />
								<input type="hidden" class="project-media-alt" name="_project_media[alt][]" value="<?php esc_attr_e( $item[ 'alt' ] ) ?>" />
								<div class="thumbnail">
									<?php echo wp_get_attachment_image( $item['id'], 'thumbnail' ) ?>
								</div>
								<input type="text" class="project-media-desc" placeholder="Description..." name="_project_media[desc][]" value="<?php esc_attr_e( $item[ 'desc' ] ) ?>" />
								<div class="project-media-item-buttons">
									<button type="button" class="button edit-media-item"><?php _e( 'Edit', 'nprojects' ) ?></button>
									<button type="button" class="button remove-media-item"><?php _e( 'Remove', 'nprojects' ) ?></button>
								</div>
							</li>

						<?php endforeach ?>

						<li class="project-media-empty">
							<p><?php _e( 'There was no added media files.', 'nprojects' ) ?></p>
							<a href="javascript:;" class="insert-media-items"><?php _e( 'Insert Media File(s)', 'nprojects' ) ?></a>
						</li>
						<li class="project-media-toolbar">
							<a href="javascript:;" class="insert-media-items"><?php _e( 'Insert Media File(s)', 'nprojects' ) ?></a>
						</li>
					</ul>
				</div>
			
			<?php
		endif;
	}

	/**
	 * Save metabox values to database
	 *
	 * @param   int  $post_id  The post ID
	 * @return  void
	 */
	public function update_media_items( $post_id ) {
		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE || nProjects_Helper::current_post_type() != nProjects::TYPE_NAME )
			return;

		if ( isset( $_REQUEST ) ) {
			$media_items = array();

			if ( isset( $_REQUEST['_project_media'] ) ) {
				$data = stripslashes_deep( $_REQUEST['_project_media'] );

				if ( is_array( $data ) && isset( $data['id'] ) && is_array( $data['id'] ) ) {
					foreach ( $data['id'] as $index => $id ) {
						$item            = array();
						$item['id']      = $id;
						$item['title']   = isset( $data['title'] ) && isset( $data['title'][$index] ) ? $data['title'][$index] : '';
						$item['desc']    = isset( $data['desc'] ) && isset( $data['desc'][$index] ) ? $data['desc'][$index] : '';
						$item['caption'] = isset( $data['caption'] ) && isset( $data['caption'][$index] ) ? $data['caption'][$index] : '';
						$item['alt']     = isset( $data['alt'] ) && isset( $data['alt'][$index] ) ? $data['alt'][$index] : '';

						$media_items[] = $item;
					}
				}
			}

			update_post_meta( $post_id, '_project_media', $media_items );
		}
	}

	/**
	 * Conditional tag that return true when editing the
	 * template
	 * 
	 * @return  boolean
	 */
	private function is_editing_template() {
		global $pagenow;

		return in_array( $pagenow, array( 'post.php', 'post-new.php' ) ) &&
			   nProjects_Helper::current_post_type() == nProjects::TYPE_NAME;
	}
}

<?php
defined( 'ABSPATH' ) or die();

class NanoSoft_Custom_Sidebars
{
	public function __construct() {
		add_action( 'widgets_init', array( $this, 'register_sidebars' ) );
		add_action( 'widgets_admin_page', array( $this, 'admin_form' ) );
		add_action( 'admin_enqueue_scripts', array( $this, 'enqueue_assets' ) );
		add_action( 'wp_ajax_save_custom_sidebar', array( $this, 'save_sidebar' ) );
		add_action( 'wp_ajax_remove_custom_sidebar', array( $this, 'remove_sidebar' ) );
	}

	/**
	 * Enqueue needed assets for sidebars manager
	 * 
	 * @param   string  $hook  Which file are called hook
	 * @return  void
	 */
	public function enqueue_assets( $hook = null ) {
		if ( $hook != 'widgets.php' )
			return;

		wp_enqueue_style( 'nanosoft-custom-sidebars', get_theme_file_uri( 'admin/css/sidebars.css' ) );
		wp_enqueue_script( 'nanosoft-custom-sidebars', get_theme_file_uri( 'admin/js/sidebars.js' ) );

		$custom_sidebars     = get_option( wp_get_theme()->Template . '_sidebars' );
		$custom_sidebars_ids = is_array( $custom_sidebars ) ? array_keys( $custom_sidebars ) : array();

		wp_localize_script( 'nanosoft-custom-sidebars', '_sidebarSettings', array(
			'button_title'    => esc_html__( 'remove this area', 'nanosoft' ),
			'confirm_message' => esc_html__( 'Are you sure you want to remove this widget area?', 'nanosoft' ),
			'items'           => $custom_sidebars_ids
		) );
	}

	/**
	 * This is helper function to register all custom
	 * sidebars that created by the user
	 * 
	 * @return  void
	 */
	public function register_sidebars() {
		$custom_sidebars = get_option( wp_get_theme()->Template . '_sidebars' );

		if ( empty( $custom_sidebars ) )
			$custom_sidebars = array();

		$sidebar_options = apply_filters( 'nanosoft/custom_sidebars_params', array(
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>'
		) );

		foreach ( $custom_sidebars as $id => $options ) {
			$options = array_merge( $options, $sidebar_options );
			$options['id'] = $id;

			register_sidebar( $options );
		}
	}

	/**
	 * Display the form that will be used to create
	 * the custom sidebars
	 * 
	 * @return  void
	 */
	public function admin_form() {
		if ( ! ( $custom_sidebars = get_option( wp_get_theme()->Template . '_sidebars' ) ) )
			$custom_sidebars = array();

		$messages = array();
		$messages[1] = esc_html__( 'New custom widget area has been created', 'nanosoft' );
		$messages[2] = esc_html__( 'Custom widget area has been removed', 'nanosoft' );

		$errors = array();
		$errors[2] = esc_html__( 'Cannot create custom widget area, please try again', 'nanosoft' );
		$errors[3] = esc_html__( 'Invalid the ID of widget area', 'nanosoft' );
		?>

			<?php if ( isset( $_GET['message'] ) && isset( $messages[$_GET['message']] ) ): ?>
				<div id="message" class="updated"><p><?php echo esc_html( $messages[$_GET['message']] ); ?></p></div>
			<?php endif; ?>

			<?php if ( isset( $_GET['error'] ) && isset( $errors[$_GET['error']] ) ): ?>
				<div id="message" class="error"><p><?php echo esc_html( $errors[$_GET['error']] ); ?></p></div>
			<?php endif ?>

			<div id="sidebars-form" class="widget-liquid-right">
				<form action="<?php echo esc_url( admin_url() ) ?>admin-ajax.php?action=save_custom_sidebar" method="POST" class="widgets-holder-wrap">
					<?php wp_nonce_field( 'save_custom_sidebar', 'custom-sidebar' ) ?>
					<h3><?php esc_html_e( 'Create Widget Area', 'nanosoft' ) ?></h3>
					<div class="sidebar-inputs">
						<label for="sidebar-name"><?php esc_html_e( 'Enter name of the widget area:', 'nanosoft' ) ?></label>
						<input type="text" name="sidebar-name" id="sidebar-name" />
						<input type="submit" class="button button-primary" value="<?php esc_html_e( 'Create', 'nanosoft' ) ?>" />
					</div>
				</form>

				<?php if ( ! empty( $custom_sidebars ) ): ?>
					<form id="remove-sidebar-form" action="<?php echo esc_url( admin_url() ) ?>admin-ajax.php" method="GET" class="widgets-holder-wrap hide-if-js">
						<input type="hidden" name="action" value="remove_custom_sidebar" />
						<h3><?php esc_html_e( 'Remove Custom Widget Area', 'nanosoft' ) ?></h3>
						<div class="sidebar-inputs">
							<label for="sidebar-id"><?php esc_html_e( 'Select custom widget area to be removed:', 'nanosoft' ) ?></label>
							<select name="id" id="sidebar-id">
								<?php foreach ( $custom_sidebars as $id => $data ): ?>
								<option value="<?php echo esc_attr( $id ) ?>"><?php echo esc_html( $data['name'] ) ?></option>
								<?php endforeach ?>
							</select>
							<input type="submit" class="button" value="<?php esc_html_e( 'Remove', 'nanosoft' ) ?>" />
						</div>
					</form>
				<?php endif ?>
			</div>

		<?php
	}

	/**
	 * Handle ajax request to save custom sidebar
	 * information
	 * 
	 * @return  void
	 */
	public function save_sidebar() {
		if ( isset( $_POST['custom-sidebar'] ) &&
			 isset( $_POST['sidebar-name'] ) &&
			 wp_verify_nonce( $_POST['custom-sidebar'], 'save_custom_sidebar' ) ) {

			$name = $_POST['sidebar-name'];
			$custom_sidebars = get_option( wp_get_theme()->Template . '_sidebars' );

			if ( empty( $custom_sidebars ) )
				$custom_sidebars = array();

			$custom_sidebars['sidebar-' . uniqid()] = array(
				'name' => $name,
				'description' => sprintf( esc_html__( 'There are widgets for %s', 'nanosoft' ), $name )
			);

			update_option( wp_get_theme()->Template . '_sidebars', $custom_sidebars );
			header( 'location: widgets.php?message=1' );
		}
		else {
			header( 'location: widgets.php?error=2' );
		}

		exit;
	}

	/**
	 * Handle ajax action to remove the specific sidebar
	 * 
	 * @return  void
	 */
	public function remove_sidebar() {
		if ( isset($_GET['id'] ) ) {
			$id = $_GET['id'];
			$custom_sidebars = get_option( wp_get_theme()->Template . '_sidebars' );

			if ( $custom_sidebars && is_array( $custom_sidebars ) && isset( $custom_sidebars[$id] ) ) {
				unset( $custom_sidebars[$id] );
				update_option( wp_get_theme()->Template . '_sidebars', $custom_sidebars );
				header( 'location: widgets.php?message=2' );

				exit;
			}

			header( 'location: widgets.php?error=3' );
		}

		exit;
	}
}

new NanoSoft_Custom_Sidebars();

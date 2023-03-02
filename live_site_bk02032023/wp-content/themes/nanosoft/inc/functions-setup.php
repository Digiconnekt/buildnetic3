<?php
defined( 'ABSPATH' ) or die();


// Setup the theme navigation
add_action( 'after_setup_theme', 'nanosoft_navigation' );

// Setup theme supports
add_action( 'after_setup_theme', 'nanosoft_supports' );

// Setup theme sidebars
add_action( 'widgets_init', 'nanosoft_sidebars' );

// Add action to register the needed scripts and styles
// for the theme
add_action( 'init', 'nanosoft_register_assets', 5 );

// We need enqueue the scripts and styles before showing
// the content
add_action( 'wp_enqueue_scripts', 'nanosoft_enqueue_assets', 5 );

// Adding SVG support in the media library
add_filter( 'upload_mimes', 'nanosoft_upload_mimes' );

// Adding filter to change the shortcodes path
add_filter( 'line-shortcode-path', 'nanosoft_shortcodes_path' );

add_filter( 'vc_before_init', 'nanosoft_shortcodes_init' );


if ( ! isset( $content_width ) ) {
	$content_width = 900;
}


/**
 * Register the theme menu locations
 * 
 * @return  void
 * @since   1.0.0
 */
function nanosoft_navigation() {
	register_nav_menus( array(
		'primary'   => esc_html__( 'Primary Menu', 'nanosoft' ),
		'sliding'   => esc_html__( 'Sliding Menu', 'nanosoft' ),
		'top'       => esc_html__( 'Top Menu', 'nanosoft' )
	) );
}


/**
 * Register the theme features support
 * 
 * @return  void
 */
function nanosoft_supports() {
	add_theme_support( 'woocommerce' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-formats', array( 'gallery', 'link', 'quote', 'status', 'video', 'audio' ) );
	add_theme_support( 'html5', array( 'comment-list', 'search-form', 'comment-form', 'gallery', 'caption' ) );
	add_theme_support( 'post-thumbnails' );
}


function nanosoft_sidebars() {
	register_sidebar( array(
		'name'          => esc_html__( 'Primary Widgets Area', 'nanosoft' ),
		'id'            => 'primary',
		'description'   => esc_html__( 'Add widgets here to appear in your sidebar', 'nanosoft' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Sliding Content - Left', 'nanosoft' ),
		'id'            => 'off-canvas-left',
		'description'   => esc_html__( 'Add widgets here to appear in your sidebar', 'nanosoft' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Sliding Content - Right', 'nanosoft' ),
		'id'            => 'off-canvas-right',
		'description'   => esc_html__( 'Add widgets here to appear in your sidebar', 'nanosoft' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	/**
	 * Content bottom sidebars
	 */
	register_sidebar( array(
		'name'          => esc_html__( 'Content Bottom #1', 'nanosoft' ),
		'id'            => 'content-bottom-1',
		'description'   => esc_html__( 'Add widgets here to appear in your Content Bottom #1 area', 'nanosoft' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Content Bottom #2', 'nanosoft' ),
		'id'            => 'content-bottom-2',
		'description'   => esc_html__( 'Add widgets here to appear in your Content Bottom #2 area', 'nanosoft' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Content Bottom #3', 'nanosoft' ),
		'id'            => 'content-bottom-3',
		'description'   => esc_html__( 'Add widgets here to appear in your Content Bottom #3 area', 'nanosoft' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Content Bottom #4', 'nanosoft' ),
		'id'            => 'content-bottom-4',
		'description'   => esc_html__( 'Add widgets here to appear in your Content Bottom #4 area', 'nanosoft' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	/**
	 * Footer sidebars
	 */
	register_sidebar( array(
		'name'          => esc_html__( 'Footer #1', 'nanosoft' ),
		'id'            => 'footer-1',
		'description'   => esc_html__( 'Add widgets here to appear in your Footer #1 area', 'nanosoft' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer #2', 'nanosoft' ),
		'id'            => 'footer-2',
		'description'   => esc_html__( 'Add widgets here to appear in your Footer #2 area', 'nanosoft' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer #3', 'nanosoft' ),
		'id'            => 'footer-3',
		'description'   => esc_html__( 'Add widgets here to appear in your Footer #3 area', 'nanosoft' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer #4', 'nanosoft' ),
		'id'            => 'footer-4',
		'description'   => esc_html__( 'Add widgets here to appear in your Footer #4 area', 'nanosoft' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}


function nanosoft_register_assets() {
	// Theme's styles
	wp_register_style( 'nanosoft-components', get_template_directory_uri() . '/assets/css/components.css', array(), NANOSOFT_VERSION, 'all' );

	if (is_child_theme()) {
		wp_register_style( 'nanosoft-parent', get_template_directory_uri() . '/assets/css/style.css', array( 'nanosoft-components' ), NANOSOFT_VERSION, 'all' );
		wp_register_style( 'nanosoft', get_stylesheet_uri(), array( 'nanosoft-parent' ), NANOSOFT_VERSION, 'all' );
	} else {
		wp_register_style( 'nanosoft', get_template_directory_uri() . '/assets/css/style.css', array( 'nanosoft-components' ), NANOSOFT_VERSION, 'all' );
	}

	// Theme's scripts
	wp_register_script( 'nanosoft-components', get_theme_file_uri( '/assets/js/components.js' ), ['jquery'], NANOSOFT_VERSION, true );
	wp_register_script( 'nanosoft', get_template_directory_uri() . '/assets/js/theme.js', ['nanosoft-components'], NANOSOFT_VERSION, true );

	if ( $settings = get_option( 'line_settings' ) ) {
		wp_register_script( 'line-shortcode-maps-api', 'https://maps.google.com/maps/api/js?v=3&key=' . $settings['maps_api'], array(), false, true );
	}
}


function nanosoft_enqueue_google_fonts() {
	global $_required_google_fonts;

	if ( ! empty( $_required_google_fonts ) && is_array( $_required_google_fonts ) ) {
		$fonts = array();
		$subsets = array();

		foreach ( $_required_google_fonts as $font ) {
			$fonts[] = sprintf( '%s:%s', urlencode( $font['family'] ), urlencode( $font['variants'] ) );
			$subsets = array_merge( $subsets, $font['subsets'] );
		}

		if ( ! empty( $fonts ) ) {
			$scheme = parse_url( get_site_url(), PHP_URL_SCHEME );
			$fonts_url = add_query_arg( array(
				'family' => implode( '|', array_unique( $fonts ) ),
				'subset' => implode( ',', array_unique( $subsets ) )
				), sprintf( '%s://fonts.googleapis.com/css', $scheme ) );

			wp_enqueue_style( 'nanosoft-fonts', $fonts_url );
		}
	}
}


function nanosoft_enqueue_assets() {
	// The dynamic styles
	if ( locate_template( 'dynamic-styles.php' ) ) {
		// Load the script that generate the dynamic
		// stylesheets
		get_template_part( 'dynamic-styles' );
	}

	nanosoft_enqueue_google_fonts();

	// Enqueue the main styles
	wp_enqueue_style( 'nanosoft' );

	// Enqueue the inline stylesheet
	wp_add_inline_style( 'nanosoft', nanosoft_styles() );
	wp_add_inline_style( 'nanosoft', nanosoft_scheme_styles() );

	// Enqueue the main script
	wp_enqueue_script( 'nanosoft' );

	// Comment script
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}


/**
 * Register custom mime types for the theme
 * 
 * @param   array  $mimes  List of mime types
 * @return  array
 */
function nanosoft_upload_mimes( $mimes ) {
	$mimes['ico'] = 'image/x-icon';
	$mimes['dat'] = 'application/octet-stream';
	$mimes['txt'] = 'text/plain';

	return $mimes;
}


/**
 * Return the string that indicated the folder which contains
 * all shortcode templates
 * 
 * @param   string  $path  The original path
 * @return  string
 */
function nanosoft_shortcodes_path( $path ) {
	return 'tmpl/shortcodes/';
}


/**
 * Initial the additional shortcodes for the theme
 * 
 * @return  void
 */
function nanosoft_shortcodes_init() {
	require_once get_theme_file_path( 'inc/elements/locations.php' );
}


function nanosoft_acf_fallback_init () {
	if ( ! function_exists( 'get_field' ) ) {
		function get_field () {}
	}

	if ( ! function_exists( 'the_field' ) ) {
		function the_field () {}
	}
}
add_action( 'wp', 'nanosoft_acf_fallback_init' );

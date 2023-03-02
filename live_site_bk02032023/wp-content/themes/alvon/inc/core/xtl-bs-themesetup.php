<?php 
/**  add action with call back function .
--------------------------------------------------------------------------------------------------- */
add_action('after_setup_theme', 'alvon_content_width', 0);
add_action('after_setup_theme', 'alvon_setup');

/*------------------------------------------------------------------------------------------------------------------*/
/*	alvon setup
/*------------------------------------------------------------------------------------------------------------------*/

if ( !function_exists('alvon_setup') ):
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
	function alvon_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on alvon, use a find and replace
		 * to change 'alvon' to the name of your theme in all the template files
		 */
		load_theme_textdomain('alvon', get_template_directory() . '/languages');

		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		add_editor_style();

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
		 */
		add_theme_support( 'post-thumbnails' );

		add_theme_support( 'post-formats', array( 'link', 'quote', 'video' ) );


		/** // Add Custom Image Size.
		--------------------------------------------------------------------------------------------------- */
		//For Blog
		add_image_size( 'alvon-blog-640-450', 640, 450, TRUE );
		// For Poretfolio Image
		add_image_size( 'alvon-370-455', 370, 455, TRUE );
		add_image_size( 'alvon-420-280', 420, 280, TRUE );
		//For Thumbnail
		add_image_size( 'alvon-thumb-80-60', 80, 60, TRUE );

		/** // This theme uses wp_nav_menu() in one location..
		--------------------------------------------------------------------------------------------------- */
		register_nav_menus(array(
			'primary' => esc_html__('Primary Menu', 'alvon'),
		));

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support('html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		));

		/*
		 * Enable support for Post Formats.
		 * See http://codex.wordpress.org/Post_Formats
		 */
		add_theme_support('post-formats', array(
			'aside',
			'image',
			'video',
			'quote',
			'link',
		));

		// Set up the WordPress core custom background feature.
		add_theme_support('custom-background', apply_filters('alvon_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		)));


		//enable custom logo support
		// set up the WordPress custome Logo support
		add_theme_support( 'custom-logo', array(
			'height'      => 65,
			'width'       => 245,
			'flex-height' => true,
			'header-text' => array( 'site-title', 'site-description' ),
		) );
	}
endif; // alvon_setup


/*------------------------------------------------------------------------------------------------------------------*/
/*	sidebar register
/*------------------------------------------------------------------------------------------------------------------*/
/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 *
 *
**/

function alvon_widgets_init() {
	register_sidebar(array(
		'name' => esc_html__('Sidebar Widgets', 'alvon'),
		'id' => 'right-sidebar',
		'description' => esc_html__('Widgets in this area will be shown on page Sidebar.', 'alvon'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title'  => '<div class="widget-title mb-20"><h4>',
		'after_title'   => '</h4><span></span></div>',
	));
	register_sidebar(array(
		'name' => esc_html__('Footer Widgets 1', 'alvon'),
		'id' => 'footer-widgets1',
		'description' => esc_html__('Widgets in this area will be shown on footer 1 sidebar.', 'alvon'),
		'before_widget' => '<div id="%1$s" class="%2$s col-lg-3 col-md-6"><div class="footer-widget mb-30">',
		'after_widget' => '</div></div>',
		'before_title'  => '<div class="fw-title mb-30"><h5>',
		'after_title'   => '</h5></div>',
	));
	register_sidebar(array(
		'name' => esc_html__('Footer Widgets 2', 'alvon'),
		'id' => 'footer-widgets2',
		'description' => esc_html__('Widgets in this area will be shown on footer 2 sidebar.', 'alvon'),
		'before_widget' => '<div id="%1$s" class="%2$s col-lg-3 col-md-6"><div class="footer-widget mb-30">',
		'after_widget' => '</div></div>',
		'before_title'  => '<div class="fw-title mb-30"><h5>',
		'after_title'   => '</h5></div>',
	));	
}
add_action('widgets_init', 'alvon_widgets_init');


/*------------------------------------------------------------------------------------------------------------------*/
/*	  $content_width
/*------------------------------------------------------------------------------------------------------------------*/ 
  
/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function alvon_content_width() {
	$GLOBALS['content_width'] = apply_filters('alvon_content_width', 1170);
}
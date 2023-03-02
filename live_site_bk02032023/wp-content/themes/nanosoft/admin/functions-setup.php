<?php
defined( 'ABSPATH' ) or die();

// The third-party libraries
require_once NANOSOFT_PATH . 'vendor/class-tgm-plugin-activation.php';

// Classes
require_once NANOSOFT_PATH . 'admin/inc/class-plugins-activation.php';
require_once NANOSOFT_PATH . 'admin/inc/class-sample-data-worker.php';
require_once NANOSOFT_PATH . 'admin/inc/class-sample-data.php';

// Register theme's assets
add_action( 'init', 'nanosoft_setup_admin_assets' );

// Initialize sample data installer
add_action( 'init', 'nanosoft_setup_sample_data_installer' );


if ( ! function_exists( 'nanosoft_setup_admin_assets' ) ):
/**
 * Register scripts and styles for the theme
 * 
 * @return  void
 */
function nanosoft_setup_admin_assets() {
	// Font Awesome
	wp_register_style( 'font-awesome', get_theme_file_uri( 'assets/css/components.css' ), array(), '4.7.0' );
	
	// Chosen
	wp_register_style( 'nanosoft-chosen', get_theme_file_uri( 'admin/js/vendor/chosen/chosen.min.css' ), array(), NANOSOFT_VERSION );
	wp_register_script( 'nanosoft-chosen', get_theme_file_uri( 'admin/js/vendor/chosen/chosen.jquery.min.js' ), array( 'jquery' ), NANOSOFT_VERSION, true );
	
	// Spectrum
	wp_register_style( 'nanosoft-spectrum', get_theme_file_uri( 'admin/js/vendor/spectrum/spectrum.css' ), array(), NANOSOFT_VERSION );
	wp_register_script( 'nanosoft-spectrum', get_theme_file_uri( 'admin/js/vendor/spectrum/spectrum.js' ), array( 'jquery' ), NANOSOFT_VERSION, true );

	// Spectrum
	wp_register_style( 'nanosoft-iconpicker', get_theme_file_uri( 'admin/js/vendor/iconpicker/css/jquery.fonticonpicker.css' ), array(), NANOSOFT_VERSION );
	wp_register_script( 'nanosoft-iconpicker', get_theme_file_uri( 'admin/js/vendor/iconpicker/fonticonpicker.js' ), array( 'jquery' ), NANOSOFT_VERSION, true );

	// VueJS library
	wp_register_script( 'vuejs', get_theme_file_uri( 'admin/js/vendor/vue.js' ), array(), NANOSOFT_VERSION, true );

	// Sample data installer
	wp_register_style( 'nanosoft-sample-data', get_theme_file_uri( 'admin/css/sample-data.css' ) );
	wp_register_script( 'nanosoft-sample-data', get_theme_file_uri( 'admin/js/sample-data.js' ), array( 'vuejs', 'jquery' ) );

	/**
	 * Core scripts
	 */
	wp_register_script( 'nanosoft-options', get_theme_file_uri( 'admin/js/options.js' ), array(
		'vuejs',
		'nanosoft-spectrum',
		'nanosoft-chosen',
		'wp-plupload',
		'jquery-ui-resizable',
		'jquery-ui-sortable',
		'nanosoft-iconpicker'
	), NANOSOFT_VERSION, true );

	wp_register_style( 'nanosoft-options', get_theme_file_uri( 'admin/css/options.css' ), array(
		'font-awesome',
		'nanosoft-chosen',
		'nanosoft-spectrum',
		'nanosoft-iconpicker'
	), NANOSOFT_VERSION );
	
	wp_register_style( 'nanosoft-customize', get_theme_file_uri( 'admin/css/customize.css' ), array( 'nanosoft-options' ), NANOSOFT_VERSION );
}
endif;



if ( ! function_exists( 'nanosoft_setup_sample_data_installer' ) ):
function nanosoft_setup_sample_data_installer() {
	new NanoSoft_Sample_Data();
}
endif;

function nanosoft_sample_data_files() {
	return array(
		array(
			'title'   => 'Sample Data #1',
			'file'    => 'demo.zip',
			'preview' => get_theme_file_uri( 'demo/screenshot-01.png' )
		),
		array(
			'title'   => 'Sample Data #2',
			'file'    => 'demo-6.zip',
			'preview' => get_theme_file_uri( 'demo/screenshot-02.jpg' )
		),
		array(
			'title'   => 'Sample Data #3',
			'file'    => 'demo-7.zip',
			'preview' => get_theme_file_uri( 'demo/screenshot-03.jpg' )
		)
	);
}
add_filter( 'nanosoft/sample-datas', 'nanosoft_sample_data_files' );


add_filter('acf/settings/save_json', function() {
	return get_theme_file_path( 'admin/json/' );
} );

add_filter('acf/settings/load_json', function( $paths ) {
    return array( get_theme_file_path( 'admin/json/' ) );
} );

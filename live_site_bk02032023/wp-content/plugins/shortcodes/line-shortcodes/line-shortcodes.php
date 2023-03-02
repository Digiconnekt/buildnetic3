<?php
/**
 * WARNING: This file is part of the plugin. DO NOT edit
 * this file under any circumstances.
 */

/**
 * Plugin Name: Shortcodes by LineThemes
 * Plugin URI:  http://linethemes.com/
 * Author:      LineThemes
 * Version:     1.0.5
 * Author URI: http://linethemes.com/
 */
defined( 'ABSPATH' ) or die();


add_action( 'init', function() {
	wp_register_script( 'line-shortcode-3rd', plugin_dir_url( __FILE__ ) . 'js/shortcodes-3rd.js', array( 'jquery' ), '1.0.0', true );
	wp_register_script( 'line-shortcode', plugin_dir_url( __FILE__ ) . 'js/shortcodes.js', array( 'line-shortcode-3rd' ), '1.0.0', true );

	if ( $settings = get_option( 'line_settings' ) ) {
		wp_register_script( 'line-shortcode-maps-api', '//maps.google.com/maps/api/js?v=3&key=' . $settings['maps_api'], array(), false, true );
		wp_register_script( 'line-shortcode-maps', plugin_dir_url( __FILE__ ) . 'js/maps.js', array( 'line-shortcode-maps-api' ), '1.0.0', true );
	}


	$unsupported_tags = apply_filters( 'line-shortcode-unsupported', array() );

	/**
	 * Auto load all includable files
	 */
	foreach ( glob( plugin_dir_path( __FILE__ ) . '/includes/*.php' ) as $file ) {
		$filename = basename( $file );
		$tagname  = str_replace( '-', '_', pathinfo( $file, PATHINFO_FILENAME ) );

		if ( ! in_array( $tagname, $unsupported_tags ) ) {
			add_shortcode( $tagname, function( $atts, $content = '' ) use( $file, $filename ) {
				wp_enqueue_script( 'line-shortcode' );
				ob_start();

				include ( $template = locate_template( apply_filters( 'line-shortcode-path', 'templates/shortcodes/' ) . $filename ) )
					? $template : $file;

				return ob_get_clean();
			} );
		}
	}
} );

add_action( 'plugins_loaded', function() {
	require_once __DIR__ . '/line-shortcodes-extras.php';

	if ( is_admin() ) {
		require_once __DIR__ . '/line-shortcodes-admin.php';
	}

	if ( function_exists( 'vc_map' ) ) {
		require_once __DIR__ . '/line-shortcodes-map.php';
	}
} );

add_action( 'after_setup_theme', function() {
	if ( ! has_filter( 'widget_text', 'do_shortcode' ) ) {
		add_filter( 'widget_text', 'do_shortcode' );
	}
} );

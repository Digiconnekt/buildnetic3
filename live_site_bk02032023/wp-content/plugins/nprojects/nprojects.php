<?php
/**
 * WARNING: This file is part of the Projects plugin. DO NOT edit
 * this file under any circumstances.
 */

/**
 * Plugin Name: nProjects by LineThemes
 * Plugin URI:  http://linethemes.com/
 * Description: 
 * Author:      LineThemes
 * Version:     1.0.8
 * Author URI: http://linethemes.com/
 */
defined( 'ABSPATH' ) or die();

// Load classes
require_once plugin_dir_path( __FILE__ ) . 'classes/nprojects-base.php';
require_once plugin_dir_path( __FILE__ ) . 'classes/nprojects-helper.php';
require_once plugin_dir_path( __FILE__ ) . 'classes/nprojects-shortcode.php';
require_once plugin_dir_path( __FILE__ ) . 'classes/nprojects.php';

function nprojects_init () {
	nProjects::instance();
	nProjects_Shortcode::instance();

	if ( is_admin() ) {
		// Load the admin class
		require_once plugin_dir_path( __FILE__ ) . 'classes/nprojects-admin.php';

		nProjects_Admin::instance();
	}
}

/**
 * Register action to initialize the plugin
 */
if ( did_action( 'plugins_loaded' ) ) {
	nprojects_init();
}
else {
	add_action( 'plugins_loaded', 'nprojects_init' );
}

<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
/**
 *
 * Framework admin enqueue style and scripts
 *
 * @since 1.0.0
 * @version 1.0.0
 *
 */
if( ! function_exists( 'alvon_admin_enqueue_scripts' ) ) {
  function alvon_admin_enqueue_scripts() {

    // admin utilities
    wp_enqueue_media();

    // wp core styles
    wp_enqueue_style( 'wp-color-picker' );
    wp_enqueue_style( 'wp-jquery-ui-dialog' );

    // framework core styles
    wp_enqueue_style( 'alvon-framework', ALVON_URI .'/assets/css/alvon-framework.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'font-awesome', ALVON_URI .'/assets/css/font-awesome.css', array(), '4.7.0', 'all' );

    if ( ALVON_ACTIVE_LIGHT_THEME ) {
      wp_enqueue_style( 'alvon-framework-theme', ALVON_URI .'/assets/css/alvon-framework-light.css', array(), "1.0.0", 'all' );
    }

    if ( is_rtl() ) {
      wp_enqueue_style( 'alvon-framework-rtl', ALVON_URI .'/assets/css/alvon-framework-rtl.css', array(), '1.0.0', 'all' );
    }

    // wp core scripts
    wp_enqueue_script( 'wp-color-picker' );
    wp_enqueue_script( 'jquery-ui-dialog' );
    wp_enqueue_script( 'jquery-ui-sortable' );
    wp_enqueue_script( 'jquery-ui-accordion' );

    // framework core scripts
    wp_enqueue_script( 'alvon-plugins',    ALVON_URI .'/assets/js/alvon-plugins.js',    array(), '1.0.0', true );
    wp_enqueue_script( 'alvon-framework',  ALVON_URI .'/assets/js/alvon-framework.js',  array( 'alvon-plugins' ), '1.0.0', true );

  }
  add_action( 'admin_enqueue_scripts', 'alvon_admin_enqueue_scripts' );
}

<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
/**
 *
 * Get icons from admin ajax
 *
 * @since 1.0.0
 * @version 1.0.0
 *
 */
if( ! function_exists( 'alvon_get_icons' ) ) {
  function alvon_get_icons() {

    do_action( 'alvon_add_icons_before' );

    $jsons = apply_filters( 'alvon_add_icons_json', glob( ALVON_DIR . '/fields/icon/*.json' ) );

    if( ! empty( $jsons ) ) {

      foreach ( $jsons as $path ) {

        $object = alvon_get_icon_fonts( 'fields/icon/'. basename( $path ) );

        if( is_object( $object ) ) {

          echo ( count( $jsons ) >= 2 ) ? '<h4 class="alvon-icon-title">'. $object->name .'</h4>' : '';

          foreach ( $object->icons as $icon ) {
            echo '<a class="alvon-icon-tooltip" data-alvon-icon="'. $icon .'" data-title="'. $icon .'"><span class="alvon-icon alvon-selector"><i class="'. $icon .'"></i></span></a>';
          }

        } else {
          echo '<h4 class="alvon-icon-title">'. esc_html__( 'Error! Can not load json file.', 'alvon-framework' ) .'</h4>';
        }

      }

    }

    do_action( 'alvon_add_icons' );
    do_action( 'alvon_add_icons_after' );

    die();
  }
  add_action( 'wp_ajax_alvon-get-icons', 'alvon_get_icons' );
}

/**
 *
 * Export options
 *
 * @since 1.0.0
 * @version 1.0.0
 *
 */
if( ! function_exists( 'alvon_export_options' ) ) {
  function alvon_export_options() {

    header('Content-Type: plain/text');
    header('Content-disposition: attachment; filename=backup-options-'. gmdate( 'd-m-Y' ) .'.txt');
    header('Content-Transfer-Encoding: binary');
    header('Pragma: no-cache');
    header('Expires: 0');

    echo alvon_encode_string( get_option( ALVON_OPTION ) );

    die();
  }
  add_action( 'wp_ajax_alvon-export-options', 'alvon_export_options' );
}

/**
 *
 * Set icons for wp dialog
 *
 * @since 1.0.0
 * @version 1.0.0
 *
 */
if( ! function_exists( 'alvon_set_icons' ) ) {
  function alvon_set_icons() {

    echo '<div id="alvon-icon-dialog" class="alvon-dialog" title="'. esc_html__( 'Add Icon', 'alvon-framework' ) .'">';
    echo '<div class="alvon-dialog-header alvon-text-center"><input type="text" placeholder="'. esc_html__( 'Search a Icon...', 'alvon-framework' ) .'" class="alvon-icon-search" /></div>';
    echo '<div class="alvon-dialog-load"><div class="alvon-icon-loading">'. esc_html__( 'Loading...', 'alvon-framework' ) .'</div></div>';
    echo '</div>';

  }
  add_action( 'admin_footer', 'alvon_set_icons' );
  add_action( 'customize_controls_print_footer_scripts', 'alvon_set_icons' );
}

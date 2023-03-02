<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
/**
 *
 * Field: Backup
 *
 * @since 1.0.0
 * @version 1.0.0
 *
 */
class ALVONFramework_Option_backup extends ALVONFramework_Options {

  public function __construct( $field, $value = '', $unique = '' ) {
    parent::__construct( $field, $value, $unique );
  }

  public function output() {

    echo $this->element_before();

    echo '<textarea name="'. $this->unique .'[import]"'. $this->element_class() . $this->element_attributes() .'></textarea>';
    submit_button( esc_html__( 'Import a Backup', 'alvon-framework' ), 'primary alvon-import-backup', 'backup', false );
    echo '<small>( '. esc_html__( 'copy-paste your backup string here', 'alvon-framework' ).' )</small>';

    echo '<hr />';

    echo '<textarea name="_nonce"'. $this->element_class() . $this->element_attributes() .' disabled="disabled">'. alvon_encode_string( get_option( $this->unique ) ) .'</textarea>';
    echo '<a href="'. admin_url( 'admin-ajax.php?action=alvon-export-options' ) .'" class="button button-primary" target="_blank">'. esc_html__( 'Export and Download Backup', 'alvon-framework' ) .'</a>';
    echo '<small>-( '. esc_html__( 'or', 'alvon-framework' ) .' )-</small>';
    submit_button( esc_html__( 'Reset All Options', 'alvon-framework' ), 'alvon-warning-primary alvon-reset-confirm', $this->unique . '[resetall]', false );
    echo '<small class="alvon-text-warning">'. esc_html__( 'Please be sure for reset all of framework options.', 'alvon-framework' ) .'</small>';

    echo $this->element_after();

  }

}

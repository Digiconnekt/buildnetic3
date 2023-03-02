<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
/**
 *
 * Field: Textarea
 *
 * @since 1.0.0
 * @version 1.0.0
 *
 */
class ALVONFramework_Option_textarea extends ALVONFramework_Options {

  public function __construct( $field, $value = '', $unique = '' ) {
    parent::__construct( $field, $value, $unique );
  }

  public function output() {

    echo $this->element_before();
    echo $this->shortcode_generator();
    echo '<textarea name="'. $this->element_name() .'"'. $this->element_class() . $this->element_attributes() .'>'. $this->element_value() .'</textarea>';
    echo $this->element_after();

  }

  public function shortcode_generator() {
    if( isset( $this->field['shortcode'] ) && ALVON_ACTIVE_SHORTCODE ) {
      echo '<a href="#" class="button button-primary alvon-shortcode alvon-shortcode-textarea">'. esc_html__( 'Add Shortcode', 'alvon-framework' ) .'</a>';
    }
  }
}

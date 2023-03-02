<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
/**
 *
 * Field: Notice
 *
 * @since 1.0.0
 * @version 1.0.0
 *
 */
class ALVONFramework_Option_notice extends ALVONFramework_Options {

  public function __construct( $field, $value = '', $unique = '' ) {
    parent::__construct( $field, $value, $unique );
  }

  public function output() {

    echo $this->element_before();
    echo '<div class="alvon-notice alvon-'. $this->field['class'] .'">'. $this->field['content'] .'</div>';
    echo $this->element_after();

  }

}

<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
/**
 *
 * Email validate
 *
 * @since 1.0.0
 * @version 1.0.0
 *
 */
if( ! function_exists( 'alvon_validate_email' ) ) {
  function alvon_validate_email( $value, $field ) {

    if ( ! sanitize_email( $value ) ) {
      return esc_html__( 'Please write a valid email address!', 'alvon-framework' );
    }

  }
  add_filter( 'alvon_validate_email', 'alvon_validate_email', 10, 2 );
}

/**
 *
 * Numeric validate
 *
 * @since 1.0.0
 * @version 1.0.0
 *
 */
if( ! function_exists( 'alvon_validate_numeric' ) ) {
  function alvon_validate_numeric( $value, $field ) {

    if ( ! is_numeric( $value ) ) {
      return esc_html__( 'Please write a numeric data!', 'alvon-framework' );
    }

  }
  add_filter( 'alvon_validate_numeric', 'alvon_validate_numeric', 10, 2 );
}

/**
 *
 * Required validate
 *
 * @since 1.0.0
 * @version 1.0.0
 *
 */
if( ! function_exists( 'alvon_validate_required' ) ) {
  function alvon_validate_required( $value ) {
    if ( empty( $value ) ) {
      return esc_html__( 'Fatal Error! This field is required!', 'alvon-framework' );
    }
  }
  add_filter( 'alvon_validate_required', 'alvon_validate_required' );
}

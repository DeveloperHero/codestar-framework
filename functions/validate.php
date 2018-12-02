<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
/**
 *
 * Email validate
 *
 * @since 1.0.0
 * @version 1.0.0
 *
 */
if( ! function_exists( 'cs_validate_email' ) ) {
  function cs_validate_email( $value, $field ) {
    if (empty($value))
      return;

    if ( ! sanitize_email( $value ) ) {
      return esc_html__( 'Please write a valid email address!', 'cs-framework' );
    }

  }
  add_filter( 'cs_validate_email', 'cs_validate_email', 10, 2 );
}

/**
 *
 * Numeric validate
 *
 * @since 1.0.0
 * @version 1.0.0
 *
 */
if( ! function_exists( 'cs_validate_numeric' ) ) {
  function cs_validate_numeric( $value, $field ) {
    if (empty($value))
      return;

    if ( ! is_numeric( $value ) ) {
      return esc_html__( 'Please write a numeric data!', 'cs-framework' );
    }

  }
  add_filter( 'cs_validate_numeric', 'cs_validate_numeric', 10, 2 );
}

/**
 *
 * Required validate
 *
 * @since 1.0.0
 * @version 1.0.0
 *
 */
if( ! function_exists( 'cs_validate_required' ) ) {
  function cs_validate_required( $value ) {
    if ( empty( $value ) ) {
      return esc_html__( 'This field is required!', 'cs-framework' );
    }
  }
  add_filter( 'cs_validate_required', 'cs_validate_required' );
}

/**
 *
 * URL validate
 *
 * @since 1.0.2
 * @version 1.0.2
 *
 */
if( ! function_exists( 'cs_validate_url' ) ) {
  function cs_validate_url( $value ) {
    if (empty($value))
      return;

    if (filter_var($value, FILTER_VALIDATE_URL) == false) {
      return esc_html__( 'Field must be a valid URL', 'cs-framework' );
    }
  }
  add_filter( 'cs_validate_url', 'cs_validate_url' );
}
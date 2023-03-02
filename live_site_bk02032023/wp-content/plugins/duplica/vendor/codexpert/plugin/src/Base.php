<?php
namespace Codexpert\Plugin;

/**
 * if accessed directly, exit.
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * @package Plugin
 * @subpackage Base
 * @author Codexpert <hi@codexpert.io>
 */
abstract class Base {

	public $plugin;

	/**
	 * Constructor function
	 */
	public function __construct( $plugin ) {
		$this->plugin = $plugin;
	}
	
	/**
	 * @see register_activation_hook
	 */
	public function activate( $callback ) {
		register_activation_hook( $this->plugin['file'], [ $this, $callback ] );
	}
	
	/**
	 * @see register_activation_hook
	 */
	public function deactivate( $callback ) {
		register_deactivation_hook( $this->plugin['file'], [ $this, $callback ] );
	}
	
	/**
	 * @see add_action
	 */
	public function action( $tag, $callback, $priority = 10, $accepted_args = 1 ) {
		add_action( $tag, [ $this, $callback ], $priority, $accepted_args );
	}

	/**
	 * @see add_filter
	 */
	public function filter( $tag, $callback, $priority = 10, $accepted_args = 1 ) {
		add_filter( $tag, [ $this, $callback ], $priority, $accepted_args );
	}

	/**
	 * @see add_shortcode
	 */
	public function register( $tag, $callback ) {
		add_shortcode( $tag, [ $this, $callback ] );
	}

	/**
	 * @see add_action( 'wp_ajax_..' )
	 */
	public function priv( $handle, $callback ) {
		$this->action( "wp_ajax_{$handle}", $callback );
	}

	/**
	 * @see add_action( 'wp_ajax_nopriv_..' )
	 */
	public function nopriv( $handle, $callback ) {
		$this->action( "wp_ajax_nopriv_{$handle}", $callback );
	}

	/**
	 * @see add_action( 'wp_ajax_..' )
	 * @see add_action( 'wp_ajax_nopriv_..' )
	 */
	public function all( $handle, $callback ) {
		$this->priv( $handle, $callback );
		$this->nopriv( $handle, $callback );
	}

	/**
	 * @return true
	 */
	public function __return_true() {
		return __return_true();
	}

	/**
	 * @return false
	 */
	public function __return_false() {
		return __return_false();
	}

	/**
	 * @return 0
	 */
	public function __return_zero() {
		return __return_zero();
	}

	/**
	 * @return []
	 */
	public function __return_empty_array() {
		return __return_empty_array();
	}

	/**
	 * @return null
	 */
	public function __return_null() {
		return __return_null();
	}

	/**
	 * @return ''
	 */
	public function __return_empty_string() {
		return __return_empty_string();
	}

	/**
	 * Sanitize data
	 * 
	 * @param mix $input The input
	 * @param string $type The data type
	 * 
	 * @return mix
	 */
	public function sanitize( $input, $type = 'text' ) {

		if( 'array' == $type ) {
			$sanitized = [];

			foreach ( $input as $key => $value ) {
				if( is_array( $value ) ) {
					$sanitized[ $key ] = $this->sanitize( $value, $type );
				}
				else {
					$sanitized[ $key ] = $this->sanitize( $value, 'text' );
				}
			}

			return $sanitized;
		}

		if( ! in_array( $type, [ 'textarea', 'email', 'file', 'class', 'key', 'title', 'user', 'option', 'meta' ] ) ) {
			$type = 'text';
		}

		if( array_key_exists( $type,
			$maps = [
				'text'      => 'text_field',
				'textarea'  => 'textarea_field',
				'file'      => 'file_name',
				'class'     => 'html_class',
			]
		) ) {
			$type = $maps[ $type ];
		}

		$fn = "sanitize_{$type}";

		return $fn( $input );
	}
}
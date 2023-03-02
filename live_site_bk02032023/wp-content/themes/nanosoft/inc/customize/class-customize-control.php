<?php
defined( 'ABSPATH' ) or die();

/**
 * A wrapper for the customize control
 *
 * @package     Royal
 * @subpackage  Customize
 */
class NanoSoft_Customize_Control extends WP_Customize_Control
{
	/**
	 * Additional class for the control
	 * 
	 * @var  array
	 */
	public $classname;

	/**
	 * Instance of the options control
	 * that linked to this wrapper
	 * 
	 * @var  NanoSoft_Options_Control
	 */
	public $control;

	/**
	 * Override constructor method of customize control
	 * to create instance for options control
	 * 
	 * @param   WP_Customize_Manager  $wp_customize  Instance of customize manager
	 * @param   string                $id            ID of the control
	 * @param   array                 $args          Control params
	 */
	public function __construct( $wp_customize, $id, $args = array() ) {
		parent::__construct( $wp_customize, $id, $args );

		// Create new instance for options control
		if ( class_exists( $args['classname'] ) ) {
			$this->control = new $args['classname']( $id, $args );
			$this->control->link = $id;
			$this->control->value = $this->value();
		}
	}

	public function enqueue() {
		$this->control->enqueue();
	}

	/**
	 * Render the control
	 * 
	 * @return  void
	 */
	protected function render() {
		$this->control->render();
	}
}

<?php
defined( 'ABSPATH' ) or die();

/**
 * Base class for option controls
 * 
 * @package     OptionsPlus
 * @subpackage  Options
 */
abstract class NanoSoft_Options_Control
{
	/**
	 * Control ID
	 * 
	 * @var  string
	 */
	public $id;

	/**
	 * Control type
	 * @var  string
	 */
	public $type;

	/**
	 * Control label
	 * 
	 * @var  string
	 */
	public $label;

	public $description;

	/**
	 * Default value of the control
	 * 
	 * @var  mixed
	 */
	public $default;

	/**
	 * Control value
	 * 
	 * @var  mixed
	 */
	public $value;

	public $choices = array();

	/**
	 * Setting link for the control
	 * 
	 * @var  string
	 */
	public $link;

	/**
	 * Section owner for this control
	 * 
	 * @var  string
	 */
	public $section;

	/**
	 * Additional class for this control
	 * 
	 * @var  string
	 */
	public $class;

	/**
	 * @param   string  $id    Control ID
	 * @param   array   $args  Control params
	 */
	public function __construct( $id, $args = array() ) {
		foreach( array_keys( get_object_vars( $this ) ) as $key ) {
			if ( isset( $args[$key] ) )
				$this->$key = $args[$key];
		}

		$this->id = $id;
	}

	/**
	 * Return the value of control
	 * 
	 * @return  mixed
	 */
	public function value() {
		if ( $this->value === null )
			$this->value = $this->default;

		return $this->value;
	}

	/**
	 * Render the control
	 * 
	 * @return  string
	 */
	public function render() {
		$this->before_render();

		$id    = 'options-control-' . $this->id;
		$class = 'options-control options-control-' . $this->type;
		$name  = '_options-' . $this->type . '-' . $this->id;

		if ( ! empty( $this->class ) ) {
			$class .= " {$this->class}";
		}

		if ( empty( $this->label ) ) {
			$class .= ' no-label';
		}

		if ( is_callable( $this->choices ) ) {
			$this->choices = call_user_func( $this->choices );
		}

		?><li id="<?php echo esc_attr( $id ); ?>" class="<?php echo esc_attr( $class ); ?>"
			  data-option="<?php echo esc_attr( $this->id ) ?>"
			  data-customizeid="<?php echo esc_attr( $this->link ) ?>"
			  data-value="<?php echo esc_attr( json_encode( $this->value() ) ) ?>"
			  data-default="<?php echo esc_attr( json_encode( $this->default ) ) ?>"
			  data-choices="<?php echo esc_attr( json_encode( $this->choices ) ) ?>">
			<?php if ( ! empty( $this->label ) ): ?>
				<div class="options-control-title">
					<label for="<?php echo esc_attr( $name ) ?>"><?php echo esc_html( $this->label ); ?></label>
				</div>
			<?php endif ?>

			<?php if ( ! empty( $this->description ) ): ?>
				<div class="options-control-desc">
					<?php echo esc_html( $this->description ) ?>
				</div>
			<?php endif ?>
			
			<?php $this->render_content(); ?>
		</li><?php

		$this->after_render();
	}

	public static function sanitize( $data ) {
		return $data;
	}

	/**
	 * Enqueue control's assets
	 * 
	 * @return  void
	 */
	public function enqueue() {
	}

	/**
	 * Render the control content
	 * 
	 * @return  void
	 */
	abstract protected function render_content();

	/**
	 * This method will be used to do something
	 * before render the control
	 * 
	 * @return  void
	 */
	protected function before_render() {

	}

	/**
	 * This method will be used to do something
	 * after render the control
	 * 
	 * @return  void
	 */
	protected function after_render() {

	}
}

// Import all built-in controls
foreach ( glob( NANOSOFT_PATH . 'inc/options/fields/*.php' ) as $file ) {
	require_once $file;
}

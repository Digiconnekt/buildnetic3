<?php
defined( 'ABSPATH' ) or die();


/**
 * This class will be present an colorpicker control
 */
class NanoSoft_Options_Code extends NanoSoft_Options_Control
{
	/**
	 * The control type
	 * 
	 * @var  string
	 */
	public $type = 'code';

	/**
	 * Code editor highlight mode
	 * 
	 * @var  string
	 */
	public $mode = 'htmlmixed';

	/**
	 * Enqueue assets for this control
	 * 
	 * @return  void
	 */
	public function enqueue() {
		wp_enqueue_style( 'op-codemirror' );
		wp_enqueue_script( 'op-codemirror' );
	}
	
	/**
	 * Render the control markup
	 * 
	 * @return  void
	 */
	public function render_content() {
		$name = '_options-control-code-' . $this->id;
		?>
			<div class="options-control-inputs">
				<textarea name="op-options[<?php echo esc_attr( $this->id ) ?>]" id="<?php echo esc_attr( $name ) ?>" data-mode="<?php echo esc_attr( $this->mode ) ?>"><?php echo esc_html( $this->value() ) ?></textarea>
			</div>
		<?php
	}
}

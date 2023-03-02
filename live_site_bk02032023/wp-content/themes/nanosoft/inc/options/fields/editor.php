<?php
defined( 'ABSPATH' ) or die();


/**
 * This class will be present an text control
 */
class NanoSoft_Options_Editor extends NanoSoft_Options_Control
{
	/**
	 * The control type
	 * 
	 * @var  string
	 */
	public $type = 'editor';
	
	/**
	 * Render the control markup
	 * 
	 * @return  void
	 */
	public function render_content() {
		$name = '_options-editor-' . $this->id;
		?>
		<div class="options-control-inputs">
			<?php wp_editor( $this->value(), $name, array( 'textarea_name' => "op-options[{$this->id}]", 'drag_drop_upload' => true ) ) ?>
		</div>
		<?php
	}
}

<?php
defined( 'ABSPATH' ) or die();


/**
 * This class will be present an text control
 * for theme optionsr
 */
class NanoSoft_Options_TextField extends NanoSoft_Options_Control
{
	/**
	 * The control type
	 * 
	 * @var  string
	 */
	public $type = 'textfield';
	
	/**
	 * Render the control markup
	 * 
	 * @return  void
	 */
	public function render_content() {
		?>
			
			<div class="options-control-inputs">
				<textfield v-bind:value="data" v-on:change="triggerChange"></textfield>
			</div>

		<?php
	}
}

<?php
defined( 'ABSPATH' ) or die();


/**
 * This class will be present an social icons control
 */
class NanoSoft_Options_Icons extends NanoSoft_Options_Control
{
	/**
	 * The control type
	 * 
	 * @var  string
	 */
	public $type = 'icons';
	public $default = array();

	public function render_content() {
		?>
			<div class="options-control-inputs">
				<icons v-bind:value="data" v-bind:icons="_nanosofticons" v-on:change="triggerChange"></icons>
			</div>
		<?php
	}
}

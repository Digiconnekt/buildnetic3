<?php
defined( 'ABSPATH' ) or die();


/**
 * Select control
 */
class NanoSoft_Options_Dropdown extends NanoSoft_Options_Control
{
	/**
	 * The control type
	 * 
	 * @var  string
	 */
	public $type = 'dropdown';

	/**
	 * Render the control markup
	 * 
	 * @return  void
	 */
	public function render_content() {
		?>
		<div class="options-control-inputs">
			<dropdown v-bind:value="data" v-bind:options="choices" v-on:change="triggerChange"></dropdown>
		</div><?php
	}
}

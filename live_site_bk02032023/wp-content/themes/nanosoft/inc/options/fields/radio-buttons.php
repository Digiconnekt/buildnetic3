<?php
defined( 'ABSPATH' ) or die();


/**
 * Radio buttons control
 */
class NanoSoft_Options_RadioButtons extends NanoSoft_Options_Control
{
	public $type = 'radio-buttons';

	public function render_content() {
		?>

			<div class="options-control-inputs">
				<radio-buttons v-bind:value="data" v-bind:options="choices" v-on:change="triggerChange"></radio-buttons>
			</div>

		<?php
	}
}

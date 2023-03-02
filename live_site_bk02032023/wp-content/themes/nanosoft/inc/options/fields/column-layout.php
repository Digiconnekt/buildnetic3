<?php
defined( 'ABSPATH' ) or die();

class NanoSoft_Options_ColumnLayout extends NanoSoft_Options_Control
{
	public $type = 'column-layout';
	public $default = array(
		'columns' => 4,
		'layout'  => array(
			array(12),
			array(6, 6),
			array(4, 4, 4),
			array(3, 3, 3, 3)
		)
	);

	
	/**
	 * Render the control markup
	 * 
	 * @return  void
	 */
	public function render_content() {
		?>

			<div class="options-control-inputs">
				<column-layout v-bind:value="data" v-on:change="triggerChange"></column-layout>
			</div>

		<?php
	}
}

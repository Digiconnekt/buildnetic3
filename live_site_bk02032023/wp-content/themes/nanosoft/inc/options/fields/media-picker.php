<?php
defined( 'ABSPATH' ) or die();


/**
 * This class will be present an mediapicker control
 */
class NanoSoft_Options_MediaPicker extends NanoSoft_Options_Control
{
	/**
	 * The control type
	 * 
	 * @var  string
	 */
	public $type = 'media-picker';

	public $default = array(
		'id'  => -1,
		'url' => false
	);
	
	/**
	 * Render the control markup
	 * 
	 * @return  void
	 */
	public function render_content() {
		?>
			<div class="options-control-inputs">
				<image-upload v-bind:value="data" v-on:change="triggerChange"></image-upload>
			</div>
		<?php
	}
}

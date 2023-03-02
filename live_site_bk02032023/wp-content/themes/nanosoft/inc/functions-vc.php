<?php
add_action( 'vc_before_init', function () {
	vc_add_param( 'vc_row', [
		'type' => 'dropdown',
		'heading' => esc_html__( 'Canvas Effect', 'nanosoft' ),
		'param_name' => 'canvas_effect',
		'value' => [
			esc_html__( 'No', 'nanosoft' ) => 'no',
			esc_html__( 'Yes', 'nanosoft' ) => 'yes'
		]
	] );
} );
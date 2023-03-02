<?php
defined( 'ABSPATH' ) or die();


// Add filter to register customize containers
add_filter( 'nanosoft_customize_containers', 'nanosoft_customize_elements_containers' );
add_filter( 'nanosoft_customize_settings', 'nanosoft_customize_elements_settings' );


// Add filter to register customize controls
add_filter( 'nanosoft_customize_controls', 'nanosoft_customize_elements_button_controls' );
add_filter( 'nanosoft_customize_controls', 'nanosoft_customize_elements_input_controls' );


function nanosoft_customize_elements_containers( $containers ) {
	$containers['elementButton'] = array(
		'type'  => 'section',
		'panel' => 'global__styles',
		'title' => esc_html__( 'Button', 'nanosoft' ),
		'heading'     => array(
			'title'       => esc_html__( 'Element Settings', 'nanosoft' ),
			'description' => esc_html__( 'Controls the settings for customizing the element styles.', 'nanosoft' )
		)
	);
	$containers['elementInput'] = array(
		'type'  => 'section',
		'panel' => 'global__styles',
		'title' => esc_html__( 'Input, Textarea & Select', 'nanosoft' )
	);

	return $containers;
}

function nanosoft_customize_elements_settings( $settings ) {
	// The default settings for the button
	$settings['button__height'] = array( 'default' => '50px' );
	$settings['button__border'] = array( 'default' => array(
		'all'    => array( 'size' => '0px', 'style' => 'none', 'color' => '#000000' ),
		'top'    => array( 'size' => '0px', 'style' => 'none', 'color' => '#000000' ),
		'right'  => array( 'size' => '0px', 'style' => 'none', 'color' => '#000000' ),
		'bottom' => array( 'size' => '0px', 'style' => 'none', 'color' => '#000000' ),
		'left'   => array( 'size' => '0px', 'style' => 'none', 'color' => '#000000' )
	) );
	$settings['button__borderRadius'] = array( 'default' => '0px' );
	$settings['button_colors'] = array( 'default' => array(
		'default' => '',
		'hover'   => '',
		'pressed' => ''
	) );
	$settings['button__typography'] = array( 'default' => array() );
	$settings['button__padding']    = array( 'default' => array(
		'padding-top' => '0px', 'padding-right' => '0px', 'padding-bottom' => '0px', 'padding-left' => '0px'
	) );

	// The default settings for the input
	$settings['input__height'] = array( 'default' => '50px' );
	$settings['input__border'] = array( 'default' => array(
		'all'    => array( 'size' => '0px', 'style' => 'none', 'color' => '#000000' ),
		'top'    => array( 'size' => '0px', 'style' => 'none', 'color' => '#000000' ),
		'right'  => array( 'size' => '0px', 'style' => 'none', 'color' => '#000000' ),
		'bottom' => array( 'size' => '0px', 'style' => 'none', 'color' => '#000000' ),
		'left'   => array( 'size' => '0px', 'style' => 'none', 'color' => '#000000' )
	) );
	$settings['input__borderRadius'] = array( 'default' => '0px' );
	$settings['input_colors'] = array( 'default' => array(
		'default' => '',
		'hover'   => '',
		'pressed' => ''
	) );
	$settings['input__typography'] = array( 'default' => array() );
	$settings['input__padding']    = array( 'default' => array(
		'padding-top' => '0px', 'padding-right' => '0px', 'padding-bottom' => '0px', 'padding-left' => '0px'
	) );

	return $settings;
}

function nanosoft_customize_elements_button_controls( $controls ) {
	$controls['button__background'] = array(
		'type'        => 'color',
		'section'     => 'elementButton',
		'label'       => esc_html__( 'Button Background Color', 'nanosoft' ),
	);

	$controls['button__height'] = array(
		'type'        => 'textfield',
		'section'     => 'elementButton',
		'label'       => esc_html__( 'Button Height (px)', 'nanosoft' ),
	);

	$controls['button__typography'] = array(
		'type'        => 'typography',
		'section'     => 'elementButton',
		'label'       => esc_html__( 'Button Font', 'nanosoft' ),
	);

	$controls['button__padding'] = array(
		'type'        => 'dimension',
		'section'     => 'elementButton',
		'label'       => esc_html__( 'Button Padding', 'nanosoft' ),
		'choices'     => array(
			'padding-top'    => esc_html__( 'Top', 'nanosoft' ),
			'padding-right'  => esc_html__( 'Right', 'nanosoft' ),
			'padding-bottom' => esc_html__( 'Bottom', 'nanosoft' ),
			'padding-left'   => esc_html__( 'Left', 'nanosoft' )
		)
	);

	$controls['button__border'] = array(
		'type'        => 'border',
		'section'     => 'elementButton',
		'label'       => esc_html__( 'Button Border', 'nanosoft' ),
		'choices'     => array(
			'top'    => esc_html__( 'Top', 'nanosoft' ),
			'right'  => esc_html__( 'Right', 'nanosoft' ),
			'bottom' => esc_html__( 'Bottom', 'nanosoft' ),
			'left'   => esc_html__( 'Left', 'nanosoft' )
		)
	);
	$controls['button__borderRadius'] = array(
		'type'        => 'textfield',
		'section'     => 'elementButton',
		'label'       => esc_html__( 'Button Border Radius', 'nanosoft' ),
	);

	return $controls;
}

function nanosoft_customize_elements_input_controls( $controls ) {
	$controls['input__background'] = array(
		'type'        => 'color',
		'section'     => 'elementInput',
		'label'       => esc_html__( 'Background Color', 'nanosoft' ),
	);

	$controls['input__height'] = array(
		'type'        => 'textfield',
		'section'     => 'elementInput',
		'label'       => esc_html__( 'Height (px)', 'nanosoft' ),
	);

	$controls['input__typography'] = array(
		'type'        => 'typography',
		'section'     => 'elementInput',
		'label'       => esc_html__( 'Font', 'nanosoft' ),
	);

	$controls['input__padding'] = array(
		'type'        => 'dimension',
		'section'     => 'elementInput',
		'label'       => esc_html__( 'Padding', 'nanosoft' ),
		'choices'     => array(
			'padding-top'    => esc_html__( 'Top', 'nanosoft' ),
			'padding-right'  => esc_html__( 'Right', 'nanosoft' ),
			'padding-bottom' => esc_html__( 'Bottom', 'nanosoft' ),
			'padding-left'   => esc_html__( 'Left', 'nanosoft' )
		)
	);

	$controls['input__border'] = array(
		'type'        => 'border',
		'section'     => 'elementInput',
		'label'       => esc_html__( 'Border', 'nanosoft' ),
		'choices'     => array(
			'top'    => esc_html__( 'Top', 'nanosoft' ),
			'right'  => esc_html__( 'Right', 'nanosoft' ),
			'bottom' => esc_html__( 'Bottom', 'nanosoft' ),
			'left'   => esc_html__( 'Left', 'nanosoft' )
		)
	);
	$controls['input__borderRadius'] = array(
		'type'        => 'textfield',
		'section'     => 'elementInput',
		'label'       => esc_html__( 'Border Radius', 'nanosoft' ),
	);

	return $controls;
}

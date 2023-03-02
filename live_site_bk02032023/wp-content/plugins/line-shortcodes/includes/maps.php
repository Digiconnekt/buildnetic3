<?php
/**
 * WARNING: This file is part of the UI-Pack plugin. DO NOT edit
 * this file under any circumstances.
 */
if ( ! defined( 'ABSPATH' ) )
	exit;

$atts = shortcode_atts( array(
	'address'     => '44 Quan Nhân, Trung Hoà, Hanoi, Vietnam',
	'style'       => 'default',
	'zoomlevel'   => 15,
	'zoomable'    => 'no',
	'type'        => 'roadmap',
	'show_marker' => 'no',
	'marker'      => '',
	'draggable'   => 'no',
	'height'      => 300
), $atts );

$atts['zoomable'] = $atts['zoomable'] == 'yes';
$atts['show_marker'] = $atts['show_marker'] == 'yes';
$atts['draggable'] = $atts['draggable'] == 'yes';

if ( ! filter_var( $atts['marker'], FILTER_VALIDATE_URL ) ) {
	if ( is_numeric( $atts['marker'] ) && $image = wp_get_attachment_image_src( $atts['marker'], 'full' ) ) {
		$atts['marker'] = $image[0];
	}
	else {
		$atts['marker'] = false;
	}
}

wp_enqueue_script( 'line-shortcode-maps' );

printf( '<div id="%s" class="google-maps" data-config="%s" data-locations="%s" style="height: %dpx"></div>',
	uniqid( 'google-maps-' ),
	esc_attr( json_encode( $atts ) ),
	esc_attr( json_encode( explode( "\n", strip_tags( $content ) ) ) ),
	(int) $atts['height']
);

<?php
/**
 * WARNING: This file is part of the UI-Pack plugin. DO NOT edit
 * this file under any circumstances.
 */
if ( ! defined( 'ABSPATH' ) )
	exit;

$original_atts = $atts;
$default_atts = array(
	'class'            => '',
	'css'              => '',
	'type'             => 'fontawesome',
	'icon_image'       => '',
	'icon_fontawesome' => 'fa fa-cube'
);

if ( isset( $original_atts['type'] ) && isset( $original_atts["icon_{$original_atts['type']}"] ) ) {
	$default_atts["icon_{$original_atts['type']}"] = '';
}

$atts = shortcode_atts( $default_atts, $atts );

if ( $atts['type'] == 'image' ) {
	$atts['image'] = $atts['icon_image'];
}
else {
	$atts['icon'] = $atts["icon_{$atts['type']}"];
}

vc_icon_element_fonts_enqueue( $atts['type'] );

$class = array( $atts['class'] );
$icon = '';

if ( ! empty( $atts['image'] ) ) {
	if ( is_numeric( $atts['image'] ) ) {
		$image_src = wp_get_attachment_image_src( $atts['image'], 'full' );
		$atts['image'] = array_shift( $image_src );
	}

	$alt  = ! empty($atts['title'])
		? $atts['title']
		: pathinfo( $atts['image'], PATHINFO_FILENAME );

	$icon = sprintf( '<img src="%s" alt="%s" />', esc_url( $atts['image'] ), esc_attr( $alt ) );
}
elseif ( ! empty( $atts['icon'] ) ) {
	$icon = sprintf( '<i class="%s"></i>', esc_attr( $atts['icon'] ) );
	
}

$class = esc_attr( trim( implode( ' ', $class ) ) );
if ( ! empty( $class ) )
	$class = "class=\"{$class}\"";

printf( '<li %s><div class="iconlist-item-icon">%s</div><div class="iconlist-item-content">%s</div></li>',
	$class,
	$icon,
	$content
);

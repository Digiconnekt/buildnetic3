<?php
/**
 * WARNING: This file is part of the UI-Pack plugin. DO NOT edit
 * this file under any circumstances.
 */
if ( ! defined( 'ABSPATH' ) )
	exit;

$original_atts = $atts;
$default_atts = array(
	'class'      => '',
	'css'        => '',
	'type'       => 'fontawesome',
	'icon_image' => '',
	'icon_fontawesome' => 'fa fa-cube',

	// Box style
	'title' => esc_html__( 'Untitled', 'nanosoft' ),
	'tag'   => 'h3',
	
	'link'  => '',
	'text'  => '',
	
	'css'   => ''
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


$class = array( 'iconbox', $atts['class'] );
if ( function_exists( 'vc_shortcode_custom_css_class' ) ) {
	$class[] = vc_shortcode_custom_css_class( $atts['css'], ' ' );
}

if ( ! empty( $atts['image'] ) ) {
	$icon = false;

	if ( is_numeric( $atts['image'] ) && $image_src = wp_get_attachment_image_src( $atts['image'], 'full' ) ) {
		$atts['image'] = array_shift( $image_src );

		$alt  = ! empty($atts['title'])
			? $atts['title']
			: pathinfo( $atts['image'], PATHINFO_FILENAME );

		$icon = sprintf( '<img src="%s" alt="%s" />', esc_url( $atts['image'] ), esc_attr( $alt ) );
	}
}
elseif ( ! empty( $atts['icon'] ) ) {
	$icon = sprintf( '<i class="%s"></i>', esc_attr( $atts['icon'] ) );
	
}
else {
	$icon = false;
}

$box_icon = $icon ? sprintf( '<div class="box-icon">%s</div>', $icon ) : '';
$box_readmore = '';

$content = wpautop( $content );
$content = preg_replace( '/<([a-z]+)>\s*<\/\\1>/i', '', $content );
$content = wp_kses_post( $content );

if ( ! empty( $atts['link'] ) && ! empty( $atts['text'] ) ) {
	$box_readmore = sprintf( '
		<div class="box-readmore">
			<a class="button no-bg" href="%s">%s</a>
		</div>', esc_url( $atts['link'] ), esc_html( $atts['text'] ) );
}

printf( '<div class="%2$s">

	<%4$s class="box-title">%3$s</%4$s>
	<div class="box-detail">
		%5$s	
	</div>
	%1$s	
	%6$s
</div>', $box_icon, esc_attr( implode( ' ', $class ) ), esc_html( $atts['title'] ), $atts['tag'], $content, $box_readmore );

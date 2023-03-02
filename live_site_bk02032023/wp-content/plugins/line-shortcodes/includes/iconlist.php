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
	'icon_size' => 'medium'
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

$class = array( 'iconlist', "iconlist-icon-{$atts['icon_size']}", $atts['class'] );
$children = array();

if ( preg_match_all( '/\[iconlist_item([^\]]*)\](.*?)\[\/iconlist_item\]/is', $content, $matches ) ) {
	foreach ( $matches[1] as $index => $attributes ) {
		$_attributes = shortcode_parse_atts( trim( $attributes ) );
		$_content = trim( force_balance_tags( $matches[2][$index] ) );
		$_content = preg_replace( '/<([a-z]+)>\s*<\/\\1>/i', '', $_content );

		if ( ! isset( $_attributes['type'] ) && ! empty( $atts['type'] ) ) $_attributes['type'] = $atts['type'];
		if ( ! isset( $_attributes["icon_{$atts['type']}"] ) && ! empty( $atts["icon_{$atts['type']}"] ) ) $_attributes["icon_{$atts['type']}"] = $atts["icon_{$atts['type']}"];
		if ( ! isset( $_attributes['image'] ) && ! empty( $atts['image'] ) ) $_attributes['image'] = $atts['image'];
		if ( ! isset( $_attributes['icon_image'] ) && ! empty( $atts['icon_image'] ) ) $_attributes['icon_image'] = $atts['icon_image'];

		$children_content = call_user_func_array( function( $atts, $content = '' ) {
			ob_start();
			include __DIR__ . '/iconlist-item.php';
			return ob_get_clean();
		}, array( $_attributes, $_content ) );

		$children[] = $children_content;
	}
}

printf( '<ul class="iconlist %s">%s</ul>', esc_attr( implode( ' ', $class ) ), implode( '', $children ) );

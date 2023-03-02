<?php
$atts = shortcode_atts( array(
	'class'    => '',
	'css'      => '',
	
	'name'     => 'John Doe',
	'subtitle' => '',
	'image'    => '',

	'facebook' => '',
	'twitter'  => '',
	'linkedin' => '',
	'google'   => '',
	''
), $atts );

$member_image = '';
$member_info  = sprintf( '<h4 class="member-name">%s</h4>', esc_html( $atts['name'] ) );
$class        = array( 'member', $atts['class'] );
if ( function_exists( 'vc_shortcode_custom_css_class' ) ) {
	$class[] = vc_shortcode_custom_css_class( $atts['css'], ' ' );
}

if ( ! empty( $atts['image'] ) ) {
	if ( is_numeric( $atts['image'] ) && $images = wp_get_attachment_image_src( $atts['image'], 'full' ) )
		$atts['image'] = array_shift( $images );

	$class[] = 'has-image';
	$member_image = sprintf( '
		<img src="%s" alt="%s" />
	', esc_attr( $atts['image'] ), esc_attr( $atts['name'] ) );
}

$member_info_sub = '';
if ( ! empty( $atts['subtitle'] ) ) {
	$member_info_sub.= sprintf( '<div class="member-subtitle">%s</div>', wp_kses_post( $atts['subtitle'] ) );
}

$social_links = '';
$content = wpautop( $content );
$content = preg_replace( '/<([a-z]+)>\s*<\/\\1>/i', '', $content );
$content = wp_kses_post( $content );

if ( ! empty( $atts['facebook'] ) )
	$social_links.= sprintf( ' <a href="%s" data-title="Facebook" class="facebook" target="_blank"><i class="fa fa-facebook"></i></a>', esc_url( $atts['facebook'] ) );

if ( ! empty( $atts['twitter'] ) )
	$social_links.= sprintf( ' <a href="%s" data-title="Twitter" class="twitter" target="_blank"><i class="fa fa-twitter"></i></a>', esc_url( $atts['twitter'] ) );

if ( ! empty( $atts['linkedin'] ) )
	$social_links.= sprintf( ' <a href="%s" data-title="LinkedIn" class="linkedin" target="_blank"><i class="fa fa-linkedin"></i></a>', esc_url( $atts['linkedin'] ) );

if ( ! empty( $atts['google'] ) )
	$social_links.= sprintf( ' <a href="%s" data-title="Google Plus" class="google-plus" target="_blank"><i class="fa fa-google-plus"></i></a>', esc_url( $atts['google'] ) );

if ( ! empty( $social_links ) )
	$social_links = sprintf( '<div class="social-icons-link">%s</div>', $social_links );

printf( '
	<div class="%s">	
		<div class="member-content">
			<div class="member-image">
				%s
				<div class="member-desc">%s</div>
				%s
			</div>
			<div class="member-info">
				%s
				%s
			</div>
		</div>
	</div>', 
	esc_attr( implode( ' ', $class ) ),
	$member_image,
	$content,
	$social_links,
	$member_info,
	$member_info_sub
);

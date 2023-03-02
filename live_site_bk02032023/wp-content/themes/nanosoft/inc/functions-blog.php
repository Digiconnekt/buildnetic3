<?php
defined( 'ABSPATH' ) or die();

function nanosoft_blog_body_class( $classes ) {
	$classes[] = sprintf( 'blog-%s', nanosoft_option( 'blog__archive__style' ) );

	return $classes;
}

function nanosoft_blog_sidebar() {
	return nanosoft_option( 'blog__archive__sidebar' );
}

function nanosoft_blog_sidebar_position() {
	return nanosoft_option( 'blog__archive__sidebarPosition' );
}

function nanosoft_single_sidebar() {
	return nanosoft_option( 'blog__single__sidebar' );
}

function nanosoft_single_sidebar_position() {
	return nanosoft_option( 'blog__single__sidebarPosition' );
}


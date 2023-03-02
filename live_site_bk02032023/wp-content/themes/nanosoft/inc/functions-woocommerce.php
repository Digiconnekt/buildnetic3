<?php
defined( 'ABSPATH' ) or die();

add_action( 'after_setup_theme', 'nanosoft_woocommerce_supports' );
add_action( 'woocommerce_before_shop_loop_item_title', 'nanosoft_woocommerce_template_loop_product_thumbnail', 10 );

// A filter that return an empty array
// to prevent woocommerce styles
add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );
add_filter( 'loop_shop_per_page', 'nanosoft_woocommerce_products_per_page' );
add_filter( 'woocommerce_show_page_title', '__return_false' );

remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10 );
//remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );
//remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );

function nanosoft_woocommerce_supports() {
	add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );
}

/**
 * Register custom image sizes for WooCommerce
 */
if ( ! function_exists( 'nanosoft_woocommerce_thumbnail_size' ) ) {
	function nanosoft_woocommerce_thumbnail_size( $args ) {
		$sizes = nanosoft_get_image_sizes();
		$size  = nanosoft_option( 'product__thumbnailSize' );
		$crop  = nanosoft_option( 'product__thumbnailSizeCrop' ) == 'crop';

		if ( preg_match( '/^([0-9]+)x([0-9]+)$/', $size, $matches ) ) {
			return array(
				'width'  => $matches[1],
				'height' => $matches[2],
				'crop'   => $crop
			);
		}
		elseif ( isset( $sizes[ $size ] ) ) {
			return array_merge( $sizes[ $size ], array(
				'crop' => $crop
			) );
		}

		return $args;
	}
}
add_filter( 'woocommerce_get_image_size_shop_thumbnail', 'nanosoft_woocommerce_thumbnail_size' );



if ( ! function_exists( 'nanosoft_woocommerce_catalog_size' ) ) {
	function nanosoft_woocommerce_catalog_size( $args ) {
		$sizes = nanosoft_get_image_sizes();
		$size  = nanosoft_option( 'shop__productImageSize' );
		$crop  = nanosoft_option( 'shop__productImageSizeCrop' ) == 'crop';

		if ( preg_match( '/^([0-9]+)x([0-9]+)$/', $size, $matches ) ) {
			return array(
				'width'  => $matches[1],
				'height' => $matches[2],
				'crop'   => $crop
			);
		}
		elseif ( isset( $sizes[ $size ] ) ) {
			return array_merge( $sizes[ $size ], array(
				'crop' => $crop
			) );
		}

		return $args;
	}
}
add_filter( 'woocommerce_get_image_size_shop_catalog', 'nanosoft_woocommerce_catalog_size' );



if ( ! function_exists( 'nanosoft_woocommerce_single_size' ) ) {
	function nanosoft_woocommerce_single_size( $args ) {
		$sizes = nanosoft_get_image_sizes();
		$size  = nanosoft_option( 'product__imageSize' );
		$crop  = nanosoft_option( 'product__imageSizeCrop' ) == 'crop';

		if ( preg_match( '/^([0-9]+)x([0-9]+)$/', $size, $matches ) ) {
			$args = array(
				'width'  => $matches[1],
				'height' => $matches[2],
				'crop'   => $crop
			);
		}
		elseif ( isset( $sizes[ $size ] ) ) {
			$args = array_merge( $sizes[ $size ], array(
				'crop' => $crop
			) );
		}

		return $args;
	}
}
add_filter( 'woocommerce_get_image_size_shop_single', 'nanosoft_woocommerce_single_size' );

function nanosoft_woocommerce_body_class( $classes ) {
	return $classes;
}

function nanosoft_woocommerce_sidebar() {
	return is_shop()
		? nanosoft_option( 'shop__sidebar' )
		: nanosoft_option( 'product__sidebar' );
}

function nanosoft_woocommerce_sidebar_position() {
	return is_shop()
		? nanosoft_option( 'shop__sidebarPosition' )
		: nanosoft_option( 'product__sidebarPosition' );
}

function nanosoft_woocommerce_products_per_page() {
	return abs( (int) nanosoft_option( 'shop__paginate' ) );
}

function nanosoft_woocommerce_template_loop_product_thumbnail() {
	global $post;

	if ( has_post_thumbnail() ) {
		$props = wc_get_product_attachment_props( get_post_thumbnail_id(), $post );
		$images = nanosoft_get_image_resized( array(
			'image_id' => get_post_thumbnail_id(),
			'size'     => nanosoft_option( 'shop__productImageSize' ),
			'crop'     => nanosoft_option( 'shop__productImageSizeCrop' ),
			'atts'     => array(
				'title'	 => $props['title'],
				'alt'    => $props['alt'],
			)
		) );

		echo wp_kses_post( $images['thumbnail'] );
	} elseif ( wc_placeholder_img_src() ) {
		echo wc_placeholder_img( $image_size );
	}
}
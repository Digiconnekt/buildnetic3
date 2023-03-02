<?php
/**
 * Single Product Thumbnails
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/product-thumbnails.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     3.5.1
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $post, $product;

$attachment_ids = $product->get_gallery_image_ids();
$thumbnail_size = nanosoft_option( 'product__thumbnailSize' );

if ( $attachment_ids && has_post_thumbnail() ) {
	foreach ( $attachment_ids as $attachment_id ) {
		// $thumbnail    = wp_get_attachment_image_src( $attachment_id, 'shop_thumbnail' );
		$full_size_image = wp_get_attachment_image_src( $attachment_id, 'full' );
		$image_title     = get_post_field( 'post_excerpt', $attachment_id );
		$thumbnail       = nanosoft_get_image_resized( array(
			'image_id' => $attachment_id,
			'size'     => nanosoft_option( 'product__thumbnailSize' ),
			'crop'     => nanosoft_option( 'product__thumbnailSizeCrop' )
		) );

		$attributes = array(
			'title'                   => $image_title,
			'data-src'                => $full_size_image[0],
			'data-large_image'        => $full_size_image[0],
			'data-large_image_width'  => $full_size_image[1],
			'data-large_image_height' => $full_size_image[2],
		);

		$image = nanosoft_get_image_resized( array(
			'image_id' => $attachment_id,
			'size'     => nanosoft_option( 'product__imageSize' ),
			'crop'     => nanosoft_option( 'product__imageSizeCrop' ),
			'atts'     => $attributes
		) );

		$html  = '<div data-thumb="' . esc_url( $thumbnail['thumbnail_raw'][0] ) . '" class="woocommerce-product-gallery__image"><a href="' . esc_url( $full_size_image[0] ) . '">';
		$html .= $image['thumbnail'];
 		$html .= '</a></div>';

		echo apply_filters( 'woocommerce_single_product_image_thumbnail_html', $html, $attachment_id );
	}
}

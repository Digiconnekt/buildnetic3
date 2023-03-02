<?php
/**
 * WARNING: This file is part of the plugin. DO NOT edit
 * this file under any circumstances.
 */
defined( 'ABSPATH' ) or die();

// Parse shortcode attributes
$atts = shortcode_atts( array(
	'title'        => '',
	'image'        => '',

	'button_text'  => '',
	'button_url'   => '',
	'button_class' => ''
), $atts );

$image = '';

// Preparing image for the box
if ( is_numeric( $atts['image'] ) ) {
	$image = wp_get_attachment_image_src( $atts['image'], 'full' );
	$image = $image[0];
}
elseif ( filter_var( $atts['image'], FILTER_VALIDATE_URL ) ) {
	$image = $atts['image'];
}
?>

<div class="swiper-slide" style="background-image: url( <?php echo esc_url( $image ) ?> )">
	<div class="slide-container">
		<?php if ( ! empty( $atts['title'] ) ): ?>
			<div class="slide-title">
				<?php echo wp_kses_post( $atts['title'] ); ?>
			</div>
		<?php endif ?>

		<?php if ( ! empty( $content ) ): ?>
			<div class="slide-content">
				<?php echo wp_kses_post( $content ); ?>
			</div>
		<?php endif ?>

		<?php if ( ! empty( $atts['button_text'] ) && ! empty( $atts['button_url'] ) ): ?>
			<div class="slide-buttons">
				<a href="<?php echo esc_url( $atts['button_url'] ) ?>" class="slide-button <?php echo esc_attr( $atts['button_class'] ) ?>">
					<?php echo esc_html( $atts['button_text'] ) ?>
				</a>
			</div>
		<?php endif ?>
	</div>
</div>

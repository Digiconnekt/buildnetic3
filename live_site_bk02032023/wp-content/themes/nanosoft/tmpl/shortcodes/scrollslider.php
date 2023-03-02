<?php
/**
 * WARNING: This file is part of the plugin. DO NOT edit
 * this file under any circumstances.
 */
defined( 'ABSPATH' ) or die();

// Start the output buffering to capturing the
// children render
ob_start();

// Parse shortcode attributes
$atts = shortcode_atts( array(), $atts );
$content = do_shortcode( $content );

$options = array(
	'pagination'               => '.swiper-pagination',
	'direction'                => 'vertical',
	'slidesPerView'            => 1,
	'paginationClickable'      => true,
	'spaceBetween'             => 0,
	'mousewheelControl'        => true,
	'mousewheelReleaseOnEdges' => true
);
?>

	<?php if ( ! empty( $content ) ): ?>
		<div class="scrollslider">
			<div class="swiper-container" data-swiper="<?php echo esc_attr( json_encode( $options ) ) ?>">
				<div class="swiper-wrapper">
					<?php echo do_shortcode( $content ) ?>
				</div>
				<div class="swiper-pagination"></div>
			</div>
		</div>
	<?php endif ?>

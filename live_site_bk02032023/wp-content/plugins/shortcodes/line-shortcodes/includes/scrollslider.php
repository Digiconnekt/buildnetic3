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
?>

	<?php if ( ! empty( $content ) ): ?>
		<div class="scrollslider">
			<div class="swiper-container">
				<div class="swiper-wrapper">
					<?php echo do_shortcode( $content ) ?>
				</div>
				<div class="swiper-pagination"></div>
			</div>
		</div>
	<?php endif ?>

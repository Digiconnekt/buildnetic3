<?php
defined( 'ABSPATH' ) or die();

$post = get_post();
$images = get_field( 'projectGallery' );
?>

	<div class="project-gallery project-media-slider">
		<div class="project-media-inner swiper-container" data-swiper="">
			<div class="swiper-wrapper">

				<?php foreach ( $images as $item ): ?>
					<div class="project-media-item swiper-slide">
						<?php nanosoft_project_media_item( $item, 'full', false, nanosoft_option( 'project__lightbox' ) ) ?>
					</div>
				<?php endforeach ?>

			</div>

			<div class="swiper-button-prev"></div>
			<div class="swiper-button-next"></div>
		</div>
		<div class="swiper-container project-media-thumbs">
			<div class="swiper-wrapper">

				<?php foreach ( $images as $item ): ?>
					<div class="project-media-item swiper-slide">
						<?php nanosoft_project_media_item( $item, '400x300', true, false ) ?>
					</div>
				<?php endforeach ?>

			</div>
		</div>
	</div>

<?php
defined( 'ABSPATH' ) or die();

$queried_object = get_queried_object();
?>
	<div class="post-video post-image">
		<?php if ( is_single() && $queried_object instanceOf WP_Post && $queried_object->ID === get_the_ID() ): ?>
			<div class="post-video-player">
				<?php echo wp_oembed_get( get_post_meta( get_the_ID(), '_post_video_oembed', true ), array( 'width' => '760' ) ); ?>
			</div>
		<?php elseif ( has_post_thumbnail() ): ?>
			<div class="post-video-thumbnail">
				<a href="<?php echo esc_url( get_permalink() ) ?>">
					<?php
						$post_image = nanosoft_get_image_resized( array(
							'post_id' => get_the_ID(),
							'size'    => nanosoft_option( 'blog__archive__imagesize' ),
							'crop'    => nanosoft_option( 'blog__archive__imagesizeCrop' ) == 'crop'
						) );
						
						echo wp_kses_post( $post_image['thumbnail'] );
					?>
				</a>
			</div>
		<?php endif ?>
	</div>
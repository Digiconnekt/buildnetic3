<?php
defined( 'ABSPATH' ) or die();
return;
?>

	<div class="social-share">
		<a class="facebook" target="_blank" href="<?php echo esc_url( sprintf( 'https://www.facebook.com/sharer/sharer.php?u=%s', get_permalink() ) ) ?>">
			<i class="fa fa-facebook"></i>
			<span><?php esc_html_e( 'Facebook', 'nanosoft' ) ?></span>
		</a>

		<a class="twitter" target="_blank" href="<?php echo esc_url( add_query_arg( array(
				'status' => urlencode( sprintf( esc_html__( 'Check out this article: %s - %s', 'nanosoft' ), get_the_title(), get_permalink() ) )
			), 'https://twitter.com/home' ) ) ?>">
			<i class="fa fa-twitter"></i>
			<span><?php esc_html_e( 'Twitter', 'nanosoft' ) ?></span>
		</a>

		<a class="google-plus" target="_blank" href="<?php echo esc_url( sprintf( 'https://plus.google.com/share?url=%s', get_permalink() ) ) ?>">
			<i class="fa fa-google-plus"></i>
			<span><?php esc_html_e( 'Google+', 'nanosoft' ) ?></span>
		</a>

		
		<?php
			$pinterest_url = add_query_arg( array(
				'url' => get_permalink(),
				'media' => wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ),
				'description' => get_the_title()
			), 'https://pinterest.com/pin/create/button/' );
		?>
		<a class="pinterest" target="_blank" href="<?php echo esc_url( $pinterest_url ) ?>">
			<i class="fa fa-pinterest"></i>
			<span><?php esc_html_e( 'Pinterest', 'nanosoft' ) ?></span>
		</a>
	</div>
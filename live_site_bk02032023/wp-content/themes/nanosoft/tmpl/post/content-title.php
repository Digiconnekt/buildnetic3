<?php
defined( 'ABSPATH' ) or die();
?>

	<h2 class="post-title" itemprop="headline">
		<?php if ( get_post_format() == 'link' ): ?>
			<a href="<?php echo esc_url( get_post_meta( get_the_ID(), '_post_link', true ) ) ?>"
			   target="<?php echo esc_attr( get_post_meta( get_the_ID(), '_post_link_target', true ) ) ?>">
				<?php the_title() ?>
			</a>
		<?php else: ?>
			<a href="<?php the_permalink() ?>" rel="bookmark">
				<?php the_title() ?>
			</a>
		<?php endif ?>
	</h2>

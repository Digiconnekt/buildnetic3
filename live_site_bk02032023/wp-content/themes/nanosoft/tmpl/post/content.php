<?php
defined( 'ABSPATH' ) or die();
?>

	<div id="post-<?php the_ID() ?>" <?php post_class( 'post' ) ?>>
		<div class="post-inner">
			<?php get_template_part( 'tmpl/post/content-featured', get_post_format() ) ?>

			<div class="post-categories"><?php the_category( _x( ' ', 'Used between list items, there is a space after the comma.', 'nanosoft' ) ) ?></div>

			<div class="post-header">
				<?php get_template_part( 'tmpl/post/content-title' ) ?>
			</div>

			<div class="post-content">
				<?php
					nanosoft_the_content( false );
					wp_link_pages( array(
						'before'      => '<div class="page-links"><span class="page-links-title">' . esc_html__( 'Pages:', 'nanosoft' ) . '</span>',
						'after'       => '</div>',
						'link_before' => '<span>',
						'link_after'  => '</span>',
					) );
				?>
			</div>

			<?php if ( nanosoft_option( 'blog__archive__postMeta' ) == 'on' ): ?>
				<?php get_template_part( 'tmpl/post/content-meta' ) ?>
			<?php endif ?>
		</div>
	</div>

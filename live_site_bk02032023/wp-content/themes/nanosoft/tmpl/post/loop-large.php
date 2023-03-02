<?php
defined( 'ABSPATH' ) or die();
?>
	
	<div class="content" role="main" itemprop="mainContentOfPage">
		<?php if ( have_posts() ): ?>
			<?php while ( have_posts() ): the_post(); ?>
				<div id="post-<?php the_ID() ?>" <?php post_class( 'post' ) ?>>
					<div class="post-inner">
						<?php get_template_part( 'tmpl/post/content-featured', get_post_format() ) ?>

						<div class="post-wrap">
							<div class="post-header">
								<?php get_template_part( 'tmpl/post/content-title' ) ?>

								<?php if ( nanosoft_option( 'blog__archive__postMeta' ) == 'on' ): ?>
									<?php get_template_part( 'tmpl/post/content-meta' ) ?>
								<?php endif ?>
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

							<div class="post-footer">
								<?php if ( nanosoft_option( 'blog__archive__readmore' ) === 'on' ): ?>
									<?php get_template_part( 'tmpl/post/content-readmore' ) ?>
								<?php endif ?>

								<div class="post-categories"><span><?php esc_html_e( 'Read more in:', 'nanosoft' ) ?></span><?php the_category( _x( ' ', 'Used between list items, there is a space after the comma.', 'nanosoft' ) ) ?></div>
							</div>
						</div>
					</div>
				</div>
			<?php endwhile ?>

			<?php nanosoft_pagination() ?>
		<?php else: ?>
			<?php get_template_part( 'tmpl/post/content-none' ) ?>
		<?php endif ?>
	</div>
	<!-- /.content -->
			
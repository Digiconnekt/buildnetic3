<?php
defined( 'ABSPATH' ) or die();
?>
	
	<div class="content" role="main" itemprop="mainContentOfPage">
		<?php if ( have_posts() ): ?>
			<?php while ( have_posts() ): the_post(); ?>
				<div id="post-<?php the_ID() ?>" <?php post_class( 'post' ) ?>>
					<div class="post-inner">
						<?php get_template_part( 'tmpl/post/content-featured', get_post_format() ) ?>

						<div class="post-header">
							<div class="post-categories"><?php the_category( _x( ' ', 'Used between list items, there is a space after the comma.', 'nanosoft' ) ) ?></div>
							
							<?php get_template_part( 'tmpl/post/content-title' ) ?>

							<?php if ( nanosoft_option( 'blog__archive__postMeta' ) == 'on' ): ?>
								<?php get_template_part( 'tmpl/post/content-meta' ) ?>
							<?php endif ?>
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

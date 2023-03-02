<?php
defined( 'ABSPATH' ) or die();
?>
	
	<div class="content" role="main" itemprop="mainContentOfPage">
		<?php if ( have_posts() ): ?>
			<div class="content-inner" data-grid-normal data-columns="<?php echo esc_attr( nanosoft_option( 'blog__archive__columns' ) ) ?>">
				<?php while ( have_posts() ): the_post(); ?>
					<?php get_template_part( 'tmpl/post/content', 'alt' ) ?>
				<?php endwhile ?>
			</div>

			<?php nanosoft_pagination() ?>
		<?php else: ?>
			<?php get_template_part( 'tmpl/post/content-none' ) ?>
		<?php endif ?>
	</div>
	<!-- /.content -->

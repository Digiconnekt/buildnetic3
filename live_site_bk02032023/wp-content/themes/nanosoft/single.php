<?php
defined( 'ABSPATH' ) or die();

add_filter( 'nanosoft_sidebar_id', 'nanosoft_single_sidebar' );
add_filter( 'nanosoft_sidebar_position', 'nanosoft_single_sidebar_position' );
?>
	<?php get_header( 'blog' ) ?>
		<?php if ( have_posts() ): the_post(); ?>
			<!-- The main content -->
			<main id="main-content" class="main-content" itemprop="mainContentOfPage">
				<div class="main-content-inner">
					<div class="content">
						<?php get_template_part( 'tmpl/post/content', 'single' ) ?>
					</div>

					<?php if ( nanosoft_option( 'blog__single__postAuthor' ) == 'on' ): ?>
						<?php get_template_part( 'tmpl/post/content-author' ) ?>
					<?php endif ?>
				</div>
			</main>

			<?php get_sidebar() ?>

			<?php if ( nanosoft_option( 'blog__single__postNav' ) == 'on' ): ?>
				<?php get_template_part( 'tmpl/post/content-navigator' ) ?>
			<?php endif ?>

			<?php nanosoft_related_posts() ?>
			<?php nanosoft_comments_list() ?>
		<?php endif ?>
	<?php get_footer( 'blog' ) ?>

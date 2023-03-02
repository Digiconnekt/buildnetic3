<?php
defined( 'ABSPATH' ) or die();

$options = array( 'itemSelector' => '.post' );
?>
	
	<div class="content" role="main" itemprop="mainContentOfPage">
		<?php if ( have_posts() ): ?>
			<div class="content-inner" data-grid="<?php echo esc_attr( json_encode( $options ) ) ?>" data-columns="<?php echo esc_attr( nanosoft_option( 'blog__archive__columns' ) ) ?>">
				<?php while ( have_posts() ): the_post(); ?>
					<div id="post-<?php the_ID() ?>" <?php post_class( 'post' ) ?>>
						<div class="post-inner">
							<div class="post-header-wrap">
								<?php get_template_part( 'tmpl/post/content-featured', get_post_format() ) ?>

								<div class="post-header">
									<div class="post-categories"><?php the_category( _x( ' ', 'Used between list items, there is a space after the comma.', 'nanosoft' ) ) ?></div>
									<?php get_template_part( 'tmpl/post/content-title' ) ?>
								</div>
							</div>
						</div>
					</div>
				<?php endwhile ?>
			</div>

			<?php nanosoft_pagination() ?>
		<?php else: ?>
			<?php get_template_part( 'tmpl/post/content-none' ) ?>
		<?php endif ?>
	</div>
	<!-- /.content -->


<?php
defined( 'ABSPATH' ) or die();

global $wp_query;

$paged = get_query_var( 'paged' ) ? intval( get_query_var( 'paged' ) ) : 1;
$index = 1 + ( ( $paged - 1 ) * $wp_query->query_vars['posts_per_page'] );
?>

	<?php get_header() ?>

		<?php if ( have_posts() ): ?>
			<div class="content">
				<?php get_search_form() ?>

				<div class="search-results">
					<div class="search-results-inner">
						<?php while ( have_posts() ): the_post(); ?>
						<article <?php post_class( 'post' ) ?> id="post-<?php echo esc_attr( get_the_ID() ) ?>">
							<a href="<?php the_permalink() ?>">
								<span class="post-index">
									<?php echo (int) $index++ ?>
								</span>
								<h2 class="post-title"><?php the_title() ?></h2>
								<span class="post-date"><?php echo esc_html( get_the_date( get_option( 'date_format' ) ) ) ?></span>
							</a>
						</article>
						<?php endwhile ?>
					</div>
				</div>
			</div>
			
			<?php nanosoft_pagination() ?>
		<?php else: ?>
			<div class="content">
				<div class="search-no-results">
					<h3><?php _ex( 'Nothing Found', 'frontend', 'nanosoft' ) ?></h3>
					<p><?php _ex( 'Sorry, no posts matched your criteria. Please try another search', 'frontend', 'nanosoft' ) ?></p>

					<?php get_search_form() ?>
				</div>
			</div>
		<?php endif ?>

	<?php get_footer() ?>
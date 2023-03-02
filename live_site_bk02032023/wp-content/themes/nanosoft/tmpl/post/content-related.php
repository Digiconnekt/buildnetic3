<?php
defined( 'ABSPATH' ) or die();

// Query args
$args = array(
	'post_type'           => 'post',
	'posts_per_page'      => nanosoft_option( 'blog__related__count', 5 ),
	'post__not_in'        => array( get_the_ID() ),
	'ignore_sticky_posts' => true
);

$related_item_type = nanosoft_option( 'blog__related__type', 'category' );

// Filter by tags
if ( 'tag' == $related_item_type ) {
	if ( ! ( $terms = get_the_tags() ) )
		return;

	$args['tag__in'] = wp_list_pluck( $terms, 'term_id' );
}
// Filter by categories
elseif ( 'category' == $related_item_type ) {
	if ( ! ( $terms = get_the_category() ) )
		return;

	$args['category__in'] = wp_list_pluck( $terms, 'term_id' );
}
// Show random items
elseif ( 'random' == $related_item_type ) {
	$args['orderby'] = 'rand';
}
// Show latest items
elseif ( 'recent' == $related_item_type ) {
	$args['order'] = 'DESC';
	$args['orderby'] = 'date';
}

// Create the query instance
$query = new WP_Query( $args );
$widget_title   = nanosoft_option( 'blog__related__title' );

if ( $query->have_posts() ):
?>

	<?php if ( nanosoft_option( 'blog__single__relatedPosts' ) == 'on' ): ?>
		<div id="related-posts" class="related-posts">
			<div class="related-posts-inner">
				<?php if ( ! empty( $widget_title ) ): ?>

					<h3 class="related-posts-title">
						<?php echo esc_html( $widget_title ) ?>
					</h3>

				<?php endif ?>

					<div class="grid-posts" data-grid-normal data-columns="<?php echo esc_attr( nanosoft_option( 'blog__related__gridColumns' ) ) ?>">
						<?php while ( $query->have_posts() ): $query->the_post(); ?>
							<div <?php post_class() ?> >
								<div class="post-inner">
									<?php get_template_part( 'tmpl/post/content-featured', get_post_format() ) ?>

									<div class="post-wrap">
										<div class="post-categories"><?php the_category( _x( ' ', 'Used between list items, there is a space after the comma.', 'nanosoft' ) ) ?></div>

										<div class="post-header">
											<?php get_template_part( 'tmpl/post/content-title' ) ?>
										</div>

										<span class="post-date"><?php echo esc_html( get_the_date( get_option( 'date_format' ) ) ) ?></span>
									</div>
								</div>
							</div>					

						<?php endwhile ?>
				    </div>
				<?php wp_reset_postdata() ?>
			</div>
		</div>

	<?php endif ?>
<?php endif ?>

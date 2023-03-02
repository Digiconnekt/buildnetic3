<?php

/**
 * Prevent direct access to this file
 */
defined( 'ABSPATH' ) or die();

$options          = array( 'itemSelector' => '.project' );
$meta_information = (array)nanosoft_option( 'projects__meta' );

/**
 * Ignore render related box when it's disabled
 */
if ( ! is_singular( 'nproject' ) ) {
	return;
}

// Query args
$args = array(
	'post_type'      => 'nproject',
	'posts_per_page' => nanosoft_option( 'project__related__count', 4 ),
	'post__not_in'   => array( get_the_ID() )
);

$related_item_type = nanosoft_option( 'project__related__type' );

// Filter by tags
if ( 'tag' == $related_item_type ) {
	if ( ! ( $terms = get_the_terms( get_the_ID(), nProjects::TYPE_TAG ) ) )
		return;

	$args['tax_query'] = array(
		'taxonomy' => nProjects::TYPE_TAG,
		'field'    => 'term_id',
		'terms'    => wp_list_pluck( $terms, 'term_id' )
	);
}
// Filter by categories
elseif ( 'category' == $related_item_type ) {
	if ( ! ( $terms = get_the_terms( get_the_ID(), nProjects::TYPE_CATEGORY ) ) )
		return;

	$args['tax_query'] = array(
		'taxonomy' => nProjects::TYPE_CATEGORY,
		'field'    => 'term_id',
		'terms'    => wp_list_pluck( $terms, 'term_id' )
	);
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
$widget_title = nanosoft_option( 'project__related__title' );

if ( $query->have_posts() ): ?>

	<div class="projects-related projects projects-grid">
		<div class="projects-related-inner">
			<?php if ( ! empty( $widget_title ) ): ?>

				<h3 class="projects-related-title">
					<?php echo esc_html( $widget_title ) ?>
				</h3>

			<?php endif ?>

			<div class="projects-related-wrap" data-grid="<?php echo esc_attr( json_encode( $options ) ) ?>" data-columns="<?php echo esc_attr( nanosoft_option( 'projects__related__gridColumns' ) ) ?>">
				<?php while ( $query->have_posts() ): $query->the_post(); ?>

					<div <?php post_class( 'project' ) ?> itemscope="itemscope" itemtype="http://schema.org/CreativeWork">
						<div class="project-inner" data-height="project-grid">
							<figure class="project-thumbnail">
								<a href="<?php the_permalink() ?>">
									<?php if ( $client_image_id = get_field( 'projectClientLogo', get_post() ) ): ?>
										<span class="project-client">
											<?php
												$image = nanosoft_get_image_resized( array(
													'image_id' => $client_image_id,
													'size'     => 'full'
												) );

												echo wp_kses_post( $image['thumbnail'] );
											?>
										</span>

										<?php if ( $accent_color = get_field( 'projectAccentColor' ) ): ?>
											<span class="mask" style="background-color: <?php echo esc_attr( $accent_color ) ?>;">
												<?php echo esc_html( $accent_color ) ?>
											</span>
										<?php endif ?>
									<?php endif ?>

									<span class="featured-image">
										<?php
											$image = nanosoft_get_image_resized( array(
												'post_id' => get_the_ID(),
												'size'    => nanosoft_option( 'projects__imagesize' ),
												'crop'    => nanosoft_option( 'projects__imagesizeCrop' ) == true
											) );

											echo wp_kses_post( $image['thumbnail'] );
										?>
									</span>
								</a>
							</figure>

							<div class="project-info">
								<div class="project-info-inner">
									<h2 class="project-title" itemprop="name headline">
										<a href="<?php the_permalink() ?>">
											<?php the_title() ?>
										</a>
									</h2>

									<div class="project-category">
										<?php echo get_the_term_list( get_the_ID(), 'nproject-category' ) ?>
									</div>
								</div>
							</div>
						</div>
					</div>

				<?php endwhile ?>
			</div>
		</div>
	</div>

<?php endif ?>

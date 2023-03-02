<?php
/**
 * WARNING: This file is part of the plugin. DO NOT edit
 * this file under any circumstances.
 */
defined( 'ABSPATH' ) or die();

$atts = shortcode_atts( array(
	'category'        => '',
	'tag'             => '',
	'exclude'         => '',
	'limit'           => 8,
	'offset'          => 0,
	'order_by'        => 'date',
	'order_direction' => 'DESC',
	'css'             => '',
	'class'           => ''
), $atts );

$args = array(
	'post_type'      => 'nproject',
	'posts_per_page' => intval( $atts['limit'] ),
	'offset'         => max( 0, intval( $atts['offset'] ) ),
	'tax_query'      => array()
);

// Filter by categories
if ( ! empty( $atts['category'] ) ) {
	$args['tax_query'][] = array(
		'taxonomy' => 'nproject-category',
		'terms'    => $atts['category'],
		'field'    => 'slug',
		'operator' => 'IN'
	);
}

// Filter by tags
if ( ! empty( $atts['tag'] ) ) {
	$args['tax_query'][] = array(
		'taxonomy' => 'nproject-tag',
		'terms'    => $atts['tag'],
		'field'    => 'slug',
		'operator' => 'IN'
	);
}

if ( ! empty( $atts['exclude'] ) ) {
	$exclude = $atts['exclude'];

	if ( ! is_array( $exclude ) )
		$exclude = explode( ',', $exclude );

	$args['post__not_in'] = $exclude;
}

if ( in_array( strtolower( $atts['order_by'] ),
		array( 'none', 'id', 'author', 'title', 'name', 'type', 'date', 'modified', 'parent', 'rand', 'comment_count', 'menu_order' ) ) ) {
	$args['orderby'] = $atts['order_by'];
	$args['order']   = in_array( strtolower( $atts['order_direction'] ), array( 'desc', 'asc' ) ) 
		? $atts['order_direction'] : 'desc';
}

$classes = 'projects projects-justified';
$query   = new WP_Query( $args );
?>

	<?php if ( $query->have_posts() ): ?>

		<div class="<?php echo esc_attr( $classes ) ?>">
			<div class="projects-wrap">
				<div class="projects-items flex-images">
					<?php while ( $query->have_posts() ): $query->the_post();
						$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id(), 'portfolio-medium' );
						?>

						<div class="<?php echo esc_attr( join( ' ', get_post_class( 'project item' ) ) ) ?>" itemscope="itemscope" itemtype="http://schema.org/CreativeWork"
							data-w="<?php echo esc_attr( $thumbnail[1] ) ?>" data-h="<?php echo esc_attr( $thumbnail[2] ) ?>">
							
							<a href="<?php the_permalink() ?>">
								<?php the_post_thumbnail( 'portfolio-medium', array( 'itemprop' => 'image' ) ) ?>
							</a>

							<div class="project-info">
								<div class="project-info-wrap">
									<h3 class="project-title" itemprop="name headline">
										<a href="<?php the_permalink() ?>">
											<?php the_title() ?>
										</a>
									</h3>
									<ul class="project-categories">
										<?php the_terms( get_the_ID(), 'nproject-category', '<li>', '</li><li>', '</li>' ) ?>
									</ul>
								</div>
							</div>
						</div>

					<?php endwhile ?>
				</div>
			</div>
		</div>

	<?php endif ?>

<?php
wp_reset_postdata();

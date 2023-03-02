<?php
/**
 * WARNING: This file is part of the UI-Pack plugin. DO NOT edit
 * this file under any circumstances.
 */
if ( ! defined( 'ABSPATH' ) )
	exit;

$atts = shortcode_atts( array(
	'class'        => '',
	'css'          => '',
	
	'title'        => '',
	'category'     => '',
	'tag'          => '',
	'layout'       => 'grid', // grid, masonry, list
	'grid_columns' => 3,
	'hide_content' => '',
	'content_length'    => 40,
	'exclude'      => '',

	'hide_readmore' => '',
	'readmore_text' => __( 'Continue &rarr;', 'themekit' ),
	
	'icon'         => 'post-thumbnail',
	'limit'        => 9,
	'offset'       => 0
), $atts );

$args = array(
	'post_type'           => 'post',
	'ignore_sticky_posts' => true,
	'offset'              => intval( '0' . $atts['offset'] ),
	'tax_query'           => array(
		'relation' => 'OR'
	)
);

if ( ! empty( $atts['category'] ) ) {
	if ( ! is_array( $atts['category'] ) )
		$atts['category'] = array_map( 'trim', explode( ',', $atts['category'] ) );

	$args['tax_query'][] = array(
		'taxonomy'         => 'category',
		'field'            => 'slug',
		'terms'            => $atts['category'],
		'include_children' => false
	);
}

if ( ! empty( $atts['tag'] ) ) {
	if ( ! is_array( $atts['tag'] ) )
		$atts['tag'] = array_map( 'trim', explode( ',', $atts['tag'] ) );

	$args['tax_query'][] = array(
		'taxonomy'         => 'post_tag',
		'field'            => 'slug',
		'terms'            => $atts['tag']
	);
}

if ( is_numeric( $atts['limit'] ) && $atts['limit'] >= 0 ) {
	$args['posts_per_page'] = $atts['limit'];
}

if ( ! empty( $atts['exclude'] ) )
	$args['post__not_in'] = explode( ',', $atts['exclude'] );

$query = new WP_Query( $args );
$class_names = array(
	1 => 'blog-one-column',
	2 => 'blog-two-columns',
	3 => 'blog-three-columns',
	4 => 'blog-four-columns',
);

/**
 * Return an empty string when no posts found
 */
if ( ! $query->have_posts() )
	return '';

$class = apply_filters( 'themekit/shortcode/posts_class', array( 'blog-shortcode', $atts['class'], 'blog-' . $atts['layout'] ), $atts );

if ( $atts['layout'] == 'carousel' ) {
	$class[] = 'blog-grid';
}

if ( $atts['layout'] == 'masonry' ) {
	$class[] = 'blog-grid';
}

if ( isset( $class_names[$atts['grid_columns']] ) && in_array( $atts['layout'], array( 'grid', 'carousel', 'masonry' ) ) ) {
	$class[] = $class_names[$atts['grid_columns']];
}

if ( $atts['hide_content'] != 'yes' ) {
	$class[] = 'has-post-content';
}

if ( $atts['icon'] != 'none' && in_array( $atts['icon'], array( 'post-thumbnail', 'post-date', 'post-format' ) ) ) {
	$class[] = $atts['icon'] . '-cover';
}

switch ( $atts['layout'] ) {
	case 'medium':
	case 'carousel':
	case 'grid':
		$thumbnail_size = 'portfolio-medium-crop';
		break;

	case 'masonry':
		$thumbnail_size = 'blog-medium';
		break;

	case 'large':
		$thumbnail_size = 'blog-large';
		break;
	
	case 'list':
		$thumbnail_size = 'small';
		break;
	
	default:
		$thumbnail_size = 'blog-medium';
	break;
}
?>

	<div class="<?php esc_attr_e( implode( ' ', $class ) ) ?>">
		<?php if ( ! empty( $atts['title'] ) ): ?>
			<h3 class="widget-title"><?php esc_html_e( $atts['title'] ) ?></h3>
		<?php endif ?>

		<div class="blog-entries">
			<div class="entries-wrapper">
				<?php while ( $query->have_posts() ): $query->the_post(); ?>
				
				<article <?php post_class() ?>>
					<div class="entry-wrapper">
						<?php if ( in_array( $atts['icon'], array( 'post-thumbnail', 'post-date', 'post-format' ) ) ): ?>
							
							<?php if ( $atts['icon'] == 'post-thumbnail' && has_post_thumbnail() ): ?>
								
								<div class="entry-cover">
									<a href="<?php the_permalink() ?>">
										<?php the_post_thumbnail( $thumbnail_size ) ?>
									</a>
								</div>

							<?php elseif ( $atts['icon'] == 'post-date' ): ?>

								<div class="entry-cover">
									<a href="<?php the_permalink() ?>">
										<span class="post-day"><?php esc_html_e( get_the_date( 'd' ) ); ?></span>
										<span class="divider">/</span>
										<span class="post-month"><?php esc_html_e( get_the_date( 'M' ) ); ?></span>
									</a>
								</div>

							<?php else: ?>

								<div class="entry-cover">
									<a href="<?php the_permalink() ?>">
										<span class="<?php esc_attr_e( get_post_format() ) ?>">
											<?php esc_html_e( get_post_format() ) ?>
										</span>
									</a>
								</div>

							<?php endif ?>

						<?php endif ?>

						<div class="entry-header">
							<h2 class="entry-title">
								<a href="<?php the_permalink() ?>"><?php the_title() ?></a>
							</h2>

							<div class="post-meta">
								<time class="entry-time" itemprop="datePublished" datetime="<?php esc_attr_e( get_the_date( 'Y-m-d H:i:s' ) ) ?>">
									<?php esc_html_e( get_the_date() ) ?>
								</time>
							</div>
						</div>

						<?php if ( $atts['hide_content'] != 'yes' ): ?>
							
							<div class="entry-content">

								<?php

									$content = get_the_content();
									$content = trim( strip_tags( $content ) );
									$length  = intval( '0' . $atts['content_length'] );
									$length  = max( $length, 1 );

									if ( mb_strlen( $content ) > $length ) {
										$content = mb_substr( $content, 0, $length );
										$content.= '...';
									}

									echo wp_kses_post( $content );
								?>

								<?php if ( $atts['hide_readmore'] != 'yes' ): ?>
									<div class="read-more">
										<a href="<?php the_permalink() ?>">
											<?php esc_html_e( $atts['readmore_text'] ) ?>
										</a>
									</div>
								<?php endif ?>

							</div>

						<?php endif ?>
					</div>
				</article>

				<?php endwhile ?>
				<?php wp_reset_postdata() ?>
			</div>
		</div>
	</div>


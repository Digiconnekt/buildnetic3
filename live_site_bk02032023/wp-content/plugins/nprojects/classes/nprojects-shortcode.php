<?php
/**
 * WARNING: This file is part of the Projects plugin. DO NOT edit
 * this file under any circumstances.
 */

/**
 * Prevent direct access to this file
 */
defined( 'ABSPATH' ) or die();

/**
 * The shortcode handler class
 *
 * @package  Projects
 * @author   Binh Pham Thanh <binhpham@linethemes.com>
 */
final class nProjects_Shortcode extends nProjects_Base
{
	protected function __construct() {
		/**
		 * Register projects shortcode
		 */
		add_shortcode( 'projects', array( $this, 'render' ) );

		/**
		 * Specific action for mapping parameters to Visual Composer
		 */
		add_action( 'vc_before_init', array( $this, 'map_parameters' ) );
	}

	/**
	 * Register Projects shortcode to the Visual Composer
	 * 
	 * @return  void
	 */
	public function map_parameters() {
		if ( function_exists( 'vc_map' ) ) {
			vc_map( array(
				'base'        => 'projects',
				'name'        => __( 'Projects', 'nprojects' ),
				'icon'        => 'anycar-shortcode',
				'category'    => __( 'LineThemes', 'nprojects' ),
				'params'      => apply_filters( 'nprojects/shortcode_parameters', array() )
			) );
		}
	}

	/**
	 * Render the shortcode
	 * 
	 * @param   mixed   $atts     The shortcode attributes
	 * @param   string  $content  The shortcode content
	 * 
	 * @return  string
	 */
	public function render( $atts, $content = '' ) {
		if ( $template = locate_template( apply_filters( 'nprojects/shortcode_template', 'projects.php' ), false, false ) ) {
			ob_start();

			include $template;

			return ob_get_clean();
		}

		$atts = shortcode_atts( apply_filters( 'nprojects/shortcode_atts', array(
			'category'        => '',
			'tag'             => '',
			'exclude'         => '',
			'style'           => 'grid',
			'columns'         => 4,
			'limit'           => 8,
			'enable_carousel' => 'no',
			'show_filter'     => 'yes',
			'css'             => '',
			'class'           => ''
		) ), $atts );

		if ( empty( $atts['enable_carousel'] ) ) $atts['enable_carousel'] = 'no';
		if ( empty( $atts['show_filter'] ) ) $atts['show_filter'] = 'no';

		$args = array(
			'post_type' => nProjects::TYPE_NAME,
			'posts_per_page' => intval( $atts['limit'] ),
		);

		if ( ! empty( $atts['category'] ) ) {
			$args['tax_query'][] = array(
				'taxonomy' => nProjects::TYPE_CATEGORY,
				'terms'    => $atts['category'],
				'field'    => 'slug',
				'operator' => 'IN'
			);
		}

		if ( ! empty( $atts['tag'] ) ) {
			$args['tax_query'][] = array(
				'taxonomy' => nProjects::TYPE_TAG,
				'terms'    => $atts['tag'],
				'field'    => 'slug',
				'operator' => 'IN'
			);
		}

		$classes = array( 'projects-shortcode', "projects-{$atts['style']}" );
		
		if ( $atts['enable_carousel'] == 'yes' ) {
			$classes[] = 'projects-carousel';
			$atts['show_filter'] = 'no';
		}

		if ( ! empty( $atts['exclude'] ) ) {
			$exclude = $atts['exclude'];

			if ( ! is_array( $exclude ) )
				$exclude = explode( ',', $exclude );

			$args['post__not_in'] = $exclude;
		}

		$query = new WP_Query( $args );

		if ( $atts['show_filter'] == 'yes' && $atts['enable_carousel'] == 'no' ) {
			$categories = array();

			while ( $query->have_posts() ) {
				$query->next_post();

				if ( $terms = get_the_terms( $query->post->ID, nProjects::TYPE_CATEGORY ) )
					foreach ( $terms as $term )
						$categories[ $term->term_id ] = $term;
			}

			$query->rewind_posts();
		}

		ob_start();
		?>

			<?php if ( $query->have_posts() ): ?>

				<div class="<?php esc_attr_e( join( ' ', $classes ) ) ?>">
					<div class="projects-wrap">
						<?php if ( ! empty( $categories ) ): ?>
							<div class="projects-filter">
								<ul>
									<li data-filter="*" class="active"><a href="#"><?php _e( 'All', 'nprojects' ) ?></a></li>
									<?php foreach ( $categories as $term ): ?>

										<li data-filter=".category-<?php esc_attr_e( $term->term_id ) ?>">
											<a href="<?php echo esc_url( get_term_link( $term ) ) ?>"><?php esc_html_e( $term->name ) ?></a>
										</li>
									
									<?php endforeach ?>
								</ul>
							</div>
						<?php endif ?>

						<div class="projects-items">
							<?php while ( $query->have_posts() ): $query->the_post(); ?>

								<div class="<?php esc_attr_e( join( ' ', get_post_class( 'project' ) ) ) ?>" itemscope="itemscope" itemtype="http://schema.org/CreativeWork">
									<div class="project-wrap">
										<figure class="project-thumbnail">
											<a href="<?php the_permalink() ?>">
												<?php the_post_thumbnail( 'portfolio-medium', array( 'itemprop' => 'image' ) ) ?>
											</a>
											
											<figcaption>
												<div class="project-buttons">
													<?php

														$attachment_image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' );
														$attachment_image_src = $attachment_image[0];

													?>
													<a href="<?php esc_url_e( $attachment_image_src ) ?>" class="project-quick-view" data-lightbox="prettyPhoto">
														<span><?php _e( 'Quick View', 'nprojects' ) ?></span>
													</a>
												</div>
											</figcaption>
										</figure>

										<div class="project-info">
											<h3 class="project-title" itemprop="name headline">
												<a href="<?php the_permalink() ?>">
													<?php the_title() ?>
												</a>
											</h3>
											<ul class="project-categories">
												<?php the_terms( get_the_ID(), nProjects::TYPE_CATEGORY, '<li>', '</li><li>', '</li>' ) ?>
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

		return ob_get_clean();
	}
}

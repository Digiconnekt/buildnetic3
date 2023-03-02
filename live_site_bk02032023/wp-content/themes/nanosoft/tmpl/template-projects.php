<?php

/**
 * Prevent direct access to this file
 */
defined( 'ABSPATH' ) or die();

/**
 * Template Name: Projects
 */
add_filter( 'nanosoft_body_class', 'nanosoft_projects_body_class' );
add_filter( 'nanosoft_sidebar_id', 'nanosoft_projects_sidebar' );
add_filter( 'nanosoft_sidebar_position', 'nanosoft_projects_sidebar_position' );
?>
	
	<?php get_header() ?>
		<?php
			query_posts( array(
				'post_type'      => nProjects::TYPE_NAME,
				'paged'          => max( 1, get_query_var( 'paged' ) )
			) );
		?>
		<?php if ( have_posts() ): ?>
			<?php get_template_part( 'tmpl/project/loop', nanosoft_option( 'projects__displayMode' ) ) ?>
		<?php else: ?>
			<div class="content">
				<?php get_template_part( 'tmpl/project/content', 'none' ) ?>
			</div>
		<?php endif ?>
		<?php wp_reset_postdata(); ?>
		<?php wp_reset_query(); ?>

	<?php get_footer(); ?>

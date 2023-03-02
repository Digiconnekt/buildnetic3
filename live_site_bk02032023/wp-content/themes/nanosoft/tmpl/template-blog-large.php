<?php
/**
 * WARNING: This file is part of the theme. DO NOT edit
 * this file under any circumstances.
 */

/**
 * Prevent direct access to this file
 */
defined( 'ABSPATH' ) or die();

/**
 * Template Name: Blog Large
 */
add_filter( 'nanosoft_sidebar_id', 'nanosoft_blog_sidebar' );
add_filter( 'nanosoft_sidebar_position', 'nanosoft_blog_sidebar_position' );
add_filter( 'body_class', function( $classes ) {
    return array_merge( $classes, array( 'blog-large' ) );
} );
?>
	
	<?php get_header() ?>
		<?php
			query_posts( array(
				'post_type'      => 'post',
				'paged'          => max( 1, get_query_var( 'paged' ) )
			) );
		?>

		<?php get_template_part( 'tmpl/post/loop-large', nanosoft_option( 'blog__archive__style' ) ) ?>

		<?php wp_reset_postdata(); ?>
		<?php wp_reset_query(); ?>

	<?php get_footer(); ?>

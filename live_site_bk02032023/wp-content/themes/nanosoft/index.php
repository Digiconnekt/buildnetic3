<?php
defined( 'ABSPATH' ) or die();

add_filter( 'nanosoft_body_class', 'nanosoft_blog_body_class' );
add_filter( 'nanosoft_sidebar_id', 'nanosoft_blog_sidebar' );
add_filter( 'nanosoft_sidebar_position', 'nanosoft_blog_sidebar_position' );
?>

	<?php get_header() ?>
		<?php if ( have_posts() ): ?>
			<?php get_template_part( 'tmpl/post/loop', nanosoft_option( 'blog__archive__style' ) ) ?>
		<?php else: ?>
			<div class="content">
				<?php get_template_part( 'tmpl/post/content', 'none' ) ?>
			</div>
		<?php endif ?>
	<?php get_footer(); ?>

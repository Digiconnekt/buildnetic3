<?php
defined( 'ABSPATH' ) or die();


add_filter( 'nanosoft_body_class', 'nanosoft_projects_body_class' );
add_filter( 'nanosoft_sidebar_id', 'nanosoft_projects_sidebar' );
add_filter( 'nanosoft_sidebar_position', 'nanosoft_projects_sidebar_position' );
?>

	<?php get_header() ?>
		<?php if ( have_posts() ): ?>
			<?php get_template_part( 'tmpl/project/loop', nanosoft_option( 'projects__displayMode' ) ) ?>
		<?php else: ?>
			<div class="content">
				<?php get_template_part( 'tmpl/project/content', 'none' ) ?>
			</div>
		<?php endif ?>
	<?php get_footer(); ?>


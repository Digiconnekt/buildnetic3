<?php

/**
 * Prevent direct access to this file
 */
defined( 'ABSPATH' ) or die();

/**
 * Template Name: Page - Blank
 */
?>
<div class="content-inner">
	<?php while ( have_posts() ): the_post(); ?>
		<?php the_content() ?>
	<?php endwhile ?>
</div>
<!-- /.content-inner -->

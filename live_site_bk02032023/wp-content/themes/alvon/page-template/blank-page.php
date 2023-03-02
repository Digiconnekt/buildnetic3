<?php
/**
 * The template for displaying home page content.
 * Template Name: Blank Page - Full Width
 * @package alvon
 */
get_header(); 

?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<?php while(have_posts()) : the_post(); ?> 
				<?php the_content(); ?>
			<?php endwhile; ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>
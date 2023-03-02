<?php
defined( 'ABSPATH' ) or die();

$featured_background_types = (array) nanosoft_option( 'header__titlebar__backgroundFeatured' );
$current_post_type         = nanosoft_current_post_type();
$show_featured_image       = ! in_array( $current_post_type, $featured_background_types ) && has_post_thumbnail();

$gallery_position = get_field( 'projectGalleryPosition' );
$gallery_style = get_field( 'projectGalleryStyle' );

if ( $gallery_position === 'default' ) {
	$gallery_position = nanosoft_option( 'project__galleryPosition' );
}

if ( $gallery_style === 'default' ) {
	$gallery_style = nanosoft_option( 'project__galerryMode' );
}

add_filter( 'nanosoft_body_class', 'nanosoft_single_project_body_classes' );
add_filter( 'nanosoft_sidebar_id', 'nanosoft_single_project_sidebar' );
add_filter( 'nanosoft_sidebar_position', 'nanosoft_single_project_sidebar_position' );
?>
	<?php get_header() ?>
		<?php if ( have_posts() ): the_post(); ?>

			<?php if ( in_array( $gallery_position, array( 'top' ) ) ): ?>
				<?php get_template_part( 'tmpl/project/gallery', $gallery_style ) ?>
			<?php endif ?>

			<div class="content">
				<div class="content-inner">
					<div class="project-detail">
						<div class="project-header">
							<?php if ( $show_featured_image ): ?>
								<h2 class="project-title" itemprop="headline">
									<?php the_title(); ?>
								</h2>
								<div class="project-featured-image"><?php the_post_thumbnail( 'post-thumbnail' ) ?></div>
							<?php endif ?>	
						</div>				

						<?php if ( in_array( $gallery_position, array( 'left' ) ) ): ?>
							<?php get_template_part( 'tmpl/project/gallery', $gallery_style ) ?>
						<?php endif ?>

						<div class="project-content">
							<div class="project-content-inner">
								<?php the_content() ?>
							</div>
							
							<div id="project-footer" class="project-footer">
								<?php if ( nanosoft_option( 'project__tags' ) == 'on' ): ?>
									<div class="project-tags"><span><?php esc_html_e( 'Tags:', 'nanosoft' ); ?></span><?php echo get_the_term_list( get_the_ID(), 'nproject-tag' ) ?></div>
								<?php endif ?>
							</div>
						</div>

						<?php if ( in_array( $gallery_position, array( 'right' ) ) ): ?>
							<?php get_template_part( 'tmpl/project/gallery', $gallery_style ) ?>
						<?php endif ?>
					</div>

					<?php if ( nanosoft_option( 'project__author' ) == 'on' ): ?>
						<?php get_template_part( 'tmpl/post/content-author' ) ?>
					<?php endif ?>

				</div>
			</div>

			<?php if ( nanosoft_option( 'project__pagination' ) == 'on' ): ?>
				<?php get_template_part( 'tmpl/post/content-navigator' ) ?>
			<?php endif ?>

			<?php if ( in_array( $gallery_position, array( 'bottom' ) ) ): ?>
				<?php get_template_part( 'tmpl/project/gallery', $gallery_style ) ?>
			<?php endif ?>

			<?php if ( nanosoft_option( 'project__related' ) == 'on' ): ?>
				<?php get_template_part( 'tmpl/project/related' ) ?>
			<?php endif ?>
		<?php endif ?>
	<?php get_footer() ?>

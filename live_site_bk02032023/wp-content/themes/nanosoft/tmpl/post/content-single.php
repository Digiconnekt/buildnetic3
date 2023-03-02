<?php
defined( 'ABSPATH' ) or die();

$featured_background_types = (array) nanosoft_option( 'header__titlebar__backgroundFeatured' );
$current_post_type         = nanosoft_current_post_type();
$show_featured_image       = ! in_array( $current_post_type, $featured_background_types ) && has_post_thumbnail();
?>

	<div id="post-<?php the_ID() ?>" <?php post_class( 'post' ) ?>>
		<div class="post-inner">
			<div class="post-thumbnail">
				<?php the_post_thumbnail( 'post-thumbnail' ) ?>
			</div>

			<div class="post-header">
				<div class="post-categories"><?php the_category( _x( ' ', 'Used between list items, there is a space after the comma.', 'nanosoft' ) ) ?></div>
				<h2 class="post-title" itemprop="headline">
					<?php the_title(); ?>
				</h2>

				<?php if ( nanosoft_option( 'blog__archive__postMeta' ) == 'on' ): ?>
					<?php get_template_part( 'tmpl/post/content-meta' ) ?>
				<?php endif ?>
			</div>

			<div class="post-content" itemprop="text">
				<div class="post-content-inner">
					<?php the_content() ?>
				</div>
				<!-- /.post-content-inner -->
				
				
				<?php
					wp_link_pages( array(
						'before'      => '<div class="page-links"><span class="page-links-title">' . esc_html__( 'Pages:', 'nanosoft' ) . '</span>',
						'after'       => '</div>',
						'link_before' => '<span>',
						'link_after'  => '</span>',
					) );
				?>
					
				<div class="post-footer">	
					

					<?php if ( nanosoft_option( 'blog__single__postTags' ) == 'on' ): ?>
						<div class="post-tags"><span><?php esc_html_e( 'Tags:', 'nanosoft' ); ?></span><?php the_tags( '', ' ' ); ?></div>
					<?php endif ?>
				</div>
			</div>
			<!-- /.post-content -->
		</div>
		<!-- /.post-inner -->
	</div>
	<!-- /#post-<?php echo get_the_ID() ?> -->

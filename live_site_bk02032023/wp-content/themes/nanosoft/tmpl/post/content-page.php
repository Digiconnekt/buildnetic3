<?php
defined( 'ABSPATH' ) or die();
?>

	<div id="post-<?php the_ID() ?>" <?php post_class( 'post' ) ?>>
		<div class="post-inner">
			<?php if ( has_post_thumbnail() ): ?>
			<div class="post-thumbnail">
				<?php the_post_thumbnail( 'post-thumbnail' ) ?>
			</div>
			<!-- /.post-thumbnail -->
			<?php endif ?>

			<div class="post-content" itemprop="text">
				<div class="post-content-inner">
					<?php the_content() ?>
				</div>
				<!-- /.post-content-inner -->

				<!--
				<div class="post-content-extras">
					<?php
						wp_link_pages( array(
							'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'nanosoft' ),
							'after'  => '</div>',
						) );
					
						if ( get_edit_post_link() ):
							edit_post_link( sprintf(
									esc_html__( 'Edit %s', 'nanosoft' ),
									the_title( '<span class="screen-reader-text">"', '"</span>', false )
								),
								'<div class="edit-link">',
								'</div>'
							);
						endif;
					?>
				</div>
				-->
			</div>
			<!-- /.post-content -->

		</div>
		<!-- /.post-inner -->
	</div>
	<!-- /#post-<?php echo get_the_ID() ?> -->

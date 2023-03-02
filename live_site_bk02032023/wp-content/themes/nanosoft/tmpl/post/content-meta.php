<?php
defined( 'ABSPATH' ) or die();
?>
	
	<?php if ( nanosoft_option( 'blog__archive__postMeta' ) == 'on' ): ?>
		<div class="post-meta">
			<div class="post-avatar">
				<?php echo get_avatar( get_the_author_meta( 'ID' ), 80 ); ?>
			</div>
			<div class="post-author-content">
				<span><?php esc_html_e( 'by', 'nanosoft' ) ?></span>
				<span class="post-name">
					<?php the_author_posts_link() ?>
				</span>
				<span class="post-date"><?php echo esc_html( get_the_date( get_option( 'date_format' ) ) ) ?></span>
			</div>
		</div>
	<?php endif ?>

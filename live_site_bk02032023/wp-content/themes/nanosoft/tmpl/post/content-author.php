<?php
defined( 'ABSPATH' ) or die();

if ( ! ( $author_id = get_the_author_meta( 'ID' ) ) ) {
	$author_id = get_query_var( 'author' );
}

$author_description = get_the_author_meta( 'description', $author_id );
?>

	<?php if ( ! empty( $author_description ) ): ?>
		<div class="post-author-box" itemprop="author" itemscope="itemscope" itemtype="http://schema.org/Person">
			<?php echo get_avatar( get_the_author_meta( 'ID' ), 80 ); ?>
			<div class="author-box-content">
				<h5 class="author-box-title">
					<?php the_author_posts_link() ?>
				</h5>

				<div class="author-description">
					<?php echo wp_kses_post( $author_description ) ?>
				</div>
			</div>
		</div>
	<?php endif ?>

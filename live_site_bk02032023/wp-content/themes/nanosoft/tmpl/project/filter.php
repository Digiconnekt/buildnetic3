<?php
defined( 'ABSPATH' ) or die();

if ( is_tax( 'nproject-category' ) || is_tax( 'nproject-tag' ) ) {
	return;
}

$classes   = array( 'projects-filter' );
$classes[] = sprintf( 'projects-filter-%s', nanosoft_option( 'projects__filterableAlign' ) );
/**
 * Ignore fetching project terms when archive filter is
 * disabled
 */
if ( nanosoft_option( 'projects__filterable' ) == 'on' ):
	$terms = array();
	$filter_type = nanosoft_option( 'projects__filterableType' );

	while ( have_posts() ) {
		the_post();

		if ( $_terms = get_the_terms( get_the_ID(), $filter_type ) ) {
			foreach ( $_terms as $term ) {
				$terms[ $term->term_id ] = $term;
			}
		}
	}

	rewind_posts();
	?>

	<?php if ( ! empty( $terms ) ): ?>
		<div class="<?php echo esc_attr( join( ' ', $classes ) ) ?>">
			<ul data-filter-target=".content-inner[data-grid]">
				<li data-filter="*" class="active">
					<a href="javascript:;">
						<?php esc_html_e( 'All', 'nanosoft' ) ?>
					</a>
				</li>
				<?php foreach ( $terms as $id => $term ): ?>
					<li data-filter="<?php printf( '.%s-%s', esc_attr( $filter_type ), esc_attr( $term->slug ) ) ?>">
						<a href="<?php echo esc_url( get_term_link( $term ) ) ?>">	
							<?php if ( $preview_id = get_field( 'thumbnail', "nproject-category_{$term->term_id}" ) ): ?>
								<?php echo wp_get_attachment_image( $preview_id, 'full' ); ?>
							<?php endif ?>

							<span><?php echo esc_html( $term->name ) ?></span>
						</a>
					</li>
				<?php endforeach ?>
			</ul>
		</div>
	<?php endif ?>
<?php endif ?>

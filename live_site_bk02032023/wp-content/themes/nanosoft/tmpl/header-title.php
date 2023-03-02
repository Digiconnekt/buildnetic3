<?php
defined( 'ABSPATH' ) or die();


$layout    = nanosoft_option( 'header__titlebar' );
$alignment = nanosoft_option( 'header__titlebar__align' );

$current_post = get_queried_object();

if ($current_post instanceof WP_Post) {
	/**
	 * Override layout and alignment settings for the specific entry
	 */
	$_layout = get_field( 'titlebarLayout', $current_post->ID );
	$_alignment = get_field( 'titlebarAlign', $current_post->ID );
}

if ( isset( $_layout ) && $_layout != 'default' ) {
	$layout = $_layout;
}

if ( isset( $_alignment ) && $_alignment != 'default' ) {
	$alignment = $_alignment;
}

if ( ( is_front_page() && nanosoft_option( 'header__titlebar__home' ) == 'off' ) || $layout == 'none' ) {
	return;
}

$classes = array(
	"content-header",
	"content-header-{$alignment}"
);

if ( nanosoft_option( 'header__titlebar__full' ) === 'on' ) {
	$classes[] = 'content-header-full';
}

if ( nanosoft_option( 'header__titlebar__shadow' ) === 'on' ) {
	$classes[] = 'content-header-shadow';
}

if ( is_singular() ) {
	$featured_background_types = (array) nanosoft_option( 'header__titlebar__backgroundFeatured' );
	$current_post_type         = nanosoft_current_post_type();


	if ( in_array( $current_post_type, $featured_background_types ) && has_post_thumbnail( $current_post->ID ) ) {
		$classes[] = 'content-header-featured';
	}
}
?>

	<div class="<?php echo esc_attr( join( ' ', $classes ) ) ?> vc_row">
		<?php if ( nanosoft_option( 'header__titlebar__canvaseffect' ) == 'on' ): ?>
			<canvas></canvas>
		<?php endif ?>
		<div class="content-header-inner wrap">
			<div class="page-title-wrap">
				
				<?php if ( $client_image_id = get_field( 'projectClientLogo', get_post() ) ): ?>
					<div class="project-client">
						<?php
							$image = nanosoft_get_image_resized( array(
								'image_id' => $client_image_id,
								'size'     => 'full'
							) );

							echo wp_kses_post( $image['thumbnail'] );
						?>

						<?php if ( $accent_color = get_field( 'projectAccentColor' ) ): ?>
							<span class="mask" style="background-color: <?php echo esc_attr( $accent_color ) ?>;">
								<?php echo esc_html( $accent_color ) ?>
							</span>
						<?php endif ?>
					</div>
				<?php endif ?>


				<?php if ( in_array( $layout, array( 'both', 'title' ) ) ): ?>
					<div class="page-title">
						<?php nanosoft_header_page_title() ?>
					</div>
				<?php endif ?>

				<?php if ( function_exists( 'bcn_display' ) && in_array( $layout, array( 'both', 'breadcrumbs' ) ) ): ?>
					<div class="breadcrumbs">
						<div class="breadcrumbs-inner">
							<?php bcn_display() ?>
						</div>
					</div>
				<?php endif ?>
			</div>
		</div>
		<?php if ( nanosoft_option( 'header__titlebar__scrolldown' ) == 'on' ): ?>
			<div class="down-arrow">
				<a href="javascript:;">
					<i class="ion-android-arrow-down size-24"></i>
				</a>
			</div>
		<?php endif ?>
	</div>

<?php
$atts = shortcode_atts( array(
	'class'       => '',
	'css'         => '',
	'image'       => '',
	'image_size'  => 'full',
	'title'       => '',
	'subtitle'    => '',
	'link'        => '',
	'target'      => '',
	'show_button' => 'no',
	'button_text' => esc_html__( 'Continue', 'nanosoft' )
), $atts );

// Preparing the shortcode attributes
$atts['show_button'] = $atts['show_button'] == 'yes';
$atts['button_text'] = empty( $atts['button_text'] ) ? esc_html__( 'Continue', 'nanosoft' ) : $atts['button_text'];

// Build the element classes
$classes = array( 'imagebox' );
$classes[] = $atts['class'];

if ( function_exists( 'vc_shortcode_custom_css_class' ) ) {
	$classes[] = vc_shortcode_custom_css_class( $atts['css'], ' ' );
}

// Preparing image for the box
if ( is_numeric( $atts['image'] ) ) {
	$image = wpb_getImageBySize( array( 'attach_id' => $atts['image'], 'thumb_size' => $atts['image_size'] ) );
	$image = $image['thumbnail'];
}
elseif ( filter_var( $atts['image'], FILTER_VALIDATE_URL ) ) {
	$image = sprintf( '<img src="%s" />', esc_url( $atts['image'] ) );
}

$content = wpautop( $content );
$content = preg_replace( '/<([a-z]+)>\s*<\/\\1>/i', '', $content );
$content = wp_kses_post( $content );
?>

<!-- BEGIN .imagebox -->
<div class="<?php echo esc_attr( join( ' ', $classes ) ) ?>">
	<?php if ( ! empty( $image ) ): ?>
		<div class="box-image">
			<?php if ( ! empty( $atts['title'] ) ): ?>
				<a class="box-header" href="<?php echo esc_url( $atts['link'] ) ?>" target="<?php echo empty($atts['target']) ? '_self' : esc_attr( $atts['target'] ) ?>">
					<?php if ( ! empty( $atts['subtitle'] ) ): ?>
						<h6 class="box-subtitle">
							<span><?php echo wp_kses_post( $atts['subtitle'] ) ?></span>
						</h6>
					<?php endif ?>

					<h2 class="box-title">		
						<?php echo wp_kses_post( $atts['title'] ) ?>
					</h2>

					<?php if ( $atts['show_button'] ): ?>
					<div class="box-button">
						<span class="button no-bg"><?php echo esc_html( $atts['button_text'] ) ?></span>
					</div>
					<?php endif ?>
				</a>
			<?php endif ?>

			<a class="box-img" href="<?php echo esc_url( $atts['link'] ) ?>" target="<?php echo empty($atts['target']) ? '_self' : esc_attr( $atts['target'] ) ?>">
				<?php print( wp_kses_post( $image ) ) ?>
			</a>
		</div>

		<?php if ( ! empty( $content ) ): ?>
			<div class="box-content">
				<?php echo wp_kses_post( $content ) ?>
			</div>
		<?php endif ?>
		
	<?php endif ?>
</div>
<!-- End .imagebox -->

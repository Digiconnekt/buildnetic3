<?php
defined( 'ABSPATH' ) or die();

$classes = array( 'footer-copyright' );
$classes[] = sprintf( 'footer-copyright-%s', nanosoft_option( 'footer__copyright__align' ) );

if ( nanosoft_option( 'footer__copyright__full' ) == 'on' ) {
	$classes[] = 'footer-copyright-full';
}
?>

	<?php if ( nanosoft_option( 'footer__copyright' ) == 'on' ): ?>
		<div class="<?php echo esc_attr( join( ' ', $classes ) ) ?>">
			<div class="footer-copyright-inner wrap">
				<div class="copyright-content">
					<?php echo wp_kses_post( nanosoft_option( 'footer__copyright__content' ) ) ?>
				</div>
				
				<?php nanosoft_social_icons( array( 'location' => 'footer' ) ) ?>
				
				<?php if ( nanosoft_option( 'global__misc__gotop' ) == 'on' ): ?>
					<div class="go-to-top">
						<a href="javascript:;"><span><?php echo esc_html__( 'Go to Top', 'nanosoft' ) ?></span></a>
					</div>
				<?php endif ?>
			</div>
		</div>
	<?php endif ?>
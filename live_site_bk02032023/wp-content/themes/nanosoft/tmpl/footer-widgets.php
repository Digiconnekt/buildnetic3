<?php
defined( 'ABSPATH' ) or die();

$classes = array( 'footer-widgets' );

if ( nanosoft_option( 'footer__widgets__full' ) == 'on' ) {
	$classes[] = 'footer-widgets-full';
}

$layout = nanosoft_option( 'footer__widgets__layout' );
$columns = $layout['columns'];
$columnsLayout = $layout['layout'][$columns];
?>

	<?php if ( nanosoft_option( 'footer__widgets' ) == 'on' ): ?>
		<div class="<?php echo esc_attr( join( ' ', $classes ) ) ?>">
			<div class="footer-widgets-inner wrap">
				<div class="footer-aside-wrap">
					<?php foreach( range( 0, $columns - 1 ) as $index ): ?>
					<aside data-width="<?php echo esc_attr( $columnsLayout[$index] ) ?>">
						<?php dynamic_sidebar( sprintf( 'footer-%d', $index + 1 ) ) ?>
					</aside>
					<?php endforeach ?>
				</div>
			</div>
		</div>
	<?php endif ?>
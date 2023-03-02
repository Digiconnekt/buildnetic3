<?php
defined( 'ABSPATH' ) or die();

$topbar_text  = nanosoft_option( 'header__topbar__text' );
$topbar_menu_args = array(
	'theme_location' => 'top',
	'menu_class'     => 'menu menu-top',
	'container'       => false,
	'fallback_cb'     => false,
	'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
	'depth'           => 0
);
?>

	<div id="site-topbar" class="site-topbar">
		<div class="wrap">
			<div class="site-topbar-inner">
				<?php if ( is_active_sidebar( 'off-canvas-left' ) ): ?>
					<a href="javascript:;" data-target="off-canvas-left" class="off-canvas-toggle">
						<span></span>
					</a>
				<?php endif; ?>

				<?php if ( ! empty( $topbar_text ) ): ?>
					<div class="topbar-text">
						<?php echo wp_kses_post( $topbar_text ) ?>
					</div>
					<!-- /.topbar-text -->
				<?php endif ?>

				<div class="topbar-menu">
					<?php if ( has_nav_menu( 'top' ) ): ?>
						<?php wp_nav_menu( $topbar_menu_args ) ?>
						<!-- /.topbar-menu -->
					<?php endif ?>
				</div>

				<?php nanosoft_social_icons( array( 'location' => 'top' ) ) ?>
			</div>
		</div>
	</div>

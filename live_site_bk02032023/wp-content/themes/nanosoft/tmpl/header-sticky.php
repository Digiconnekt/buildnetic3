<?php
defined( 'ABSPATH' ) or die();

// The menu settings
$primary_menu_args = array(
	'theme_location'  => 'primary',
	'container'       => false,
	'menu_class'      => 'menu menu-primary',
	'fallback_cb'     => 'nanosoft_page_menu',
	'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
	'depth'           => 0
);

$contact_info  = nanosoft_option( 'header__info__text' );

$header_nav_extras = nanosoft_option( 'header__nav__extras' );

$header_classes = array( 'site-header-sticky' );
$header_classes[] = sprintf( 'header-brand-%s', nanosoft_option( 'header__sticky__logoAlign' ) );

if ( nanosoft_option( 'header__sticky__width' ) === 'on' ) {
	$header_classes[] = 'header-full';
}

if ( nanosoft_option( 'header__sticky__shadow' ) === 'on' ) {
	$header_classes[] = 'header-shadow';
}

if ( nanosoft_option( 'header__sticky__transparent' ) === 'on' ) {
	$header_classes[] = 'header-transparent';
}
?>

	<div id="site-header-sticky" class=" <?php echo esc_attr( join( ' ', $header_classes ) ) ?>">
		<div class="site-header-inner wrap">
			<div class="header-content">
				<div class="header-brand">
					<a href="<?php echo esc_attr( site_url() ) ?>">
						<?php nanosoft_logo( nanosoft_option( 'header__sticky__logo' ) ) ?>
					</a>
				</div>


				<?php // if ( has_nav_menu( 'primary' ) ): ?>
					<nav class="navigator" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
						<?php wp_nav_menu( $primary_menu_args ) ?>
					</nav>
				<?php // endif ?>

				<div class="extras">
					<?php if ( ! empty( $contact_info ) ): ?>
						<div class="header-info-text">
							<?php echo wp_kses_post( $contact_info ) ?>
						</div>
					<?php endif ?>

					<?php nanosoft_social_icons( array( 'location' => 'sticky' ) ) ?>

					<?php if ( ! empty( $header_nav_extras ) ): ?>
						<ul class="navigator menu-extras">
							<?php foreach ( $header_nav_extras as $type ): ?>
								<?php get_template_part( 'tmpl/header-icon', $type ); ?>
							<?php endforeach ?>
						</ul>
					<?php endif ?>
				</div>

				<?php get_template_part( 'tmpl/header-sliding-toggle' ) ?>
				
			</div>
		</div>
		<!-- /.site-header-inner -->
	</div>
	<!-- /.site-header -->
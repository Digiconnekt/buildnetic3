<?php
defined( 'ABSPATH' ) or die();


// Generate the background styles based on the
// given options key
$background_options = array(
	'global__layout__background'      => 'body, .site, .mask::after, .mask::before',
	'global__sidebar__background'     => '.main-sidebar',
	'header__background'              => '.site-header',
	'header__topbar__background'      => '.site-topbar',
	'header__nav__background'         => '.site-header .navigator',

	'header__sticky__background'      => '.site-header-sticky, .site-header-sticky .widget.widget_search',
	'header__sticky__nav__background' => '.site-header-sticky .navigator',
	
	// Title bar
	'header__titlebar__background' => '.content-header'
);

foreach ( $background_options as $key => $selector ) {
	nanosoft_define_style( $selector, nanosoft_background_styles(
		nanosoft_option( $key )
	) );
}

$queried_object = get_queried_object();

if ( $queried_object instanceOf WP_Post ) {
	$featured_background_types = (array) nanosoft_option( 'header__titlebar__backgroundFeatured' );
	$current_post_type         = nanosoft_current_post_type();
	
	if ( in_array( $current_post_type, $featured_background_types ) && has_post_thumbnail( $queried_object->ID ) ) {
		list($src, $width, $height, $crop) = wp_get_attachment_image_src( get_post_thumbnail_id( $queried_object->ID ), 'full', false );
		
		nanosoft_define_style( '.content-header', array(
			'background-image' => sprintf( 'url(%s)', $src )
		) );
	}
}


// Generate the typography styles based on the
// given options key
$typography_options = array(
	'global__typography__body'              => 'body',
	'global__typography__h1'                => 'h1',
	'global__typography__h2'                => 'h2',
	'global__typography__h3'                => 'h3',
	'global__typography__h4'                => 'h4',
	'global__typography__h5'                => 'h5',
	'global__typography__h6'                => 'h6',
	'global__typography__blockquote'        => 'blockquote',
	'header__topbar__typography'            => '.site-topbar',
	'header__nav__typography'               => '.site-header .navigator > .menu > li a',
	'header__sticky__nav__typography'       => '.site-header-sticky .navigator > .menu > li a',

	// Title bar
	'header__titlebar__titleFont' => '.content-header .page-title-inner',
	'header__titlebar__breadcrumbFont' => '.content-header .breadcrumbs, .content-header .down-arrow a, .page-title .subtitle',

	// Widget
	'global__widget__title'   => '.widget > .widget-title',
	'global__widget__content' => '.widget',

	// Sliding content
	'sliding__sidebarTypography'  => '.off-canvas-left .off-canvas-wrap .widget',
	'sliding__menuTypography'     => '.sliding-menu',

	// Content bottom widgets
	'contentBottom__widgets__typography'   => '.content-bottom-widgets .widget',
	'contentBottom__widgets__title'        => '.content-bottom-widgets .widget-title',

	// Footer typography
	'footer__typography'            => '.site-footer',
	'footer__copyright__typography' => '.footer-copyright',
	'footer__widgets__typography'   => '.footer-widgets .widget',
	'footer__widgets__title'        => '.footer-widgets .widget-title'

);

foreach ( $typography_options as $key => $selector ) {
	nanosoft_define_style( $selector, nanosoft_typography_styles(
		(array) nanosoft_option( $key )
	) );
}

if ( $heading_sizes = nanosoft_option( 'global__typography__headingSize' ) ) {
	foreach ( $heading_sizes as $tag => $size ) {
		nanosoft_define_style( $tag, array(
			'font-size' => $size
		) );
	}
}

// Generate the text colors based on the
// given options key
$text_color_options = array( 'global__typography__colors' );

foreach ( $text_color_options as $key ) {
	$color_values = array_filter( nanosoft_option( $key ) );
	
	foreach ( $color_values as $selector => $color ) {
		nanosoft_define_style( $selector, array(
			'color' => $color
		) );
	}
}

$nav_colors_options = array(
	'header__topbar__colors' => array(
		'menu'        => '.site-topbar a',
		'menu-hover'  => '.site-topbar a:hover,.site-topbar .menu-top li:hover a',
		'menu-active' => array(
			'.site-topbar a:active',
			'.site-topbar .current-menu-item > a',
			'.site-topbar .current_page_item > a',
			'.site-topbar .current-menu-ancestor > a',
			'.site-topbar .current-menu-parent > a'
		)
	),
	'header__nav__colors' => array(
		'menu'        => '.site-header .off-canvas-toggle, .site-header .navigator .menu > li  a, .site-header a',
		'menu-hover'  => '.site-header .off-canvas-toggle:hover, .site-header .navigator .menu > li:hover > a, .site-header a:hover, .site-header .navigator .menu > li.menu-item-expand > a',
		'menu-active' => array(
			'.site-header .navigator .menu > li.current-menu-item > a',
			'.site-header .navigator .menu > li.current_page_item > a',
			'.site-header .navigator .menu > li.current-menu-ancestor > a',
			'.site-header .navigator .menu > li.current-menu-parent > a',
			'.site-header .navigator .menu.menu-extras > li > a',
			'.site-header .navigator .menu.menu-extras .search-field',
			'.site-header .off-canvas-toggle',
			'.site-header .off-canvas-toggle:hover'
		)
	),
	'header__sticky__nav__colors' => array(
		'menu'        => '.site-header-sticky .off-canvas-toggle, .site-header-sticky .navigator .menu > li  a, .site-header-sticky a',
		'menu-hover'  => '.site-header-sticky .off-canvas-toggle:hover, .site-header-sticky .navigator .menu > li:hover > a, .site-header-sticky a:hover',
		'menu-active' => array(
			'.site-header-sticky .navigator .menu > li.current-menu-item > a',
			'.site-header-sticky .navigator .menu > li.current_page_item > a',
			'.site-header-sticky .navigator .menu > li.current-menu-ancestor > a',
			'.site-header-sticky .navigator .menu > li.current-menu-parent > a',
			'.site-header-sticky .navigator .menu.menu-extras > li > a',
			'.site-header-sticky .navigator .menu.menu-extras .search-field',
			'.site-header-sticky .off-canvas-toggle',
			'.site-header-sticky .off-canvas-toggle:hover'
		)
	),
	'header__titlebar__breadcrumbColors' => array(
		'link'      => '.breadcrumbs a',
		'linkHover' => '.breadcrumbs a:hover'
	),

	// Widget link color
	'global__widget__linkColors' => array(
		'link'      => '.main-sidebar a',
		'linkHover' => '.main-sidebar a:hover'
	),

	// Sliding content color
	'sliding__sidebarColors' => array(
		'link'      => '.off-canvas-left a',
		'linkHover' => '.off-canvas-left a:hover'
	),
	'sliding__menuColors' => array(
		'link'      => '.sliding-menu a',
		'linkHover' => '.sliding-menu a:hover'
	),

	// Content bottom widgets
	'contentBottom__widgets__colors' => array(
		'link'      => '.content-bottom-widgets a',
		'linkHover' => '.content-bottom-widgets a:hover'
	),

	// Footer
	'footer__colors' => array(
		'link'      => '.site-footer a',
		'linkHover' => '.site-footer a:hover'
	),
	'footer__widgets__colors' => array(
		'link'      => '.site-footer .footer-widgets a',
		'linkHover' => '.site-footer .footer-widgets a:hover'
	),
	'footer__copyright__colors' => array(
		'link'      => '.site-footer .footer-copyright a',
		'linkHover' => '.site-footer .footer-copyright a:hover'
	),
);

foreach ( $nav_colors_options as $option_key => $selectors ) {
	$colors = nanosoft_option( $option_key );

	foreach ( $colors as $key => $value ) {
		$selector = is_array( $selectors[ $key ] )
			? join( ', ', $selectors[ $key ] )
			: $selectors[ $key ];

		nanosoft_define_style( $selector, array(
			'color' => $value
		) );
	}
}

// Generate the layout width settings
nanosoft_define_style( '.wrap',
	(array) nanosoft_option( 'global__layout__width' )
);

// The content padding styles
nanosoft_define_style( '.content-body-inner',
	(array) nanosoft_option( 'global__layout__padding' )
);

/**
 * The header options
 */
nanosoft_define_style( '.site-header .header-brand',
	(array) nanosoft_option( 'header__logoMargin' )
);
nanosoft_define_style( '.site-header .site-header-inner, .site-header .extras', array(
	'height' => nanosoft_option( 'header__height' )
) );
nanosoft_define_style( '.site-header .off-canvas-toggle, .site-header .navigator .menu, .site-header .social-icons',
	(array) nanosoft_option( 'header__nav__margin' )
);
nanosoft_define_style( '.site-header .off-canvas-toggle, .site-header .navigator .menu > li > a, .site-header .menu-extras > li > a',
	(array) nanosoft_option( 'header__nav__padding' )
);

// Generate styles for the custom header border
if ( nanosoft_option( 'header__border' ) === 'on' ) {
	nanosoft_define_style( '.site-header', nanosoft_border_styles(
		(array) nanosoft_option( 'header__border__options' )
	) );
}

// Generate styles for the custom header title border
if ( nanosoft_option( 'header__titlebar__border' ) === 'on' ) {
	nanosoft_define_style( '.content-header', nanosoft_border_styles(
		(array) nanosoft_option( 'header__titlebar__border__options' )
	) );
}


/**
 * The header options
 */
nanosoft_define_style( '.site-header-sticky .header-brand',
	(array) nanosoft_option( 'header__sticky__logoMargin' )
);
nanosoft_define_style( '.site-header-sticky .site-header-inner, .site-header-sticky .extras', array(
	'height' => nanosoft_option( 'header__sticky__height' )
) );
nanosoft_define_style( '.site-header-sticky .off-canvas-toggle, .site-header-sticky .navigator .menu, .site-header-sticky .social-icons',
	(array) nanosoft_option( 'header__sticky__nav__margin' )
);
nanosoft_define_style( '.site-header-sticky .off-canvas-toggle, .site-header-sticky .navigator .menu > li > a, .site-header-sticky .menu-extras > li > a',
	(array) nanosoft_option( 'header__sticky__nav__padding' )
);

// Generate styles for the custom header border
if ( nanosoft_option( 'header__sticky__border' ) === 'on' ) {
	nanosoft_define_style( '.site-header-sticky', nanosoft_border_styles(
		(array) nanosoft_option( 'header__sticky__border__options' )
	) );
}


nanosoft_define_style( '.content-header', (array) nanosoft_option( 'header__titlebar__margin' ) );
nanosoft_define_style( '.content-header', (array) nanosoft_option( 'header__titlebar__padding' ) );
nanosoft_define_style( '.content-header .content-header-inner', array( 'height' => nanosoft_option( 'header__titlebar__height' ) ) );


/**
 * The logo size
 */
foreach ( array( 'logoDefault', 'logoLight', 'logoDark' ) as $logo_profile ) {
	$size = (array) nanosoft_option( "{$logo_profile}__logoSize" );
	$size = array_filter( $size );

	nanosoft_define_style( ".logo.{$logo_profile}", $size );
}

/**
 * The layout framed
 */
if ( nanosoft_option( 'global__layout__mode' ) === 'frame' ) {
	nanosoft_define_style( '#frame > span', array(
		'background' => nanosoft_option( 'global__layout__frame' )
	) );
}


/**
 * The sliding content
 */
if ( is_active_sidebar( 'off-canvas-left' ) ) {
	nanosoft_define_style( '.off-canvas-left .off-canvas-wrap', nanosoft_background_styles(
		(array) nanosoft_option( 'sliding__sidebarBackground' )
	) );
	nanosoft_define_style( '.off-canvas-left .off-canvas-wrap', (array) nanosoft_option( 'sliding__sidebarPadding' ) );
}
// if ( has_nav_menu( 'sliding' ) ) {
	nanosoft_define_style( '.sliding-menu', nanosoft_background_styles(
		(array) nanosoft_option( 'sliding__menuBackground' )
	) );
	nanosoft_define_style( '.sliding-menu .off-canvas-wrap', (array) nanosoft_option( 'sliding__menuPadding' ) );
// }


/**
 * Sidebar Styles
 */
if ( nanosoft_has_sidebar() ) {
	$layout_dimension = nanosoft_option( 'global__layout__width' );
	$sidebar_dimension = nanosoft_option( 'global__sidebar__dimension' );
	$padding_side = nanosoft_sidebar_position() == 'right' ? 'padding-left' : 'padding-right';

	nanosoft_define_style( '#main-content', array(
		'width' => sprintf( 'calc(100%% - %spx)', (int)$sidebar_dimension['width'] + (int)$sidebar_dimension['margin'] )
	) );
	nanosoft_define_style( '.main-sidebar', array(
		'width' => sprintf( '%spx', (int)$sidebar_dimension['width'] + (int)$sidebar_dimension['margin'] ),
		$padding_side => $sidebar_dimension['margin']
	) );
	nanosoft_define_style( '.main-sidebar', nanosoft_background_styles(
		(array) nanosoft_option( 'global__sidebar__background' )
	) );
	nanosoft_define_style( '.sidebar-right .content-body-inner::before', array(
		'right' => sprintf( '%spx', (int)$sidebar_dimension['width'] + (int)$sidebar_dimension['margin']/2 )
	) );
	nanosoft_define_style( '.sidebar-left .content-body-inner::before', array(
		'left' => sprintf( '%spx', (int)$sidebar_dimension['width'] + (int)$sidebar_dimension['margin']/2 )
	) );
}

/**
 * The widget styles
 */
nanosoft_define_style( '.widget', nanosoft_background_styles(
	(array) nanosoft_option( 'global__widget__contentBackground' )
) );
nanosoft_define_style( '.widget', (array) nanosoft_option( 'global__widget__contentPadding' ) );
nanosoft_define_style( '.widget', (array) nanosoft_option( 'global__widget__contentMargin' ) );

nanosoft_define_style( '.widget > .widget-title', nanosoft_background_styles(
	(array) nanosoft_option( 'global__widget__titleBackground' )
) );
nanosoft_define_style( '.widget > .widget-title', (array) nanosoft_option( 'global__widget__titlePadding' ) );
nanosoft_define_style( '.widget > .widget-title', (array) nanosoft_option( 'global__widget__titleMargin' ) );

/**
 * Button styles
 */
nanosoft_define_style( '.button, input[type="button"], input[type="submit"], button', array(
	'background' => nanosoft_option( 'button__background' )
) );
nanosoft_define_style( '.button, input[type="button"], input[type="submit"], button', array( 
	'height' => nanosoft_option( 'button__height' ) 
) );
nanosoft_define_style( '.button, input[type="button"], input[type="submit"], button', nanosoft_typography_styles(
	(array) nanosoft_option( 'button__typography' )
) );
nanosoft_define_style( '.button, input[type="button"], input[type="submit"], button',
	(array) nanosoft_option( 'button__padding' )
);
nanosoft_define_style( '.button, input[type="button"], input[type="submit"], button', nanosoft_border_styles(
	(array) nanosoft_option( 'button__border' )
) );
nanosoft_define_style( '.button, input[type="button"], input[type="submit"], button', array(
	'border-radius' => nanosoft_option( 'button__borderRadius' )
) );

/**
 * Input styles
 */
nanosoft_define_style( 'input, textarea, select', array(
	'background' => nanosoft_option( 'input__background' )
) );
nanosoft_define_style( 'input, select', array( 
	'height' => nanosoft_option( 'input__height' ) 
) );
nanosoft_define_style( 'input, textarea, select', nanosoft_typography_styles(
	(array) nanosoft_option( 'input__typography' )
) );
nanosoft_define_style( 'input, textarea, select',
	(array) nanosoft_option( 'input__padding' )
);
nanosoft_define_style( 'input, textarea, select', nanosoft_border_styles(
	(array) nanosoft_option( 'input__border' )
) );
nanosoft_define_style( 'input, textarea, select', array(
	'border-radius' => nanosoft_option( 'input__borderRadius' )
) );

// Content bottom widgets
if ( nanosoft_option( 'contentBottom__widgets' ) == 'on' ) {
	nanosoft_define_style( '.content-bottom-widgets', nanosoft_background_styles(
		(array) nanosoft_option( 'contentBottom__widgets__background' )
	) );
	nanosoft_define_style( '.content-bottom-widgets', (array) nanosoft_option( 'contentBottom__widgets__padding' ) );
	nanosoft_define_style( '.content-bottom-widgets .widget', (array) nanosoft_option( 'contentBottom__widgets__margin' ) );
}


/**
 * Footer styles
 */
nanosoft_define_style( '.site-footer', nanosoft_border_styles(
	(array) nanosoft_option( 'footer__border' )
) );
nanosoft_define_style( '.site-footer', nanosoft_background_styles(
	(array) nanosoft_option( 'footer__background' )
) );
nanosoft_define_style( '.site-footer', (array) nanosoft_option( 'footer__padding' ) );

// Footer widgets
if ( nanosoft_option( 'footer__widgets' ) == 'on' ) {
	nanosoft_define_style( '.footer-widgets', nanosoft_background_styles(
		(array) nanosoft_option( 'footer__widgets__background' )
	) );
	nanosoft_define_style( '.footer-widgets', (array) nanosoft_option( 'footer__widgets__padding' ) );
	nanosoft_define_style( '.footer-widgets .widget', (array) nanosoft_option( 'footer__widgets__margin' ) );
}

// Footer copyright
if ( nanosoft_option( 'footer__copyright' ) == 'on' ) {
	nanosoft_define_style( '.site-footer .footer-copyright', nanosoft_border_styles(
		(array) nanosoft_option( 'footer__copyright__border' )
	) );
	nanosoft_define_style( '.site-footer .footer-copyright', nanosoft_background_styles(
		(array) nanosoft_option( 'footer__copyright__background' )
	) );
	nanosoft_define_style( '.site-footer .footer-copyright', (array) nanosoft_option( 'footer__copyright__padding' ) );
}


/**
 * Projects
 */
if ( is_post_type_archive( 'nproject' ) ||
	 is_tax( 'nproject-category' ) ||
	 is_tax( 'nproject-tag' ) ||
	 is_page_template( 'tmpl/template-projects.php' ) ) {

	$grid_spacing = abs( (int)nanosoft_option( 'projects__gridGutter' ) );
	
	nanosoft_define_style( '.content-inner[data-grid] .project', array(
		'padding-left'  => sprintf( '%fpx', $grid_spacing/2 ),
		'padding-right' => sprintf( '%fpx', $grid_spacing/2 ),
		'margin-bottom' => sprintf( '%dpx', $grid_spacing )
	) );

	nanosoft_define_style( '.projects .content-inner[data-grid]', array(
		'margin-left'  => sprintf( '%dpx', -$grid_spacing/2 ),
		'margin-right' => sprintf( '%dpx', -$grid_spacing/2 )
	) );
}

/**
 * Shop
 */
if ( function_exists( 'is_woocommerce' ) && is_woocommerce() ) {
	$grid_spacing = abs( (int)nanosoft_option( 'shop__gridGutter' ) );
	
	nanosoft_define_style( '.content-inner.products[data-grid] .product,.content-inner.products[data-grid-normal] .product', array(
		'padding-left'  => sprintf( '%fpx', $grid_spacing/2 ),
		'padding-right' => sprintf( '%fpx', $grid_spacing/2 ),
		'margin-bottom' => sprintf( '%dpx', $grid_spacing )
	) );

	nanosoft_define_style( '.content-inner.products[data-grid],.content-inner.products[data-grid-normal]', array(
		'margin-left'  => sprintf( '%dpx', -$grid_spacing/2 ),
		'margin-right' => sprintf( '%dpx', -$grid_spacing/2 )
	) );
}

/**
 * Blog
 */
$grid_spacing = abs( (int)nanosoft_option( 'blog__archive__gridGutter' ) );
	
nanosoft_define_style( '.content-inner[data-grid] .post, .content-inner[data-grid-normal] .post', array(
	'padding-left'  => sprintf( '%fpx', $grid_spacing/2 ),
	'padding-right' => sprintf( '%fpx', $grid_spacing/2 ),
	'margin-bottom' => sprintf( '%dpx', $grid_spacing )
) );

nanosoft_define_style( '.content-inner[data-grid], .content-inner[data-grid-normal]', array(
	'margin-left'  => sprintf( '%dpx', -$grid_spacing/2 ),
	'margin-right' => sprintf( '%dpx', -$grid_spacing/2 )
) );

/**
 * Loading screen
 */
$loading_screen_enabled = nanosoft_option( 'global__misc__loading' );

if ( $loading_screen_enabled === 'off' ) {
	nanosoft_define_style( 'body:not(.is-loaded):after, body:not(.is-loaded):before', array(
		'content' => 'none !important'
	) );
}

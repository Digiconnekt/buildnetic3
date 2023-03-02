<?php
defined( 'ABSPATH' ) or die();


/**
 * Register the required plugins for this theme.
 *
 * This function is hooked into tgmpa_init, which is fired within the
 * TGM_Plugin_Activation class constructor.
 *
 * @return  void
 */
function nanosoft_register_requirement_plugins() {
	/*
	 * Array of plugin arrays. Required keys are name and slug.
	 * If the source is NOT from the .org repo, then source is also required.
	 */
	$plugins = array(
		array(
			'name'    => 'Shortcodes by LineThemes',
			'slug'    => 'line-shortcodes',
			'source'  => 'http://demo.linethemes.com/plugins.php?id=shortcodes'
		),

		array(
			'name'    => 'MailChimp for WordPress',
			'slug'    => 'mailchimp-for-wp'
		),

		array(
			'name'    => 'Image Hotspot',
			'slug'    => 'devvn-image-hotspot'
		),

		array(
			'name'    => 'Widget CSS Classes',
			'slug'    => 'widget-css-classes'
		),

		array(
			'name'    => 'WP Video Lightbox',
			'slug'    => 'wp-video-lightbox'
		),

		array(
			'name'    => 'Q2W3 Fixed Widget',
			'slug'    => 'q2w3-fixed-widget'
		),

		array(
			'name'    => 'Animated Headline',
			'slug'    => 'animated-headline'
		),

		array(
			'name'    => 'Page scroll to id',
			'slug'    => 'page-scroll-to-id'
		),

		array(
			'name'   => 'Advanced Custom Fields PRO',
			'slug'   => 'advanced-custom-fields-pro',
			'source'  => 'http://demo.linethemes.com/plugins.php?id=acf'
		),

		array(
			'name'   => 'WPBakery Visual Composer',
			'slug'   => 'js_composer',
			'source' => 'http://demo.linethemes.com/plugins.php?id=js_composer'
		),

		array(
			'name'   => 'Revolution Slider',
			'slug'   => 'revslider',
			'source' => 'http://demo.linethemes.com/plugins.php?id=revslider'
		),

		array(
			'name'   => 'nProjects By LineThemes',
			'slug'   => 'nprojects',
			'source' => 'http://demo.linethemes.com/plugins.php?id=nprojects'
		),

		array(
			'name' => 'Contact Form 7',
			'slug' => 'contact-form-7'
		),

		array(
			'slug' => 'breadcrumb-navxt',
			'name' => 'Breadcrumb NavXT'
		)
	);

	tgmpa( $plugins, array(
		'id'           => 'tgmpa',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'parent_slug'  => 'themes.php',            // Parent menu slug.
		'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => ''
	) );
}
add_action( 'tgmpa_register', 'nanosoft_register_requirement_plugins' );

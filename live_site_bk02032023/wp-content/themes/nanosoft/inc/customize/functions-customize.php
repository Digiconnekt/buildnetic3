<?php
defined( 'ABSPATH' ) or die();

add_action( 'customize_controls_enqueue_scripts', 'nanosoft_customize_enqueue_assets' );
add_action( 'customize_register', 'nanosoft_customize_register' );
add_action( 'after_switch_theme', 'nanosoft_update_default_settings' );

function nanosoft_update_default_settings() {
	$options_file = get_theme_file_path( 'admin/options.json' );

	if ( nanosoft_initialize_filesystem_api() ) {
		global $wp_filesystem;

		if ( $options = json_decode( $wp_filesystem->get_contents( $options_file ), true ) ) {
			$existing_options = get_theme_mods();

			if ( isset( $options['mods'] ) && is_array( $options['mods'] ) ) {
				$options = $options['mods'];
			}

			unset(
				$options['mods'],
				$options['nav_menu_locations'],
				$options[0]
			);

			$options['logoDefault__logo']       = array( 'url' => get_theme_file_uri( 'assets/img/logo.png' ) );
			$options['logoDefault__logoRetina'] = array( 'url' => get_theme_file_uri( 'assets/img/logo@2x.png' ) );
			$options['logoDark__logo']       = array( 'url'    => get_theme_file_uri( 'assets/img/logo_sticky.png' ) );
			$options['logoDark__logoRetina'] = array( 'url'    => get_theme_file_uri( 'assets/img/logo_sticky@2x.png' ) );

			foreach ( $options as $key => $value ) {
				if ( ! isset( $existing_options[ $key ] ) ) {
					set_theme_mod( $key, $value );
				}
			}
		}
	}
}


/**
 * Enqueue the needed assets for the theme customize
 * 
 * @return  void
 */
function nanosoft_customize_enqueue_assets() {
	wp_enqueue_style( 'nanosoft-customize' );
	wp_enqueue_script( 'nanosoft-options' );
	wp_localize_script( 'nanosoft-options', '_nanosoftfonts', nanosoft_google_fonts() );
	wp_localize_script( 'nanosoft-options', '_nanosofticons', nanosoft_icons() );
}

function nanosoft_customize_register( $wp_customize ) {
	nanosoft_customize_containers( $wp_customize );
	nanosoft_customize_settings( $wp_customize );
	nanosoft_customize_controls( $wp_customize );
}


/**
 * Register the theme customize panels
 * 
 * @param   WP_Customize_Manager  $wp_customize  The theme customize manager object
 * @return  void
 */
function nanosoft_customize_containers( $wp_customize ) {
	require_once NANOSOFT_PATH . 'inc/customize/class-customize-panel.php';
	require_once NANOSOFT_PATH . 'inc/customize/class-customize-section.php';

	$containers = apply_filters( 'nanosoft_customize_containers', array() );
	$container_classes = array(
		'panel'   => 'NanoSoft_Customize_Panel',
		'section' => 'NanoSoft_Customize_Section'
	);

	$wp_customize->register_panel_type( 'NanoSoft_Customize_Panel' );
	$wp_customize->register_section_type( 'NanoSoft_Customize_Section' );

	$count = 1;

	foreach ( $containers as $id => $params ) {
		if ( isset( $params['type'] ) && isset( $container_classes[ $params['type'] ] ) ) {
			$class = $container_classes[ $params['type'] ];
			$type  = $params['type'];
			$params['priority'] = $count++;

			unset( $params['type'] );
			$wp_customize->{"add_{$type}"}( new $class( $wp_customize, $id, $params ) );
		}
	}
}


/**
 * This action will retrieve all settings of the theme
 * and register it into the theme customize
 * 
 * @param   WP_Customize_Manager  $wp_customize  Theme customize object
 * @return  void
 */
function nanosoft_customize_settings( $wp_customize ) {
	// Apply the filter to retrieving the customize
	// settings
	$settings = apply_filters( 'nanosoft_customize_settings', array() );

	// Walking through each setting and register it
	// into the theme customize manager
	foreach ( $settings as $index => $setting ) {
		$wp_customize->add_setting( $index, array_merge( array(
			'default'           => '',
			'transport'         => 'refresh',
			'sanitize_callback' => 'nanosoft_customize_setting_sanitize' 
		), $setting ) );
	}
}


function nanosoft_customize_setting_sanitize( $data ) {
	return $data;
}


/**
 * This action will retrieve all options definition of the theme
 * and register it into the theme customize
 * 
 * @param   WP_Customize_Manager  $wp_customize  Theme customize object
 * @return  void
 */
function nanosoft_customize_controls( $wp_customize ) {
	require_once NANOSOFT_PATH . 'inc/customize/class-customize-control.php';
	require_once NANOSOFT_PATH . 'inc/customize/functions-customize-helpers.php';

	$controls = apply_filters( 'nanosoft_customize_controls', array() );
	$count = 0;

	foreach ( $controls as $id => $params ) {
		$default = '';
		$params['priority'] = $count++;

		if ( isset( $params['default'] ) )    $default = $params['default'];
		if ( !isset( $params['settings'] ) )  $params['settings'] = $id;
		if ( !isset( $params['transport'] ) ) $params['transport'] = 'refresh';

		$classname = explode( '-', $params['type'] );
		$classname = array_map( 'ucfirst', $classname );
		$params['classname'] = sprintf( 'NanoSoft_Options_%s', join( '', $classname ) );
		unset( $params['type'] );

		if ( class_exists( $params['classname'] ) ) {
			if ( $wp_customize->get_setting( $params['settings'] ) == null ) {
				// Register setting for this control
				$wp_customize->add_setting( $params['settings'], array(
					'default'           => $default,
					'transport'         => $params['transport'],
					'sanitize_callback' => 'nanosoft_customize_setting_sanitize'
				) );
			}

			$wp_customize->add_control( new NanoSoft_Customize_Control( $wp_customize, $id, $params ) );
		}
	}
}

require_once NANOSOFT_PATH . 'inc/customize/functions-customize-helpers.php';
require_once NANOSOFT_PATH . 'inc/customize/functions-customize-global.php';
require_once NANOSOFT_PATH . 'inc/customize/functions-customize-header.php';
require_once NANOSOFT_PATH . 'inc/customize/functions-customize-footer.php';
require_once NANOSOFT_PATH . 'inc/customize/functions-customize-blog.php';
require_once NANOSOFT_PATH . 'inc/customize/functions-customize-projects.php';
require_once NANOSOFT_PATH . 'inc/customize/functions-customize-elements.php';
require_once NANOSOFT_PATH . 'inc/customize/functions-customize-shop.php';

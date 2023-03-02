<?php
defined( 'ABSPATH' ) or die();

/**
 * Add an selector with the attributes into the
 * inline styles data
 * 
 * @param   string  $selector    The style selector
 * @param   array   $attributes  The style attributes
 * 
 * @return  void
 */
function nanosoft_define_style( $selector, array $attributes ) {
	global $_theme_styles_definition;

	if ( ! is_array( $_theme_styles_definition ) ) $_theme_styles_definition = array();
	if ( ! isset( $_theme_styles_definition[$selector] ) ) $_theme_styles_definition[$selector] = array();

	$_theme_styles_definition[$selector] = array_merge(
		$_theme_styles_definition[$selector], $attributes
	);
}


/**
 * Generate the CSS from the inline styles data and
 * return it
 * 
 * @return  string
 */
function nanosoft_styles() {
	global $_theme_styles_definition;

	if ( ! is_array( $_theme_styles_definition ) ) $_theme_styles_definition = array();

	$result = array();

	// Loop through each item to build the
	// inline styles
	foreach ( $_theme_styles_definition as $selector => $attributes ) {
		$attributes_content = array();

		foreach ( $attributes as $name => $value ) {
			if ( ! empty( $value ) ) {
				$attributes_content[] = sprintf( '%s: %s', $name, $value );
			}
		}

		if ( ! empty( $attributes_content ) ) {
			$result[] = sprintf( '%s { %s; }', $selector, join( ";", $attributes_content ) );
		}
	}

	return join( "\r\n", $result );
}


function nanosoft_scheme_styles() {
	global $wp_filesystem;
	
	if ( nanosoft_initialize_filesystem_api() ) {
		$content = $wp_filesystem->get_contents( NANOSOFT_PATH . 'assets/less/_color.less' );
		$colors  = nanosoft_option( 'global__typography__scheme' );

		return preg_replace_callback( '/@([a-zA-Z0-9\-_]+)/i', function( $matches ) use( $colors ) {
			return isset( $colors[ $matches[1] ] ) ? $colors[ $matches[1] ] : '#000';
		}, $content );
	}
}


/**
 * Generate an array for declare typography styles.
 * 
 * @param   array   $options  Typography options
 * @param   string  $unit     Unit for font-size
 * 
 * @return  array
 */
function nanosoft_typography_styles( array $options ) {
	$styles = array();

	if ( isset( $options['family'] ) && $family = nanosoft_parse_font( $options['family'] ) ) {
		$styles['font-family'] = $family;
	}

	if ( isset( $options['style'] ) && preg_match( '/^([0-9\.]+)?([a-z]+)?$/i', $options['style'], $matches ) ) {
		if ( ! empty( $matches[1] ) ) {
			$styles['font-weight'] = $matches[1];
		}

		if ( ! empty( $matches[2] ) ) {
			$styles['font-style'] = $matches[2] == 'regular' ? 'normal' : $matches[2];
		}
	}

	if ( isset( $options['color'] ) ) {
		$styles['color'] = $options['color'];
	}

	if ( isset( $options['textStyle'] ) ) {
		$styles['text-transform'] = $options['textStyle'];
	}

	$properties = array(
		'size'          => 'font-size',
		'lineHeight'    => 'line-height',
		'letterSpacing' => 'letter-spacing'
	);

	foreach ( $properties as $key => $property ) {
		if ( isset( $options[ $key ] ) && preg_match( '/^([0-9\.\-]+)\s*(px|em|rem|%)?$/i', $options[ $key ], $matches ) ) {
			if ( ! isset( $matches[2] ) ) {
				$matches[2] = 'px';
			}
			
			$styles[ $property ] = "{$matches[1]}{$matches[2]}";
		}
	}

	return $styles;
}


function nanosoft_parse_font( $font, $enqueue = true ) {
	global $_required_google_fonts;

	if ( empty( $_required_google_fonts ) ) {
		$_required_google_fonts = array();
	}

	if ( isset( $_required_google_fonts[ $font ] ) ) {
		return $_required_google_fonts[ $font ]['family'];
	}

	if ( strpos( $font, '/' ) !== false ) {
		list( $family, $variants, $subsets ) = explode( '/', $font );

		$subsets = explode( ',', $subsets );
		$family  = urldecode( $family );

		$_required_google_fonts[ $font ] = array(
			'family'   => $family,
			'subsets'  => $subsets,
			'variants' => $variants
		);

		return $_required_google_fonts[ $font ]['family'];
	}

	return false;
}


/**
 * Generate attributes for the background options
 * 
 * @param   array   $options  Background options
 * @return  array
 */
function nanosoft_background_styles( $options ) {
	$styles = array();

	if ( ! empty( $options['color'] ) ) {
		$styles['background-color'] = $options['color'];
	}

	if ( ! empty( $options['image'] ) && ! empty( $options['image']['url'] ) ) {
		// Update the custom position offset
		if ( $options['position'] == 'custom' ) {
			$options['position'] = "{$options['x']} {$options['y']}";
		}

		// Custom background size
		if ( $options['size'] == 'fit-width' ) $options['size'] = '100% auto';
		elseif ( $options['size'] == 'fit-height' ) $options['size'] = 'auto 100%';
		elseif ( $options['size'] == 'stretch' ) $options['size'] = '100% 100%';

		$styles['background-image'] = sprintf( 'url(%s)', $options['image']['url'] );

		if ( ! empty( $options['position'] ) ) {
			$styles['background-position'] = $options['position'];
		}
		if ( ! empty( $options['repeat'] ) ) {
			$styles['background-repeat'] = $options['repeat'];
		}
		if ( ! empty( $options['size'] ) ) {
			$styles['background-size'] = $options['size'];

			if ( $options['size'] == 'custom' ) {
				$styles['background-size'] = "{$options['width']} {$options['height']}";
			}
		}
		if ( ! empty( $options['attachment'] ) ) {
			$styles['background-attachment'] = $options['attachment'];
		}
	}

	return $styles;
}


/**
 * Generate attributes for the border options
 * 
 * @param   array   $options  The border options
 * @return  array
 */
function nanosoft_border_styles( $options ) {
	if ( isset( $options['simplify'] ) && $options['simplify'] == true ) {
		return array(
			'border' => sprintf( '%s %s %s',
				$options['all']['size'],
				$options['all']['style'],
				$options['all']['color']
			)
		);
	}

	$properties = array();
	foreach ( array( 'top', 'right', 'bottom', 'left' ) as $border_side ) {
		$properties["border-{$border_side}"] = sprintf( '%s %s %s',
			$options[ $border_side ]['size'],
			$options[ $border_side ]['style'],
			$options[ $border_side ]['color']
		);
	}

	return $properties;
}


/**
 * The helper function to convert color from
 * hex format to RGB with alpha
 * 
 * @param   string  $color  The hex color
 * @param   float   $alpha  The alpha value
 * 
 * @return  string
 */
function nanosoft_color_to_rgba( $color, $alpha ) {
	if ( strpos( $color, '#' ) !== false )
		$color = str_replace( '#', '', $color );

	if ( strlen( $color ) == 3 ) {
		$r = hexdec( substr( $color, 0, 1 ) . substr( $color, 0, 1 ) );
		$g = hexdec( substr( $color, 1, 1 ) . substr( $color, 1, 1 ) );
		$b = hexdec( substr( $color, 2, 1 ) . substr( $color, 2, 1 ) );
	}
	else {
		$r = hexdec( substr( $color, 0, 2 ) );
		$g = hexdec( substr( $color, 2, 2 ) );
		$b = hexdec( substr( $color, 4, 2 ) );
	}

	return sprintf( 'rgba(%d, %d, %d, %f)', $r, $g, $b, $alpha );
}

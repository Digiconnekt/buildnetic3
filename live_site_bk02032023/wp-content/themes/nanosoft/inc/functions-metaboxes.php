<?php
add_filter( 'acf/prepare_field/name=sidebar', function ( $field ) {
	global $wp_registered_sidebars;

	$custom_sidebars = (array) get_option( wp_get_theme()->Template . '_sidebars' );
	$custom_sidebars = array_merge($wp_registered_sidebars, $custom_sidebars);
	
	$field['choices'] = array();
	$field['choices']['default'] = esc_html__( 'Use Theme Default', 'nanosoft' );

	foreach ($custom_sidebars as $id => $sidebar) {
		$field['choices'][$id] = $sidebar['name'];
	}

	return $field;
} );


function nanosoft_override_sidebar_position( $position ) {
	$object = get_post();

	if ( is_singular() && isset( $object->ID ) && function_exists( 'get_field' ) ) {
		$sidebar_position = get_field('sidebarPosition', $object->ID);

		if ( ! empty( $sidebar_position ) && $sidebar_position != 'default' ) {
			$position = $sidebar_position;
		}
	}

	return $position;
}
add_filter( 'nanosoft_sidebar_position', 'nanosoft_override_sidebar_position', 99 );


function nanosoft_override_sidebar_id( $id ) {
	$object = get_queried_object();

	if ( isset( $object->ID ) && function_exists( 'get_field' ) ) {
		$sidebar = get_field('sidebar', $object->ID);
		
		if ( ! empty( $sidebar ) && $sidebar != 'default' ) {
			$id = $sidebar;
		}
	}

	return $id;
}
add_filter( 'nanosoft_sidebar_id', 'nanosoft_override_sidebar_id', 99 );

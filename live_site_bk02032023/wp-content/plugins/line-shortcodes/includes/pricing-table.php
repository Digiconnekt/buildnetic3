<?php
if ( ! defined( 'PTP_PLUGIN_PATH' ) ) {
    return;
}

global $features_metabox;

$atts = shortcode_atts( array(
	'id'    => '',
	'class' => '',
	'css'   => ''
), $atts );

// check if id exists
if ( $atts['id'] != '' ) {
	$translate = array(
		1 => 'one-column',
		2 => 'two-columns',
		3 => 'three-columns',
		4 => 'four-columns',
		5 => 'five-columns',
		6 => 'six-columns',
		7 => 'seven-columns',
		8 => 'eight-columns',
		9 => 'nine-columns',
		10 => 'ten-columns',
		11 => 'eleven-columns',
		12 => 'twelve-columns'
	);

	$meta  = get_post_meta( $atts['id'], $features_metabox->get_the_id(), TRUE );
	$class = array( 'pricing-table', $translate[count( $meta['column'] )], $atts['class'] );

	// check if our pricing table contains any content
	if ( ! empty( $meta ) ) {
        // if the table contains content, call the function that generates the table
		echo sprintf( '<div class="%s">%s</div>',
            esc_attr( implode( ' ', $class ) ),
            do_shortcode( hnk_shortcode_pricing_table_generator( $atts['id'] ) ) );
	}
}
else {
	echo __( 'Pricing table does not exist. Please check your shortcode.', 'hnk' );
}
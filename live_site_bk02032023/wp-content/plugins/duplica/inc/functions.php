<?php
use Codexpert\Duplica\Helper;

if( !function_exists( 'get_plugin_data' ) ) {
	require_once( ABSPATH . 'wp-admin/includes/plugin.php' );
}

/**
 * Gets the site's base URL
 * 
 * @uses get_bloginfo()
 * 
 * @return string $url the site URL
 */
if( ! function_exists( 'duplica_site_url' ) ) :
function duplica_site_url() {
	$url = get_bloginfo( 'url' );

	return $url;
}
endif;

if( ! function_exists( 'duplica_post_types' ) ) :
function duplica_post_types() {
    $items = [
        'post'  => __( 'Post', 'duplica' ),
        'page'  => __( 'Page', 'duplica' ),
    ];

    if( function_exists( 'WC' ) ) {
        $items['product']   = __( 'Product', 'duplica' );
    }

    if( function_exists( 'EDD' ) ) {
        $items['download']  = __( 'Download', 'duplica' );
    }

    return apply_filters( 'duplica-post_types', $items );
}
endif;

if( ! function_exists( 'duplica_enabled_post_types' ) ) :
function duplica_enabled_post_types() {
    $cpts = duplica_post_types();
    $items = [];
    foreach ( Helper::get_option( 'duplica_basic', 'enabled_items', [] ) as $item ) {
        if( post_type_exists( $item ) ) {
            $items[ $item ] = $cpts[ $item ];
        }
    }
    
    return $items;
}
endif;

if( ! function_exists( 'duplica_statuses' ) ) :
function duplica_statuses() {
    $statuses = [
        'inherit'   => __( 'Inherit from original', 'duplica' ),
        'draft'     => __( 'Draft', 'duplica' ),
        'pending'   => __( 'Pending', 'duplica' ),
        'publish'   => __( 'Published', 'duplica' ),
    ];

    return $statuses;
}
endif;

if( ! function_exists( 'duplica_redirections' ) ) :
function duplica_redirections() {
    $statuses = [
        'off'       => __( 'No redirection', 'duplica' ),
        'edit'      => __( 'Edit duplicated post', 'duplica' ),
        'view'      => __( 'View duplicated post', 'duplica' ),
    ];

    return $statuses;
}
endif;
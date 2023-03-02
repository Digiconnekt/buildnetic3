<?php
defined( 'ABSPATH' ) or die();


add_filter( 'nprojects/shortcode_template', 'nanosoft_project_shortcode_template' );
add_filter( 'nprojects/shortcode_parameters', 'nanosoft_project_shortcode_params' );
add_filter( 'line-shortcode-unsupported', 'nanosoft_project_disable_justify_shortcode' );
add_filter( 'the_excerpt', 'nanosoft_project_auto_excerpt', 99 );

add_action( 'after_setup_theme', function () {
	if ( class_exists( 'nProjects_Admin' ) ) {
		$admin = nProjects_Admin::instance();
		
		remove_action( 'admin_enqueue_scripts', array( $admin, 'enqueue_styles' ) );
		remove_action( 'admin_enqueue_scripts', array( $admin, 'enqueue_scripts' ) );
		remove_action( 'save_post', array( $admin, 'update_media_items' ) );
	}
} );

function nanosoft_project_auto_excerpt( $excerpt ) {
	if ( nanosoft_current_post_type() == 'nproject' && mb_strlen( $excerpt ) > nanosoft_option( 'projects__autoExcerptLength' ) ) {
		$excerpt = mb_substr( $excerpt, 0, nanosoft_option( 'projects__autoExcerptLength' ) );
	}

	return $excerpt;
}

function nanosoft_project_disable_justify_shortcode( $unsupported ) {
	$unsupported[] = 'projects_justify';
	return $unsupported;
}


function nanosoft_projects_body_class( $classes ) {
	$classes[] = sprintf( 'projects projects-%s', nanosoft_option( 'projects__displayMode' ) );

	return $classes;
}

function nanosoft_projects_sidebar() {
	return nanosoft_option( 'projects__sidebar' );
}

function nanosoft_projects_sidebar_position() {
	return nanosoft_option( 'projects__sidebarPosition' );
}


function nanosoft_single_project_body_classes( $classes ) {
	$gallery_position = get_field( 'projectGalleryPosition' );
	
	if ( $gallery_position === 'default' ) {
		$gallery_position = nanosoft_option( 'project__galleryPosition' );
	}

	$classes[] = sprintf( 'project-gallery-%s', $gallery_position );
	
	return $classes;
}

function nanosoft_single_project_sidebar() {
	return nanosoft_option( 'project__sidebar' );
}

function nanosoft_single_project_sidebar_position() {
	return nanosoft_option( 'project__sidebarPosition' );
}


function nanosoft_project_media_item( $item, $size = 'full', $crop = false, $lightbox = true ) {
	$attachment_image = nanosoft_get_image_resized( [
		'image_id' => is_array( $item ) ? $item['id'] : $item,
		'size'     => $size,
		'crop'     => $crop
	] );

	$attachment_image_src = $attachment_image['thumbnail_raw'][0];
	$attachment_image_large = $attachment_image['large'];

	if ( $lightbox ) {
		printf( '<a href="%s" rel="prettyPhoto[gallery]"><img src="%s" /></a>',
			$attachment_image_src,
			$attachment_image_large[0]
		);
	}
	else {
		echo wp_kses_post( $attachment_image['thumbnail'] );
	}
}



function nanosoft_project_shortcode_params( $params ) {
	// General tab
	$params[] = array(
		'type'        => 'textfield',
		'heading'     => esc_html__( 'Widget Title', 'nanosoft' ),
		'description' => esc_html__( 'Enter text which will be used as widget title. Leave blank if no title is needed.', 'nanosoft' ),
		'param_name'  => 'widget_title'
	);

	$params[] = array(
		'type'        => 'textfield',
		'heading'     => esc_html__( 'Categories', 'nanosoft' ),
		'description' => esc_html__( 'If you want to narrow output, enter category names here. Note: Only listed categories will be included.', 'nanosoft' ),
		'param_name'  => 'categories'
	);

	$params[] = array(
		'type'        => 'textfield',
		'heading'     => esc_html__( 'Tags', 'nanosoft' ),
		'description' => esc_html__( 'If you want to narrow output, enter tag names here. Note: Only listed tags will be included.', 'nanosoft' ),
		'param_name'  => 'tags'
	);

	$params[] = array(
		'type'       => 'dropdown',
		'heading'    => esc_html__( 'Display Mode', 'nanosoft' ),
		'param_name' => 'mode',
		'std'        => 3,
		'value'      => array(
			esc_html__( 'Grid Classic', 'nanosoft' )   => 'grid',
			esc_html__( 'Grid Masonry', 'nanosoft' )   => 'masonry',
			esc_html__( 'Grid Alt', 'nanosoft' ) => 'grid-alt'
		)
	);

	$params[] = array(
		'type'        => 'dropdown',
		'heading'     => esc_html__( 'Columns', 'nanosoft' ),
		'description' => esc_html__( 'The number of columns will be shown', 'nanosoft' ),
		'param_name'  => 'columns',
		'std'         => 3,
		'value'       => array(
			esc_html__( '1 Column', 'nanosoft' )  => 1,
			esc_html__( '2 Columns', 'nanosoft' ) => 2,
			esc_html__( '3 Columns', 'nanosoft' ) => 3,
			esc_html__( '4 Columns', 'nanosoft' ) => 4,
			esc_html__( '5 Columns', 'nanosoft' ) => 5,
		)
	);

	$params[] = array(
		'type'       => 'dropdown',
		'heading'    => esc_html__( 'Show Items Filter', 'nanosoft' ),
		'param_name' => 'filter',
		'std'        => 'yes',
		'value'      => array(
			esc_html__( 'Yes', 'nanosoft' ) => 'yes',
			esc_html__( 'No', 'nanosoft' )  => 'no'
		)
	);

	$params[] = array(
		'type'       => 'dropdown',
		'heading'    => esc_html__( 'Filter By', 'nanosoft' ),
		'param_name' => 'filter_by',
		'std'        => 'category',
		'value'      => array(
			esc_html__( 'Categories', 'nanosoft' ) => 'category',
			esc_html__( 'Tags', 'nanosoft' )       => 'tag'
		)
	);

	$params[] = array(
		'type'        => 'textfield',
		'heading'     => esc_html__( 'Limit', 'nanosoft' ),
		'description' => esc_html__( 'The number of posts will be shown', 'nanosoft' ),
		'param_name'  => 'limit',
		'value'       => 9
	);

	$params[] = array(
		'type'        => 'textfield',
		'heading'     => esc_html__( 'Offset', 'nanosoft' ),
		'description' => esc_html__( 'The number of posts to pass over', 'nanosoft' ),
		'param_name'  => 'offset',
		'value'       => 0
	);

	$params[] = array(
		'type'        => 'textfield',
		'heading'     => esc_html__( 'Thumbnail Size', 'nanosoft' ),
		'description' => esc_html__( 'Enter image size. Example: "thumbnail", "medium", "large", "full" or other sizes defined by current theme. Alternatively enter image size in pixels: 200x100 (Width x Height). Leave empty to use "thumbnail" size.', 'nanosoft' ),
		'param_name'  => 'thumbnail_size'
	);

	$params[] = array(
		'type'       => 'dropdown',
		'heading'    => esc_html__( 'Show Read More', 'nanosoft' ),
		'param_name' => 'readmore',
		'std'        => 'yes',
		'value'      => array(
			esc_html__( 'Yes', 'nanosoft' ) => 'yes',
			esc_html__( 'No', 'nanosoft' )  => 'no'
		)
	);
	$params[] = array(
		'type'        => 'textfield',
		'heading'     => esc_html__( 'Readmore Text', 'nanosoft' ),
		'param_name'  => 'readmore_text'
	);

	$params[] = array(
		'type'        => 'dropdown',
		'heading'     => esc_html__( 'Order By', 'nanosoft' ),
		'description' => esc_html__( 'Select how to sort retrieved posts.', 'nanosoft' ),
		'param_name'  => 'order',
		'std'         => 'date',
		'value'       => array(
			esc_html__( 'Date', 'nanosoft' )          => 'date',
			esc_html__( 'ID', 'nanosoft' )            => 'ID',
			esc_html__( 'Author', 'nanosoft' )        => 'author',
			esc_html__( 'Title', 'nanosoft' )         => 'title',
			esc_html__( 'Modified', 'nanosoft' )      => 'modified',
			esc_html__( 'Random', 'nanosoft' )        => 'rand',
			esc_html__( 'Comment count', 'nanosoft' ) => 'comment_count',
			esc_html__( 'Menu order', 'nanosoft' )    => 'menu_order'
		)
	);

	$params[] = array(
		'type'        => 'dropdown',
		'heading'     => esc_html__( 'Order Direction', 'nanosoft' ),
		'description' => esc_html__( 'Designates the ascending or descending order.', 'nanosoft' ),
		'param_name'  => 'direction',
		'std'         => 'DESC',
		'value'       => array(
			esc_html__( 'Ascending', 'nanosoft' )          => 'ASC',
			esc_html__( 'Descending', 'nanosoft' )            => 'DESC'
		)
	);

	$params[] = array(
		'type'       => 'dropdown',
		'heading'    => esc_html__( 'Enable equals height?', 'nanosoft' ),
		'param_name' => 'equals',
		'std'        => 'no',
		'value'      => array(
			esc_html__( 'Yes', 'nanosoft' ) => 'yes',
			esc_html__( 'No', 'nanosoft' )  => 'no'
		)
	);

	$params[] = array(
		'type'        => 'textfield',
		'heading'     => esc_html__( 'Extra Class', 'nanosoft' ),
		'description' => esc_html__( 'If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'nanosoft' ),
		'param_name'  => 'class'
	);

	$params[] = array(
		'type' => 'css_editor',
		'param_name' => 'css',
		'group' => esc_html__( 'Design Options', 'nanosoft' )
	);

	return $params;
}



function nanosoft_project_shortcode_template() {
	return 'tmpl/shortcodes/projects.php';
}

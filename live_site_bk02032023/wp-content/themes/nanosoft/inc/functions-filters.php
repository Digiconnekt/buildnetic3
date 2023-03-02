<?php
defined( 'ABSPATH' ) or die();


// A filter for adding custom classes
// into the body element
add_filter( 'nanosoft_body_class', 'nanosoft_body_classes', 5 );


// A filter to generate the post excerpt
// automatically
add_filter( 'nanosoft_the_content', 'nanosoft_auto_excerpt', 5 );


add_filter( 'line-shortcodes/posts-params', 'nanosoft_custom_posts_shortcode_params' );


/**
 * Return the classes name for the body tag
 * in array format
 * 
 * @param   array  $classes  An existing classes
 * @return  array
 * @since   1.0.0
 */
function nanosoft_body_classes( $classes ) {
	$classes[] = sprintf( 'layout-%s', nanosoft_option( 'global__layout__mode' ) );
	$classes[] = sprintf( 'sidebar-%s', nanosoft_sidebar_position() );

	return $classes;
}


function nanosoft_auto_excerpt( $content ) {
	if ( nanosoft_option( 'blog__archive__autoExcerpt' ) === 'on' ) {
		$length = (int) nanosoft_option( 'blog__archive__excerptLength' );
		$post   = get_post();

		if ( ! preg_match( '/<!--more(.*?)?-->/', $post->post_content ) ) {
			$content = strip_tags( strip_shortcodes( $content ) );
			$content = trim( $content );

			if ( strlen( $content ) > $length ) {
				$content = mb_substr( $content, 0, $length );
				$content.= '...';
			}

			return sprintf( '<p>%s</p>', $content );
		}
	}

	return $content;
}


function nanosoft_custom_posts_shortcode_params( $args ) {
	$args['params'] = array(
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Widget Title', 'nanosoft' ),
			'param_name'  => 'title',
			'description' => esc_html__( 'Enter text which will be used as widget title. Leave blank if no title is needed.', 'nanosoft' )
		),
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Category', 'nanosoft' ),
			'param_name'  => 'category',
			'description' => esc_html__( 'Enter the category\'s slug that will be used to filter posts', 'nanosoft' )
		),
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Tag', 'nanosoft' ),
			'param_name'  => 'tag',
			'description' => esc_html__( 'Enter the tag\'s slug that will be used to filter posts', 'nanosoft' )
		),
		array(
			'type'       => 'dropdown',
			'heading'    => esc_html__( 'Layout', 'nanosoft' ),
			'param_name' => 'layout',
			'value'      => array(
				esc_html__( 'Grid', 'nanosoft' ) => 'grid',
				esc_html__( 'List', 'nanosoft' ) => 'list'
			)
		),
		array(
			'type'        => 'dropdown',
			'heading'     => esc_html__( 'Grid Columns', 'nanosoft' ),
			'param_name'  => 'grid_columns',
			'description' => esc_html__( 'The number of columns for grid and grid masonry layout', 'nanosoft' ),
			'value'       => array(
				esc_html__( '2 Columns', 'nanosoft' ) => 2,
				esc_html__( '3 Columns', 'nanosoft' ) => 3,
				esc_html__( '4 Columns', 'nanosoft' ) => 4
			)
		),
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Thumbnail Size', 'nanosoft' ),
			'description' => esc_html__( 'Enter image size. Example: "thumbnail", "medium", "large", "full" or other sizes defined by current theme. Alternatively enter image size in pixels: 200x100 (Width x Height). Leave empty to use "thumbnail" size.', 'nanosoft' ),
			'param_name'  => 'thumbnail_size'
		),
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Limit', 'nanosoft' ),
			'param_name'  => 'limit',
			'description' => esc_html__( 'The number of posts will be shown', 'nanosoft' ),
			'value'       => 9
		),
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Offset', 'nanosoft' ),
			'param_name'  => 'offset',
			'description' => esc_html__( 'The number of posts to pass over', 'nanosoft' ),
			'value'       => 0
		),
		array(
			'type'       => 'dropdown',
			'heading'    => esc_html__( 'Icon For Posts', 'nanosoft' ),
			'param_name' => 'icon',
			'value'      => array(
				esc_html__( 'Post Thumbnail', 'nanosoft' ) => 'post-thumbnail',
				esc_html__( 'Post Date', 'nanosoft' ) => 'post-date'
			)
		),
		array(
			'type'       => 'checkbox',
			'heading'    => esc_html__( 'Hide Post Content', 'nanosoft' ),
			'param_name' => 'hide_content',
			'value'      => array(
				esc_html__( 'Yes, please', 'nanosoft' ) => 'yes'
			)
		),
		array(
			'type'       => 'textfield',
			'heading'    => esc_html__( 'Post Content Length', 'nanosoft' ),
			'param_name' => 'content_length',
			'value'      => 40
		),
		array(
			'type'       => 'checkbox',
			'heading'    => esc_html__( 'Hide Read More', 'nanosoft' ),
			'param_name' => 'hide_readmore',
			'value'      => array(
				esc_html__( 'Yes, please', 'nanosoft' ) => 'yes'
			)
		),
		array(
			'type'       => 'textfield',
			'heading'    => esc_html__( 'Read More Text', 'nanosoft' ),
			'param_name' => 'readmore_text',
			'value'      => esc_html__( 'Continue &rarr;', 'nanosoft' )
		),

		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Extra class name', 'nanosoft' ),
			'param_name'  => 'class',
			'description' => esc_html__( 'If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'nanosoft' )
		),

		array(
			'type'       => 'css_editor',
			'param_name' => 'css',
			'group'      => esc_html__( 'Design Options', 'nanosoft' )
		)
	);

	return $args;
}
<?php
/**
 * WARNING: This file is part of the UI-Pack plugin. DO NOT edit
 * this file under any circumstances.
 */
if ( ! defined( 'ABSPATH' ) )
	exit;

function line_iconpicker_params() {
	return apply_filters( 'line/iconpicker_params', array(
		array(
			'type' => 'dropdown',
			'heading' => __( 'Icon library', 'line-shortcodes' ),
			'value' => apply_filters( 'line/iconpicker_types_dropdown', array(
				__( 'Font Awesome', 'line-shortcodes' ) => 'fontawesome',
				__( 'Open Iconic', 'line-shortcodes' )  => 'openiconic',
				__( 'Typicons', 'line-shortcodes' )     => 'typicons',
				__( 'Entypo', 'line-shortcodes' )       => 'entypo',
				__( 'Linecons', 'line-shortcodes' )     => 'linecons',
				__( 'Mono Social', 'line-shortcodes' )  => 'monosocial',
				__( 'Custom Image', 'line-shortcodes' ) => 'image'
			) ),
			'admin_label' => true,
			'param_name' => 'type',
			'description' => __( 'Select icon library.', 'line-shortcodes' ),
			'std' => 'fontawesome'
		),
		array(
			'type' => 'iconpicker',
			'heading' => __( 'Icon', 'line-shortcodes' ),
			'param_name' => 'icon_fontawesome',
			'value' => 'fa fa-adjust', // default value to backend editor admin_label
			'settings' => array(
				'emptyIcon' => false,
				// default true, display an "EMPTY" icon?
				'iconsPerPage' => 4000,
				// default 100, how many icons per/page to display, we use (big number) to display all icons in single page
			),
			'dependency' => array(
				'element' => 'type',
				'value' => 'fontawesome',
			),
			'description' => __( 'Select icon from library.', 'line-shortcodes' ),
		),
		array(
			'type' => 'iconpicker',
			'heading' => __( 'Icon', 'line-shortcodes' ),
			'param_name' => 'icon_openiconic',
			'value' => 'vc-oi vc-oi-dial', // default value to backend editor admin_label
			'settings' => array(
				'emptyIcon' => false, // default true, display an "EMPTY" icon?
				'type' => 'openiconic',
				'iconsPerPage' => 4000, // default 100, how many icons per/page to display
			),
			'dependency' => array(
				'element' => 'type',
				'value' => 'openiconic',
			),
			'description' => __( 'Select icon from library.', 'line-shortcodes' ),
		),
		array(
			'type' => 'iconpicker',
			'heading' => __( 'Icon', 'line-shortcodes' ),
			'param_name' => 'icon_typicons',
			'value' => 'typcn typcn-adjust-brightness', // default value to backend editor admin_label
			'settings' => array(
				'emptyIcon' => false, // default true, display an "EMPTY" icon?
				'type' => 'typicons',
				'iconsPerPage' => 4000, // default 100, how many icons per/page to display
			),
			'dependency' => array(
				'element' => 'type',
				'value' => 'typicons',
			),
			'description' => __( 'Select icon from library.', 'line-shortcodes' ),
		),
		array(
			'type' => 'iconpicker',
			'heading' => __( 'Icon', 'line-shortcodes' ),
			'param_name' => 'icon_entypo',
			'value' => 'entypo-icon entypo-icon-note', // default value to backend editor admin_label
			'settings' => array(
				'emptyIcon' => false, // default true, display an "EMPTY" icon?
				'type' => 'entypo',
				'iconsPerPage' => 4000, // default 100, how many icons per/page to display
			),
			'dependency' => array(
				'element' => 'type',
				'value' => 'entypo',
			),
		),
		array(
			'type' => 'iconpicker',
			'heading' => __( 'Icon', 'line-shortcodes' ),
			'param_name' => 'icon_linecons',
			'value' => 'vc_li vc_li-heart', // default value to backend editor admin_label
			'settings' => array(
				'emptyIcon' => false, // default true, display an "EMPTY" icon?
				'type' => 'linecons',
				'iconsPerPage' => 4000, // default 100, how many icons per/page to display
			),
			'dependency' => array(
				'element' => 'type',
				'value' => 'linecons',
			),
			'description' => __( 'Select icon from library.', 'line-shortcodes' ),
		),
		array(
			'type' => 'iconpicker',
			'heading' => __( 'Icon', 'line-shortcodes' ),
			'param_name' => 'icon_monosocial',
			'value' => 'vc-mono vc-mono-fivehundredpx', // default value to backend editor admin_label
			'settings' => array(
				'emptyIcon' => false, // default true, display an "EMPTY" icon?
				'type' => 'monosocial',
				'iconsPerPage' => 4000, // default 100, how many icons per/page to display
			),
			'dependency' => array(
				'element' => 'type',
				'value' => 'monosocial',
			),
			'description' => __( 'Select icon from library.', 'line-shortcodes' ),
		),
	) );
}

/**
 * An action to define containers class
 * for the specific elements
 */
add_action( 'vc_before_init', function() {
	if ( ! class_exists( 'WPBakeryShortCode_Elements_Carousel' ) ) {
		/**
		 * Extended class to integrate elements carousel with
		 * visual composer
		 */
		class WPBakeryShortCode_Elements_Carousel extends WPBakeryShortCodesContainer {
	    }
	}

	if ( ! class_exists( 'WPBakeryShortCode_IconList' ) ) {
	    /**
		 * Extended class to integrate iconlist with
		 * visual composer
		 */
	    class WPBakeryShortCode_IconList extends WPBakeryShortCodesContainer {
	    }
	}

	if ( ! class_exists( 'WPBakeryShortCode_ScrollSlider' ) ) {
	    /**
		 * Extended class to integrate iconlist with
		 * visual composer
		 */
	    class WPBakeryShortCode_ScrollSlider extends WPBakeryShortCodesContainer {
	    }
	}
} );

/**
 * An action to map the iconlist shortcode
 * into the Visual Compsoer
 */
add_action( 'vc_before_init', function() {
	/**
	 * Map the scrollslider slider shortcode
	 */
	vc_map( array(
		'name'                    => __( 'LineThemes: Scroll Slider', 'line-shortcodes' ),
		'base'                    => 'scrollslider',
		'as_parent'               => array( 'only' => 'scrollslider_item' ), // Use only|except attributes to limit child shortcodes (separate multiple values with comma)
		'content_element'         => true,
		'show_settings_on_create' => false,
		'category'                => __( 'LineThemes', 'line-shortcodes' ),
		'params'                  => array(
		),
		'js_view'                 => 'VcColumnView'
	) );

	vc_map( array(
		'base'        => 'scrollslider_item',
		'name'        => __( 'LineThemes: Scroll Slider Item', 'line-shortcodes' ),
		'icon'        => 'linethemes-shortcode',
		'category'    => __( 'LineThemes', 'line-shortcodes' ),
		'as_child'    => array( 'only' => 'scrollslider' ),
		'params'      => array(
			array(
				'type' => 'attach_image',
				'heading' => __( 'List Image', 'line-shortcodes' ),
				'param_name' => 'image',
				'description' => __( 'Default image for all items in the list', 'line-shortcodes' )
			),
			array(
				'type' => 'textfield',
				'heading' => __( 'Title', 'line-shortcodes' ),
				'param_name' => 'title'
			),
			array(
				'type' => 'textarea',
				'heading' => __( 'Content', 'line-shortcodes' ),
				'param_name' => 'content'
			),
			array(
				'type' => 'textfield',
				'heading' => __( 'Slide URL', 'line-shortcodes' ),
				'param_name' => 'link'
			),
			array(
				'type' => 'textfield',
				'heading' => __( 'Extra Classes', 'line-shortcodes' ),
				'param_name' => 'class'
			)
		)
	) );
} );


add_action( 'vc_before_init', function() {
	$unsupported_tags = apply_filters( 'line-shortcode-unsupported', array() );

	if ( in_array( 'projects_justify', $unsupported_tags ) ) {
		return;
	}

	$params = array();
	$params[] = array(
		'type'        => 'textfield',
		'heading'     => __( 'Categories', 'line-shortcodes' ),
		'description' => __( 'If you want to narrow output, enter category slugs here. Note: Only listed categories will be included.', 'line-shortcodes' ),
		'param_name'  => 'categories'
	);

	$params[] = array(
		'type'        => 'textfield',
		'heading'     => __( 'Tags', 'line-shortcodes' ),
		'description' => __( 'If you want to narrow output, enter tag slugs here. Note: Only listed tags will be included.', 'line-shortcodes' ),
		'param_name'  => 'tags'
	);

	$params[] = array(
		'type'        => 'textfield',
		'heading'     => __( 'Exclude', 'line-shortcodes' ),
		'description' => __( 'If you want to exclude the posts, enter post slugs here. Note: Only listed tags will be included.', 'line-shortcodes' ),
		'param_name'  => 'exclude'
	);

	$params[] = array(
		'type'        => 'textfield',
		'heading'     => __( 'Limit', 'line-shortcodes' ),
		'description' => __( 'The number of posts will be shown', 'line-shortcodes' ),
		'param_name'  => 'limit',
		'value'       => 9
	);

	$params[] = array(
		'type'        => 'textfield',
		'heading'     => __( 'Offset', 'line-shortcodes' ),
		'description' => __( 'The number of posts to pass over', 'line-shortcodes' ),
		'param_name'  => 'offset',
		'value'       => 0
	);

	$params[] = array(
		'type'        => 'dropdown',
		'heading'     => __( 'Order By', 'line-shortcodes' ),
		'description' => __( 'Select how to sort retrieved posts.', 'line-shortcodes' ),
		'param_name'  => 'order_by',
		'std'         => 'date',
		'value'       => array(
			__( 'Date', 'line-shortcodes' )          => 'date',
			__( 'ID', 'line-shortcodes' )            => 'ID',
			__( 'Author', 'line-shortcodes' )        => 'author',
			__( 'Title', 'line-shortcodes' )         => 'title',
			__( 'Modified', 'line-shortcodes' )      => 'modified',
			__( 'Random', 'line-shortcodes' )        => 'rand',
			__( 'Comment count', 'line-shortcodes' ) => 'comment_count',
			__( 'Menu order', 'line-shortcodes' )    => 'menu_order'
		)
	);

	$params[] = array(
		'type'        => 'dropdown',
		'heading'     => __( 'Order Direction', 'line-shortcodes' ),
		'description' => __( 'Designates the ascending or descending order.', 'line-shortcodes' ),
		'param_name'  => 'order_direction',
		'std'         => 'DESC',
		'value'       => array(
			__( 'Ascending', 'line-shortcodes' )  => 'ASC',
			__( 'Descending', 'line-shortcodes' ) => 'DESC'
		)
	);

	$params[] = array(
		'type'        => 'textfield',
		'heading'     => __( 'Extra Class', 'line-shortcodes' ),
		'description' => __( 'If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'line-shortcodes' ),
		'param_name'  => 'class'
	);

	$params[] = array(
		'type' => 'css_editor',
		'param_name' => 'css',
		'group' => __( 'Design Options', 'line-shortcodes' )
	);

	vc_map( array(
		'base'        => 'projects_justify',
		'name'        => __( 'LineThemes: Projects Justified', 'line-shortcodes' ),
		'category'    => __( 'LineThemes', 'line-shortcodes' ),
		'params'      => $params
	) );
} );


add_action( 'vc_before_init', function() {
	if ( ! defined( 'PTP_PLUGIN_PATH' ) ) {
	    return;
	}

	$tables = array();
	$query  = new WP_Query( array( 'post_type' => 'easy-pricing-table', 'nopaging' => true ) );

	while ( $query->have_posts() ) {
		$query->next_post();
		$tables[get_the_title( $query->post->ID )] = $query->post->ID;
	}

	vc_map( array(
		'base'        => 'pricing_table',
		'name'        => __( 'LineThemes: Pricing Table', 'line-shortcodes' ),
		'icon'        => 'anycar-shortcode',
		'category'    => __( 'LineThemes', 'line-shortcodes' ),
		'params'      => array(
			array(
				'type'       => 'dropdown',
				'heading'    => __( 'Table ID', 'line-shortcodes' ),
				'param_name' => 'id',
				'value'      => $tables
			),

			array(
				'type'        => 'textfield',
				'heading'     => __( 'Extra class name', 'line-shortcodes' ),
				'param_name'  => 'class',
				'description' => __( 'If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'line-shortcodes' )
			),

			array(
				'type'       => 'css_editor',
				'param_name' => 'css',
				'group'      => __( 'Design Options', 'line-shortcodes' )
			)
		)
	) );
} );


/**
 * An action to map the team member shortcode
 * into the Visual Compsoer
 */
add_action( 'vc_before_init', function() {
	/**
	 * Map the single member item
	 */
	vc_map( array(
		'base'        => 'member',
		'name'        => __( 'LineThemes: Team Member', 'line-shortcodes' ),
		'icon'        => 'linethemes-shortcode',
		'category'    => __( 'LineThemes', 'line-shortcodes' ),
		'params'      => array(
			array(
				'type'        => 'textfield',
				'heading'     => __( 'Name', 'line-shortcodes' ),
				'param_name'  => 'name'
			),

			array(
				'type'       => 'attach_image',
				'heading'    => __( 'Image', 'line-shortcodes' ),
				'param_name' => 'image'
			),

			array(
				'type'             => 'textfield',
				'heading'          => __( 'Subtitle', 'line-shortcodes' ),
				'param_name'       => 'subtitle',
			),

			array(
				'type'       => 'textarea_html',
				'heading'    => __( 'Content', 'line-shortcodes' ),
				'param_name' => 'content'
			),

			array(
				'type'       => 'textfield',
				'heading'    => __( 'Facebook URL', 'line-shortcodes' ),
				'param_name' => 'facebook'
			),

			array(
				'type'       => 'textfield',
				'heading'    => __( 'Twitter URL', 'line-shortcodes' ),
				'param_name' => 'twitter'
			),

			array(
				'type'       => 'textfield',
				'heading'    => __( 'LinkedIn URL', 'line-shortcodes' ),
				'param_name' => 'linkedin'
			),

			array(
				'type'       => 'textfield',
				'heading'    => __( 'Google+ URL', 'line-shortcodes' ),
				'param_name' => 'google'
			),

			array(
				'type'       => 'textfield',
				'heading'    => __( 'Extra Class', 'line-shortcodes' ),
				'param_name' => 'class'
			),

			array(
				'type'       => 'checkbox',
				'heading'    => __( 'Show Social Icons On Hover', 'line-shortcodes' ),
				'param_name' => 'hover_show_icons',
				'value'      => array(
					__( 'Yes, please', 'line-shortcodes' ) => 'yes'
				)
			),

			array(
				'type' => 'css_editor',
				'param_name' => 'css',
				'group' => __( 'Design Options', 'line-shortcodes' )
			)
		)
	) );
} );


/**
 * An action to map the testimonial shortcode
 * into the Visual Compsoer
 */
add_action( 'vc_before_init', function() {
	vc_map( array(
		'base'        => 'testimonial',
		'name'        => __( 'LineThemes: Testimonial', 'line-shortcodes' ),
		'icon'        => 'linethemes-shortcode',
		'category'    => __( 'LineThemes', 'line-shortcodes' ),
		'params'      => array(
			array(
				'type'        => 'textfield',
				'heading'     => __( 'Name', 'line-shortcodes' ),
				'param_name'  => 'name'
			),

			array(
				'type'       => 'attach_image',
				'heading'    => __( 'Image', 'line-shortcodes' ),
				'param_name' => 'image'
			),

			array(
				'type'             => 'textfield',
				'heading'          => __( 'Subtitle', 'line-shortcodes' ),
				'param_name'       => 'subtitle',
			),

			array(
				'type'             => 'textfield',
				'heading'          => __( 'Company', 'line-shortcodes' ),
				'param_name'       => 'company',
			),

			array(
				'type'             => 'textfield',
				'heading'          => __( 'Link', 'line-shortcodes' ),
				'param_name'       => 'link'
			),

			array(
				'type'       => 'textarea_html',
				'heading'    => __( 'Content', 'line-shortcodes' ),
				'param_name' => 'content'
			),

			array(
				'type'       => 'textfield',
				'heading'    => __( 'Extra Class', 'line-shortcodes' ),
				'param_name' => 'class'
			),

			array(
				'type' => 'css_editor',
				'param_name' => 'css',
				'group' => __( 'Design Options', 'line-shortcodes' )
			)
		)
	) );
} );


/**
 * An action to map the blog posts shortcode
 * into the Visual Compsoer
 */
add_action( 'vc_before_init', function() {
	vc_map( apply_filters( 'line-shortcodes/posts-params', array(
		'name'     => __( 'LineThemes: Blog Posts', 'line-shortcodes' ),
		'base'     => 'posts',
		'category' => __( 'LineThemes', 'line-shortcodes' ),
		'params'   => array(
			array(
				'type'        => 'textfield',
				'heading'     => __( 'Widget Title', 'anycar' ),
				'param_name'  => 'title',
				'description' => __( 'Enter text which will be used as widget title. Leave blank if no title is needed.', 'anycar' )
			),
			array(
				'type'        => 'textfield',
				'heading'     => __( 'Category', 'anycar' ),
				'param_name'  => 'category',
				'description' => __( 'Enter the category\'s slug that will be used to filter posts', 'anycar' )
			),
			array(
				'type'        => 'textfield',
				'heading'     => __( 'Tag', 'anycar' ),
				'param_name'  => 'tag',
				'description' => __( 'Enter the tag\'s slug that will be used to filter posts', 'anycar' )
			),
			array(
				'type'       => 'dropdown',
				'heading'    => __( 'Layout', 'anycar' ),
				'param_name' => 'layout',
				'value'      => array(
					__( 'Grid', 'anycar' ) => 'grid',
					__( 'List', 'anycar' ) => 'list'
				)
			),
			array(
				'type'        => 'dropdown',
				'heading'     => __( 'Grid Columns', 'anycar' ),
				'param_name'  => 'grid_columns',
				'description' => __( 'The number of columns for grid and grid masonry layout', 'anycar' ),
				'value'       => array(
					__( '2 Columns', 'anycar' ) => 2,
					__( '3 Columns', 'anycar' ) => 3,
					__( '4 Columns', 'anycar' ) => 4
				)
			),
			array(
				'type'        => 'textfield',
				'heading'     => __( 'Limit', 'anycar' ),
				'param_name'  => 'limit',
				'description' => __( 'The number of posts will be shown', 'anycar' ),
				'value'       => 9
			),
			array(
				'type'        => 'textfield',
				'heading'     => __( 'Offset', 'anycar' ),
				'param_name'  => 'offset',
				'description' => __( 'The number of posts to pass over', 'anycar' ),
				'value'       => 0
			),
			array(
				'type'       => 'dropdown',
				'heading'    => __( 'Icon For Posts', 'anycar' ),
				'param_name' => 'icon',
				'value'      => array(
					__( 'Post Thumbnail', 'anycar' ) => 'post-thumbnail',
					__( 'Post Date', 'anycar' ) => 'post-date'
				)
			),
			array(
				'type'       => 'checkbox',
				'heading'    => __( 'Hide Post Content', 'anycar' ),
				'param_name' => 'hide_content',
				'value'      => array(
					__( 'Yes, please', 'anycar' ) => 'yes'
				)
			),
			array(
				'type'       => 'textfield',
				'heading'    => __( 'Post Content Length', 'anycar' ),
				'param_name' => 'content_length',
				'value'      => 40
			),
			array(
				'type'       => 'checkbox',
				'heading'    => __( 'Hide Read More', 'anycar' ),
				'param_name' => 'hide_readmore',
				'value'      => array(
					__( 'Yes, please', 'anycar' ) => 'yes'
				)
			),
			array(
				'type'       => 'textfield',
				'heading'    => __( 'Read More Text', 'anycar' ),
				'param_name' => 'readmore_text',
				'value'      => __( 'Continue &rarr;', 'anycar' )
			),

			array(
				'type'        => 'textfield',
				'heading'     => __( 'Extra class name', 'anycar' ),
				'param_name'  => 'class',
				'description' => __( 'If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'anycar' )
			),

			array(
				'type'       => 'css_editor',
				'param_name' => 'css',
				'group'      => __( 'Design Options', 'anycar' )
			)
		)
	) ) );
} );


/**
 * An action to map the iconlist item shortcode
 * into the Visual Compsoer
 */
add_action( 'vc_before_init', function() {
	$params = line_iconpicker_params();
	$params = array_merge( $params, array(
		array(
			'type' => 'attach_image',
			'heading' => __( 'Custom Image', 'line-shortcodes' ),
			'param_name' => 'icon_image',
			'description' => __( 'Default image for all items in the list', 'line-shortcodes' ),
			'dependency' => array(
				'element' => 'type',
				'value' => 'image',
			)
		),
		array(
			'type' => 'textarea_html',
			'heading' => __( 'Content', 'line-shortcodes' ),
			'param_name' => 'content'
		),
		array(
			'type' => 'textfield',
			'heading' => __( 'Extra class name', 'line-shortcodes' ),
			'param_name' => 'class',
			'description' => __( 'If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'line-shortcodes' )
		),

		array(
			'type' => 'css_editor',
			'param_name' => 'css',
			'group' => __( 'Design Options', 'line-shortcodes' )
		)
	) );

	vc_map( array(
		'base'        => 'iconlist_item',
		'name'        => __( 'LineThemes: Icon List Item', 'line-shortcodes' ),
		'icon'        => 'linethemes-shortcode',
		'category'    => __( 'LineThemes', 'line-shortcodes' ),
		'as_child'    => array( 'only' => 'iconlist' ),
		'params'      => $params
	) );
} );


/**
 * An action to map the iconlist shortcode
 * into the Visual Compsoer
 */
add_action( 'vc_before_init', function() {
	/**
	 * Map the iconlist slider shortcode
	 */
	vc_map( array(
		'name'                    => __( 'LineThemes: Icon List', 'line-shortcodes' ),
		'base'                    => 'iconlist',
		'as_parent'               => array( 'only' => 'iconlist_item' ), // Use only|except attributes to limit child shortcodes (separate multiple values with comma)
		'content_element'         => true,
		'show_settings_on_create' => false,
		'category' => __( 'LineThemes', 'line-shortcodes' ),
		'params'   => array_merge( line_iconpicker_params(), array(
			array(
				'type' => 'dropdown',
				'heading' => __( 'Icon Size', 'line-shortcodes' ),
				'param_name' => 'icon_size',
				'value' => array(
					__( 'Mini', 'line-shortcodes' ) => 'mini',
					__( 'Small', 'line-shortcodes' ) => 'small',
					__( 'Medium', 'line-shortcodes' ) => 'medium',
					__( 'Large', 'line-shortcodes' ) => 'large',
					__( 'X Large', 'line-shortcodes' ) => 'xlarge'
				),
				'std' => 'medium'
			),
			array(
				'type' => 'attach_image',
				'heading' => __( 'Custom Image', 'line-shortcodes' ),
				'param_name' => 'icon_image',
				'description' => __( 'Default image for all items in the list', 'line-shortcodes' ),
				'dependency' => array(
					'element' => 'type',
					'value' => 'image',
				),
			),
			array(
				'type' => 'textfield',
				'heading' => __( 'Extra class name', 'line-shortcodes' ),
				'param_name' => 'class',
				'description' => __( 'If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'line-shortcodes' )
			),

			array(
				'type' => 'css_editor',
				'param_name' => 'css',
				'group' => __( 'Design Options', 'line-shortcodes' )
			)
		) ),
		'js_view' => 'VcColumnView'
	) );
} );


/**
 * An action to map the iconbox shortcode
 * into the Visual Compsoer
 */
add_action( 'vc_before_init', function() {
	vc_map( array(
		'base'        => 'iconbox',
		'name'        => __( 'LineThemes: Icon Box', 'line-shortcodes' ),
		'icon'        => 'linethemes-shortcode',
		'category'    => __( 'LineThemes', 'line-shortcodes' ),
		'params'      => array_merge( line_iconpicker_params(), array(
			array(
				'type'        => 'attach_image',
				'param_name'  => 'icon_image',
				'heading'     => __( 'Custom Image', 'line-shortcodes' ),
				'description' => __( 'Select image to replace the icon', 'line-shortcodes' ),
				'dependency'  => array(
					'element' => 'type',
					'value'   => 'image'
				)
			),

			// Title
			array(
				'type'             => 'textfield',
				'heading'          => __( 'Title', 'line-shortcodes' ),
				'param_name'       => 'title',
				'edit_field_class' => 'vc_col-md-6 vc_column'
			),

			array(
				'type'       => 'dropdown',
				'heading'    => __( 'Title Element Tag', 'line-shortcodes' ),
				'param_name' => 'tag',
				'value'      => array(
					'h2' => 'h2',
					'h3' => 'h3',
					'h4' => 'h4',
					'h5' => 'h5',
					'h6' => 'h6'
				)
			),

			array(
				'type'       => 'textarea_html',
				'heading'    => __( 'Content', 'line-shortcodes' ),
				'param_name' => 'content'
			),

			array(
				'type' => 'textfield',
				'heading' => __( 'Read More Link', 'line-shortcodes' ),
				'param_name' => 'link',
				'description' => __( 'Enter custom url for read more button', 'line-shortcodes' )
			),

			array(
				'type' => 'textfield',
				'heading' => __( 'Read More Text', 'line-shortcodes' ),
				'param_name' => 'text',
				'description' => __( 'Enter custom text for read more button', 'line-shortcodes' ),
				'value' => __( 'more...', 'line-shortcodes' )
			),

			array(
				'type'       => 'textfield',
				'heading'    => __( 'Extra Class', 'line-shortcodes' ),
				'param_name' => 'class'
			),

			array(
				'type' => 'css_editor',
				'param_name' => 'css',
				'group' => __( 'Design Options', 'line-shortcodes' )
			)
		) )
	) );
} );


/**
 * An action to map the counter shortcode
 * into the Visual Compsoer
 */
add_action( 'vc_before_init', function() {
	vc_map( array(
		'base'        => 'counter',
		'name'        => __( 'LineThemes: Counter', 'line-shortcodes' ),
		'icon'        => 'linethemes-shortcode',
		'category'    => __( 'LineThemes', 'line-shortcodes' ),
		'params'      => array_merge( line_iconpicker_params(), array(
			array(
				'type'       => 'attach_image',
				'heading'    => __( 'Custom Image', 'line-shortcodes' ),
				'param_name' => 'icon_image',
				'description' => __( 'Select image to replace the icon', 'line-shortcodes' ),
				'dependency'  => array(
					'element' => 'type',
					'value'   => 'image'
				)
			),

			array(
				'type'             => 'textfield',
				'heading'          => __( 'Title', 'line-shortcodes' ),
				'param_name'       => 'title'
			),

			array(
				'type'             => 'textfield',
				'heading'          => __( 'Value', 'line-shortcodes' ),
				'param_name'       => 'value',
				'value'            => 0
			),

			array(
				'type'             => 'textfield',
				'heading'          => __( 'Prefix', 'line-shortcodes' ),
				'param_name'       => 'prefix'
			),

			array(
				'type'             => 'textfield',
				'heading'          => __( 'Suffix', 'line-shortcodes' ),
				'param_name'       => 'suffix'
			),

			array(
				'type'             => 'textfield',
				'heading'          => __( 'Duration', 'line-shortcodes' ),
				'param_name'       => 'duration',
				'value'            => 1000
			),

			array(
				'type'       => 'textfield',
				'heading'    => __( 'Extra Class', 'line-shortcodes' ),
				'param_name' => 'class'
			),

			array(
				'type' => 'css_editor',
				'param_name' => 'css',
				'group' => __( 'Design Options', 'line-shortcodes' )
			)
		) )
	) );
} );


/**
 * An action to map the posts carousel shortcode
 * into the Visual Compsoer
 */
add_action( 'admin_init', function() {
	$terms = get_terms( 'category' );
	$values = array();

	if ( is_array( $terms ) ) {
		foreach ( $terms as $term )
			$values[] = array( 'label' => $term->name, 'value' => $term->term_id );
	}

	vc_map( array(
		'name'          => __( 'LineThemes: Posts Carousel', 'line-shortcodes' ),
		'base'          => 'posts_carousel',
		'icon'          => 'themekit-shortcode',
		'category'      => 'LineThemes',
		'params'        => array(
			// General tab
			array(
				'type'        => 'textfield',
				'heading'     => __( 'Widget Title', 'line-shortcodes' ),
				'description' => __( 'Enter text which will be used as widget title. Leave blank if no title is needed.', 'line-shortcodes' ),
				'param_name'  => 'widget_title'
			),

			array(
				'type'        => 'autocomplete',
				'heading'     => __( 'Categories', 'line-shortcodes' ),
				'description' => __( 'If you want to narrow output, enter category names here. Note: Only listed categories will be included.', 'line-shortcodes' ),
				'param_name'  => 'categories',
				'settings'    => array(
					'multiple'       => true,
					'sortable'       => true,
					'min_length'     => 1,
					'no_hide'        => true,
					'unique_values'  => true,
					'display_inline' => true,
					'values'         => $values
				)
			),

			array(
				'type'        => 'textfield',
				'heading'     => __( 'Tags', 'line-shortcodes' ),
				'description' => __( 'If you want to narrow output, enter tag names here. Note: Only listed tags will be included.', 'line-shortcodes' ),
				'param_name'  => 'tags'
			),

			array(
				'type'        => 'textfield',
				'heading'     => __( 'Limit', 'line-shortcodes' ),
				'description' => __( 'The number of posts will be shown', 'line-shortcodes' ),
				'param_name'  => 'limit',
				'value'       => 9
			),

			array(
				'type'        => 'textfield',
				'heading'     => __( 'Offset', 'line-shortcodes' ),
				'description' => __( 'The number of posts to pass over', 'line-shortcodes' ),
				'param_name'  => 'offset',
				'value'       => 0
			),

			array(
				'type'        => 'textfield',
				'heading'     => __( 'Thumbnail Size', 'line-shortcodes' ),
				'description' => __( 'Enter image size. Example: "thumbnail", "medium", "large", "full" or other sizes defined by current theme. Alternatively enter image size in pixels: 200x100 (Width x Height). Leave empty to use "thumbnail" size.', 'line-shortcodes' ),
				'param_name'  => 'thumbnail_size'
			),

			array(
				'type'        => 'dropdown',
				'heading'     => __( 'Show Post Date?', 'line-shortcodes' ),
				'description' => __( 'Select "Yes" to display post date in the carousel', 'line-shortcodes' ),
				'param_name'  => 'show_date',
				'std'         => 'no',
				'value'       => array(
					__( 'Yes', 'line-shortcodes' ) => 'yes',
					__( 'No', 'line-shortcodes' ) => 'no'
				)
			),

			array(
				'type'        => 'textfield',
				'heading'     => __( 'Date format', 'line-shortcodes' ),
				'description' => __( 'Enter custom date format that will be shown', 'line-shortcodes' ),
				'param_name'  => 'date_format',
				'dependency'  => array(
					'element' => 'show_date',
					'value'   => 'yes'
				),
				'value'       => ''
			),

			array(
				'type'        => 'dropdown',
				'heading'     => __( 'Show Post Excerpt?', 'line-shortcodes' ),
				'description' => __( 'Select "Yes" to display post excerpt in the carousel', 'line-shortcodes' ),
				'param_name'  => 'show_excerpt',
				'std'         => 'no',
				'value'       => array(
					__( 'Yes', 'line-shortcodes' ) => 'yes',
					__( 'No', 'line-shortcodes' ) => 'no'
				)
			),

			array(
				'type'        => 'dropdown',
				'heading'     => __( 'Auto Post Excerpt?', 'line-shortcodes' ),
				'description' => __( 'Select "Yes" to display automatic generate post excerpt', 'line-shortcodes' ),
				'param_name'  => 'auto_excerpt',
				'dependency'  => array(
					'element' => 'show_excerpt',
					'value'   => 'yes'
				),
				'std'         => 'no',
				'value'       => array(
					__( 'Yes', 'line-shortcodes' ) => 'yes',
					__( 'No', 'line-shortcodes' ) => 'no'
				)
			),

			array(
				'type'        => 'textfield',
				'heading'     => __( 'Post excerpt length', 'line-shortcodes' ),
				'description' => __( 'Enter the custom length of post excerpt that will be generated', 'line-shortcodes' ),
				'param_name'  => 'excerpt_length',
				'dependency'  => array(
					'element' => 'auto_excerpt',
					'value'   => 'yes'
				),
				'value'       => 200
			),

			array(
				'type'       => 'dropdown',
				'heading'    => __( 'Read more', 'line-shortcodes' ),
				'description' => __( 'Select "YES" to show the read more link', 'line-shortcodes' ),
				'param_name' => 'readmore',
				'std'        => 'yes',
				'value'      => array(
					__( 'Yes', 'line-shortcodes' ) => 'yes',
					__( 'No', 'line-shortcodes' ) => 'no'
				)
			),

			array(
				'type'        => 'textfield',
				'heading'     => __( 'Read more text', 'line-shortcodes' ),
				'description' => __( 'Custom text for the read more link', 'line-shortcodes' ),
				'param_name'  => 'readmore_text',
				'dependency'  => array(
					'element' => 'readmore',
					'value'   => 'yes'
				),
				'value'       => __( 'Read More', 'line-shortcodes' )
			),

			array(
				'type'        => 'dropdown',
				'heading'     => __( 'Order By', 'line-shortcodes' ),
				'description' => __( 'Select how to sort retrieved posts.', 'line-shortcodes' ),
				'param_name'  => 'order',
				'std'         => 'date',
				'value'       => array(
					__( 'Date', 'line-shortcodes' )          => 'date',
					__( 'ID', 'line-shortcodes' )            => 'ID',
					__( 'Author', 'line-shortcodes' )        => 'author',
					__( 'Title', 'line-shortcodes' )         => 'title',
					__( 'Modified', 'line-shortcodes' )      => 'modified',
					__( 'Random', 'line-shortcodes' )        => 'rand',
					__( 'Comment count', 'line-shortcodes' ) => 'comment_count',
					__( 'Menu order', 'line-shortcodes' )    => 'menu_order'
				)
			),

			array(
				'type'        => 'dropdown',
				'heading'     => __( 'Order Direction', 'line-shortcodes' ),
				'description' => __( 'Designates the ascending or descending order.', 'line-shortcodes' ),
				'param_name'  => 'direction',
				'std'         => 'DESC',
				'value'       => array(
					__( 'Ascending', 'line-shortcodes' )          => 'ASC',
					__( 'Descending', 'line-shortcodes' )            => 'DESC'
				)
			),

			array(
				'type'        => 'textfield',
				'heading'     => __( 'Extra Class', 'line-shortcodes' ),
				'description' => __( 'If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'line-shortcodes' ),
				'param_name'  => 'class'
			),

			// Carousel Options
			array(
				'type'        => 'dropdown',
				'heading'     => __( 'Show Items', 'line-shortcodes' ),
				'description' => __( 'The maximum amount of items displayed at a time', 'line-shortcodes' ),
				'param_name'  => 'items',
				'group'       => __( 'Carousel Options', 'line-shortcodes' ),
				'value'       => array_combine( range( 1, 6 ), range( 1, 6 ) ),
				'std'         => 4
			),

			array(
				'type'       => 'dropdown',
				'heading'    => __( 'Autoplay?', 'line-shortcodes' ),
				'param_name' => 'autoplay',
				'group'      => __( 'Carousel Options', 'line-shortcodes' ),
				'std'        => 'yes',
				'value'      => array(
					__( 'Yes', 'line-shortcodes' ) => 'yes',
					__( 'No', 'line-shortcodes' ) => 'no'
				)
			),

			array(
				'type'        => 'dropdown',
				'heading'     => __( 'Stop On Hover?', 'line-shortcodes' ),
				'description' => __( 'Rewind speed in milliseconds', 'line-shortcodes' ),
				'param_name'  => 'hover_stop',
				'group'       => __( 'Carousel Options', 'line-shortcodes' ),
				'std'         => 'yes',
				'value'       => array(
					__( 'Yes', 'line-shortcodes' ) => 'yes',
					__( 'No', 'line-shortcodes' ) => 'no'
				)
			),

			array(
				'type'        => 'checkbox',
				'heading'     => __( 'Slider Controls', 'line-shortcodes' ),
				'param_name'  => 'controls',
				'group'       => __( 'Carousel Options', 'line-shortcodes' ),
				'std'         => 'navigation,rewind-navigation,pagination,pagination-numbers',
				'value'       => array(
					__( 'Navigation', 'line-shortcodes' )         => 'navigation',
					__( 'Rewind Navigation', 'line-shortcodes' )  => 'rewind-navigation',
					__( 'Pagination', 'line-shortcodes' )         => 'pagination',
					__( 'Pagination Numbers', 'line-shortcodes' ) => 'pagination-numbers'
				)
			),

			array(
				'type'       => 'dropdown',
				'heading'    => __( 'Scroll Per Page?', 'line-shortcodes' ),
				'param_name' => 'scroll_page',
				'group'       => __( 'Carousel Options', 'line-shortcodes' ),
				'std'        => 'yes',
				'value'      => array(
					__( 'Yes', 'line-shortcodes' ) => 'yes',
					__( 'No', 'line-shortcodes' ) => 'no'
				)
			),

			array(
				'type'       => 'dropdown',
				'heading'    => __( 'Allow Mouse Drag?', 'line-shortcodes' ),
				'param_name' => 'mouse_drag',
				'group'      => __( 'Carousel Options', 'line-shortcodes' ),
				'std'        => 'yes',
				'value'      => array(
					__( 'Yes', 'line-shortcodes' ) => 'yes',
					__( 'No', 'line-shortcodes' ) => 'no'
				)
			),

			array(
				'type'       => 'dropdown',
				'heading'    => __( 'Allow Touch Drag?', 'line-shortcodes' ),
				'param_name' => 'touch_drag',
				'group'      => __( 'Carousel Options', 'line-shortcodes' ),
				'std'        => 'yes',
				'value'      => array(
					__( 'Yes', 'line-shortcodes' ) => 'yes',
					__( 'No', 'line-shortcodes' ) => 'no'
				)
			),

			// Speed
			array(
				'type'        => 'textfield',
				'heading'     => __( 'Autoplay Speed', 'line-shortcodes' ),
				'description' => __( 'Autoplay speed in milliseconds', 'line-shortcodes' ),
				'param_name'  => 'autoplay_speed',
				'group'       => __( 'Speed', 'line-shortcodes' ),
				'value'       => 5000
			),

			array(
				'type'        => 'textfield',
				'heading'     => __( 'Slide Speed', 'line-shortcodes' ),
				'description' => __( 'Slide speed in milliseconds', 'line-shortcodes' ),
				'param_name'  => 'slide_speed',
				'group' => __( 'Speed', 'line-shortcodes' ),
				'value'       => 200
			),

			array(
				'type'        => 'textfield',
				'heading'     => __( 'Pagination Speed', 'line-shortcodes' ),
				'description' => __( 'Pagination speed in milliseconds', 'line-shortcodes' ),
				'param_name'  => 'pagination_speed',
				'group' => __( 'Speed', 'line-shortcodes' ),
				'value'       => 200
			),

			array(
				'type'        => 'textfield',
				'heading'     => __( 'Rewind Speed', 'line-shortcodes' ),
				'description' => __( 'Rewind speed in milliseconds', 'line-shortcodes' ),
				'param_name'  => 'rewind_speed',
				'group' => __( 'Speed', 'line-shortcodes' ),
				'value'       => 200
			),

			// Responsive
			array(
				'type'       => 'dropdown',
				'heading'    => __( 'Enable Responsive?', 'line-shortcodes' ),
				'param_name' => 'responsive',
				'group'      => __( 'Responsive', 'line-shortcodes' ),
				'std'        => 'yes',
				'value'      => array(
					__( 'Yes', 'line-shortcodes' ) => 'yes',
					__( 'No', 'line-shortcodes' ) => 'no'
				)
			),

			array(
				'type'        => 'dropdown',
				'heading'     => __( 'Items On Tablet', 'line-shortcodes' ),
				'description' => __( 'The maximum amount of items displayed at a time on tablet device', 'line-shortcodes' ),
				'param_name'  => 'tablet_items',
				'group'       => __( 'Responsive', 'line-shortcodes' ),
				'value'       => array_combine( range( 1, 6 ), range( 1, 6 ) ),
				'std'         => 2
			),

			array(
				'type'        => 'dropdown',
				'heading'     => __( 'Items On Mobile', 'line-shortcodes' ),
				'description' => __( 'The maximum amount of items displayed at a time on mobile device', 'line-shortcodes' ),
				'param_name'  => 'mobile_items',
				'group'       => __( 'Responsive', 'line-shortcodes' ),
				'value'       => array_combine( range( 1, 6 ), range( 1, 6 ) ),
				'std'         => 1
			),

			array(
				'type' => 'css_editor',
				'param_name' => 'css',
				'group' => __( 'Design Options', 'line-shortcodes' )
			)
		)
	) );
} );


/**
 * An actino to map the google maps shortcode
 * into the Visual Compsoer
 */
add_action( 'vc_before_init', function() {
	vc_map( array(
		'base'        => 'maps',
		'name'        => __( 'LineThemes: Google Maps', 'line-shortcodes' ),
		'icon'        => 'themekit-shortcode',
		'category'    => __( 'LineThemes', 'line-shortcodes' ),
		'params'      => array(
			array(
				'type'        => 'dropdown',
				'heading'     => __( 'Maps Type', 'line-shortcodes' ),
				'description' => __( 'Select the Maps type', 'line-shortcodes' ),
				'param_name'  => 'type',
				'value'       => array(
					'ROADMAP'   => 'roadmap',
					'SATELLITE' => 'satellite',
					'HYBRID'    => 'hybrid',
					'TERRAIN'   => 'terrain'
				)
			),

			array(
				'type'        => 'dropdown',
				'heading'     => __( 'Maps Style', 'line-shortcodes' ),
				'description' => __( 'Select style for the Maps', 'line-shortcodes' ),
				'param_name'  => 'style',
				'value'       => array(
					'Default'          => 'default',
					'Subtle Grayscale' => 'subtle-grayscale',
					'Pale Dawn'        => 'pale-dawn',
					'Blue Water'       => 'blue-warter',
					'Light Monochrome' => 'light-monochrome',
					'Shades of Gray'   => 'shades-of-gray'
				)
			),

			array(
				'type'        => 'textfield',
				'heading'     => __( 'Address', 'line-shortcodes' ),
				'param_name'  => 'address',
				'description' => sprintf( __( 'Enter you address that will show at the center of the Maps', 'line-shortcodes' ), 'http://fontawesome.io/icons/' )
			),

			array(
				'type'        => 'dropdown',
				'heading'     => __( 'Zoom Level', 'line-shortcodes' ),
				'param_name'  => 'zoomlevel',
				'description' => __( 'Select the default zoom level for the Maps', 'line-shortcodes' ),
				'value'       => array_combine( range( 1, 24 ), range( 1, 24 ) ),
				'std'         => 15
			),

			array(
				'type'        => 'dropdown',
				'heading'     => __( 'Enable Zoom On Mouse Scroll', 'line-shortcodes' ),
				'description' => __( 'If select "yes", the maps will zoom in/out when user scroll the mouse', 'line-shortcodes' ),
				'param_name'  => 'zoomable',
				'value'       => array(
					__( 'No' )  => 'no',
					__( 'Yes' ) => 'yes'
				)
			),

			array(
				'type'        => 'dropdown',
				'heading'     => __( 'Enable Draggable', 'line-shortcodes' ),
				'param_name'  => 'draggable',
				'value'       => array(
					__( 'No' )  => 'no',
					__( 'Yes' ) => 'yes'
				)
			),

			array(
				'type'        => 'dropdown',
				'heading'     => __( 'Show The Marker', 'line-shortcodes' ),
				'param_name'  => 'show_marker',
				'value'       => array(
					__( 'No' )  => 'no',
					__( 'Yes' ) => 'yes'
				)
			),

			array(
				'type'       => 'attach_image',
				'heading'    => esc_html__( 'Marker Image', 'line-shortcodes' ),
				'param_name' => 'marker'
			),

			array(
				'type'       => 'textfield',
				'heading'    => __( 'Height', 'line-shortcodes' ),
				'param_name' => 'height',
				'value'      => 300
			),

			array(
				'type'        => 'textarea',
				'heading'     => __( 'Locations', 'line-shortcodes' ),
				'description' => __( 'Enter you locations(one per line) that will show on the Maps', 'line-shortcodes' ),
				'param_name'  => 'content'
			)
		)
	) );
} );


/**
 * An action to map the image box shortcode
 * into the Visual Compsoer
 */
add_action( 'admin_init', function() {
	vc_map( array(
		'name'          => __( 'LineThemes: Image Box', 'line-shortcodes' ),
		'base'          => 'imagebox',
		'icon'          => 'themekit-shortcode',
		'category'      => 'LineThemes'
	) );

	vc_map_update( 'imagebox', array(
		'params'      => array(
			// Title
			array(
				'type'             => 'textfield',
				'heading'          => __( 'Title', 'line-shortcodes' ),
				'param_name'       => 'title'
			),

			array(
				'type'             => 'textfield',
				'heading'          => __( 'Subtitle', 'line-shortcodes' ),
				'param_name'       => 'subtitle'
			),

			array(
				'type'       => 'textarea_html',
				'heading'    => __( 'Description', 'line-shortcodes' ),
				'param_name' => 'content'
			),

			array(
				'type'       => 'attach_image',
				'heading'    => __( 'Image', 'line-shortcodes' ),
				'param_name' => 'image'
			),

			array(
				'type'       => 'textfield',
				'heading'    => __( 'Image Size', 'line-shortcodes' ),
				'param_name' => 'image_size',
				'value'      => 'full'
			),

			array(
				'type'       => 'textfield',
				'heading'    => __( 'Link', 'line-shortcodes' ),
				'param_name' => 'link'
			),

			array(
				'type'       => 'dropdown',
				'heading'    => __( 'Link Target', 'line-shortcodes' ),
				'param_name' => 'target',
				'value'      => array(
					'_self'   => __( '_self', 'line-shortcodes' ),
					'_blank'  => __( '_blank', 'line-shortcodes' ),
					'_parent' => __( '_parent', 'line-shortcodes' ),
					'_top'    => __( '_top', 'line-shortcodes' )
				)
			),

			array(
				'type'       => 'dropdown',
				'heading'    => __( 'Show Link As Button?', 'line-shortcodes' ),
				'param_name' => 'show_button',
				'std'        => 'no',
				'value'      => array(
					__( 'Yes', 'line-shortcodes' ) => 'yes',
					__( 'No', 'line-shortcodes' )  => 'no'
				)
			),

			array(
				'type'       => 'textfield',
				'heading'    => __( 'Button Text', 'line-shortcodes' ),
				'param_name' => 'button_text',
				'value'      => __( 'Continue', 'line-shortcodes' )
			),

			array(
				'type'       => 'textfield',
				'heading'    => __( 'Extra Class', 'line-shortcodes' ),
				'param_name' => 'class'
			),

			array(
				'type' => 'css_editor',
				'param_name' => 'css',
				'group' => __( 'Design Options', 'line-shortcodes' )
			)
		)
	) );
} );


/**
 * An action to map the elements carousel shortcode
 * into the Visual Compsoer
 */
add_action( 'vc_before_init', function() {
	vc_map( array(
		'name'                    => __( 'LineThemes: Elements Carousel', 'line-shortcodes' ),
		'base'                    => 'elements_carousel',
		'icon'                    => 'themekit-shortcode',
		'show_settings_on_create' => false,
		'is_container'            => true,
		'category'                => 'LineThemes',
		'js_view'                 => 'VcColumnView',
		'html_template'           => __DIR__ . '/templates/elements-carousel.php',
		'params'                  => array(
			array(
				'type'        => 'dropdown',
				'heading'     => __( 'Show Items', 'line-shortcodes' ),
				'description' => __( 'The maximum amount of items displayed at a time', 'line-shortcodes' ),
				'param_name'  => 'items',
				'value'       => array_combine( range( 1, 6 ), range( 1, 6 ) ),
				'std'         => 4
			),

			array(
				'type'       => 'dropdown',
				'heading'    => __( 'Autoplay?', 'line-shortcodes' ),
				'param_name' => 'autoplay',
				'std'        => 'yes',
				'value'      => array(
					__( 'Yes', 'line-shortcodes' ) => 'yes',
					__( 'No', 'line-shortcodes' ) => 'no'
				)
			),

			array(
				'type'        => 'dropdown',
				'heading'     => __( 'Stop On Hover?', 'line-shortcodes' ),
				'description' => __( 'Rewind speed in milliseconds', 'line-shortcodes' ),
				'param_name'  => 'hover_stop',
				'std'         => 'yes',
				'value'       => array(
					__( 'Yes', 'line-shortcodes' ) => 'yes',
					__( 'No', 'line-shortcodes' ) => 'no'
				)
			),

			array(
				'type'        => 'checkbox',
				'heading'     => __( 'Slider Controls', 'line-shortcodes' ),
				'param_name'  => 'controls',
				'std'         => 'navigation,rewind-navigation,pagination,pagination-numbers',
				'value'       => array(
					__( 'Navigation', 'line-shortcodes' )         => 'navigation',
					__( 'Rewind Navigation', 'line-shortcodes' )  => 'rewind-navigation',
					__( 'Pagination', 'line-shortcodes' )         => 'pagination',
					__( 'Pagination Numbers', 'line-shortcodes' ) => 'pagination-numbers'
				)
			),

			array(
				'type'       => 'dropdown',
				'heading'    => __( 'Scroll Per Page?', 'line-shortcodes' ),
				'param_name' => 'scroll_page',
				'std'        => 'yes',
				'value'      => array(
					__( 'Yes', 'line-shortcodes' ) => 'yes',
					__( 'No', 'line-shortcodes' ) => 'no'
				)
			),

			array(
				'type'       => 'dropdown',
				'heading'    => __( 'Allow Mouse Drag?', 'line-shortcodes' ),
				'param_name' => 'mouse_drag',
				'std'        => 'yes',
				'value'      => array(
					__( 'Yes', 'line-shortcodes' ) => 'yes',
					__( 'No', 'line-shortcodes' ) => 'no'
				)
			),

			array(
				'type'       => 'dropdown',
				'heading'    => __( 'Allow Touch Drag?', 'line-shortcodes' ),
				'param_name' => 'touch_drag',
				'std'        => 'yes',
				'value'      => array(
					__( 'Yes', 'line-shortcodes' ) => 'yes',
					__( 'No', 'line-shortcodes' ) => 'no'
				)
			),

			array(
				'type'        => 'textfield',
				'heading'     => __( 'Extra Class', 'line-shortcodes' ),
				'description' => __( 'If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'line-shortcodes' ),
				'param_name'  => 'class'
			),

			// Speed options
			array(
				'type'        => 'textfield',
				'heading'     => __( 'Autoplay Speed', 'line-shortcodes' ),
				'description' => __( 'Autoplay speed in milliseconds', 'line-shortcodes' ),
				'param_name'  => 'autoplay_speed',
				'group'       => __( 'Speed Options', 'line-shortcodes' ),
				'value'       => 5000
			),

			array(
				'type'        => 'textfield',
				'heading'     => __( 'Slide Speed', 'line-shortcodes' ),
				'description' => __( 'Slide speed in milliseconds', 'line-shortcodes' ),
				'param_name'  => 'slide_speed',
				'group' => __( 'Speed Options', 'line-shortcodes' ),
				'value'       => 200
			),

			array(
				'type'        => 'textfield',
				'heading'     => __( 'Pagination Speed', 'line-shortcodes' ),
				'description' => __( 'Pagination speed in milliseconds', 'line-shortcodes' ),
				'param_name'  => 'pagination_speed',
				'group' => __( 'Speed Options', 'line-shortcodes' ),
				'value'       => 200
			),

			array(
				'type'        => 'textfield',
				'heading'     => __( 'Rewind Speed', 'line-shortcodes' ),
				'description' => __( 'Rewind speed in milliseconds', 'line-shortcodes' ),
				'param_name'  => 'rewind_speed',
				'group' => __( 'Speed Options', 'line-shortcodes' ),
				'value'       => 200
			),

			// Responsive options
			array(
				'type'       => 'dropdown',
				'heading'    => __( 'Enable Responsive?', 'line-shortcodes' ),
				'param_name' => 'responsive',
				'group'      => __( 'Responsive Options', 'line-shortcodes' ),
				'std'        => 'yes',
				'value'      => array(
					__( 'Yes', 'line-shortcodes' ) => 'yes',
					__( 'No', 'line-shortcodes' ) => 'no'
				)
			),

			array(
				'type'        => 'dropdown',
				'heading'     => __( 'Items On Tablet', 'line-shortcodes' ),
				'description' => __( 'The maximum amount of items displayed at a time on tablet device', 'line-shortcodes' ),
				'param_name'  => 'tablet_items',
				'group'       => __( 'Responsive Options', 'line-shortcodes' ),
				'value'       => array_combine( range( 1, 6 ), range( 1, 6 ) ),
				'std'         => 2
			),

			array(
				'type'        => 'dropdown',
				'heading'     => __( 'Items On Mobile', 'line-shortcodes' ),
				'description' => __( 'The maximum amount of items displayed at a time on mobile device', 'line-shortcodes' ),
				'param_name'  => 'mobile_items',
				'group'       => __( 'Responsive Options', 'line-shortcodes' ),
				'value'       => array_combine( range( 1, 6 ), range( 1, 6 ) ),
				'std'         => 1
			),

			array(
				'type' => 'css_editor',
				'param_name' => 'css',
				'group' => __( 'Design Options', 'line-shortcodes' )
			)
		)
	) );
} );

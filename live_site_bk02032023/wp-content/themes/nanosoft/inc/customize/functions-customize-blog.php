<?php
defined( 'ABSPATH' ) or die();

add_filter( 'nanosoft_customize_containers', 'nanosoft_customize_blog_containers' );
add_filter( 'nanosoft_customize_settings', 'nanosoft_customize_blog_settings' );

add_filter( 'nanosoft_customize_controls', 'nanosoft_customize_blog_archive' );
add_filter( 'nanosoft_customize_controls', 'nanosoft_customize_blog_single' );
add_filter( 'nanosoft_customize_controls', 'nanosoft_customize_blog_related' );


function nanosoft_customize_blog_containers( $containers ) {
	$containers['blog'] = array(
		'type'            => 'panel',
		'title'           => esc_html__( 'Blog & Post', 'nanosoft' )
	);
	$containers['blogArchive'] = array(
		'type'        => 'section',
		'panel'       => 'blog',
		'title'       => esc_html__( 'Blog Settings', 'nanosoft' ),
		'description' => esc_html__( 'Select the style of blog posts that will appearing on the archive page', 'nanosoft' )
	);
	$containers['blogSingle'] = array(
		'type'        => 'section',
		'panel'       => 'blog',
		'title'       => esc_html__( 'Post Settings', 'nanosoft' )
	);
	$containers['blogAuthor'] = array(
		'type'        => 'section',
		'panel'       => 'blog',
		'title'       => esc_html__( 'Author Box', 'nanosoft' ),
	);
	$containers['blogRelated'] = array(
		'type'        => 'section',
		'panel'       => 'blog',
		'title'       => esc_html__( 'Related Posts', 'nanosoft' ),
	);

	return $containers;
}


function nanosoft_customize_blog_settings( $settings ) {
	$settings['blog__archive__style']           = array( 'default' => 'large' );
	$settings['blog__archive__columns']         = array( 'default' => 3 );
	$settings['blog__archive__gridGutter']      = array( 'default' => 60 );
	$settings['blog__archive__imagesize']       = array( 'default' => 'full' );
	$settings['blog__archive__imagesizeCrop']   = array( 'default' => 'crop' );
	$settings['blog__archive__autoExcerpt']     = array( 'default' => 'off' );
	$settings['blog__archive__excerptLength']   = array( 'default' => '40' );
	$settings['blog__archive__postMeta']        = array( 'default' => 'on' );
	$settings['blog__archive__readmore']        = array( 'default' => 'on' );
	$settings['blog__archive__sidebar']         = array( 'default' => 'primary' );
	$settings['blog__archive__sidebarPosition'] = array( 'default' => 'left' );
	
	$settings['blog__single__postMeta']        = array( 'default' => 'on' );
	$settings['blog__single__postTags']        = array( 'default' => 'on' );
	$settings['blog__single__postNav']         = array( 'default' => 'on' );
	$settings['blog__single__postAuthor']      = array( 'default' => 'on' );
	$settings['blog__single__relatedPosts']    = array( 'default' => 'on' );
	$settings['blog__single__sidebar']         = array( 'default' => 'primary' );
	$settings['blog__single__sidebarPosition'] = array( 'default' => 'left' );
	
	$settings['blog__related__title']     = array( 'default' => 'Related Posts' );
	$settings['blog__related__type']      = array( 'default' => 'category' );
	$settings['blog__related__count']     = array( 'default' => '3' );

	return $settings;
}


function nanosoft_customize_blog_archive( $controls ) {
	$controls['blog__archive__style'] = array(
		'type' => 'radio-buttons',
		'section' => 'blogArchive',
		'default' => 'grid',
		'choices' => array(
			'grid'   => esc_html__( 'Grid', 'nanosoft' ),
			'masonry'   => esc_html__( 'Masonry', 'nanosoft' ),
			'medium' => esc_html__( 'Medium', 'nanosoft' ),
			'large'  => esc_html__( 'Large', 'nanosoft' )
		)
	);
	$controls['blog__archive__columns'] = array(
		'type' => 'radio-buttons',
		'label'   => esc_html__( 'Grid Columns', 'nanosoft' ),
		'section' => 'blogArchive',
		'choices' => array(
			2 => 2,
			3 => 3,
			4 => 4,
			5 => 5
		)
	);
	$controls['blog__archive__gridGutter'] = array(
		'type'        => 'textfield',
		'section'     => 'blogArchive',
		'label'       => esc_html__( 'Grid Column Spacing (px)', 'nanosoft' ),
	);
	$controls['blog__archive__imagesize'] = array(
		'type'        => 'textfield',
		'section'     => 'blogArchive',
		'label' => esc_html__( 'Image Size', 'nanosoft' ),
		'description' => esc_html__( 'Enter image size. Example: "thumbnail", "medium", "large", "full" or other sizes defined by current theme. Alternatively enter image size in pixels: 200x100 (Width x Height). Leave empty to use "thumbnail" size.', 'nanosoft' )
	);
	$controls['blog__archive__imagesizeCrop'] = array(
		'type'        => 'radio-buttons',
		'section'     => 'blogArchive',
		'choices'     => array(
			'crop' => esc_html__('Hard Crop', 'nanosoft'),
			'none' => esc_html__('None', 'nanosoft')
		)
	);
	$controls['blog__archive__postMeta'] = array(
		'type'    => 'radio-onoff',
		'label'   => esc_html__( 'Show Post Meta', 'nanosoft' ),
		'section' => 'blogArchive',
		'default' => 'on'
	);
	$controls['blog__archive__readmore'] = array(
		'type'    => 'radio-onoff',
		'label'   => esc_html__( 'Show Read More', 'nanosoft' ),
		'section' => 'blogArchive',
		'default' => 'on'
	);
	$controls['blog__archive__autoExcerpt'] = array(
		'type'    => 'radio-onoff',
		'label'   => esc_html__( 'Auto Post Excerpt', 'nanosoft' ),
		'section' => 'blogArchive',
		'default' => 'off'
	);

	$controls['blog__archive__excerptLength'] = array(
		'type'    => 'textfield',
		'label'   => esc_html__( 'Post Excerpt Length', 'nanosoft' ),
		'section' => 'blogArchive',
		'default' => 40
	);

	/**
	 * Sidebar settings
	 */
	$controls['blog__archive__sidebar'] = array(
		'type'    => 'dropdown',
		'section' => 'blogArchive',
		'label'   => esc_html__( 'Sidebar', 'nanosoft' ),
		'choices' => 'nanosoft_customize_dropdown_sidebars'
	);
	$controls['blog__archive__sidebarPosition'] = array(
		'type'    => 'radio-buttons',
		'section' => 'blogArchive',
		'label'   => esc_html__( 'Sidebar Position', 'nanosoft' ),
		'choices' => array(
			'none' => esc_html__( 'No Sidebar', 'nanosoft' ),
			'left'       => esc_html__( 'Left', 'nanosoft' ),
			'right'      => esc_html__( 'Right', 'nanosoft' )
		)
	);
	
	
	return $controls;
}


function nanosoft_customize_blog_single( $controls ) {
	$controls['blog__single__postMeta'] = array(
		'type'    => 'radio-onoff',
		'label'   => esc_html__( 'Show Post Meta', 'nanosoft' ),
		'section' => 'blogSingle',
		'default' => 'on'
	);
	$controls['blog__single__postTags'] = array(
		'type'    => 'radio-onoff',
		'label'   => esc_html__( 'Show Post Tags', 'nanosoft' ),
		'section' => 'blogSingle',
		'default' => 'on'
	);
	$controls['blog__single__postNav'] = array(
		'type'    => 'radio-onoff',
		'label'   => esc_html__( 'Show Post Navigator', 'nanosoft' ),
		'section' => 'blogSingle',
		'default' => 'on'
	);
	$controls['blog__single__postAuthor'] = array(
		'type'    => 'radio-onoff',
		'label'   => esc_html__( 'Show Post Author', 'nanosoft' ),
		'section' => 'blogSingle',
		'default' => 'on'
	);
	$controls['blog__single__relatedPosts'] = array(
		'type'    => 'radio-onoff',
		'label'   => esc_html__( 'Show Related Posts', 'nanosoft' ),
		'section' => 'blogSingle',
		'default' => 'on'
	);

	/**
	 * Sidebar settings
	 */
	$controls['blog__single__sidebar'] = array(
		'type'    => 'dropdown',
		'section' => 'blogSingle',
		'label'   => esc_html__( 'Sidebar', 'nanosoft' ),
		'choices' => 'nanosoft_customize_dropdown_sidebars'
	);
	$controls['blog__single__sidebarPosition'] = array(
		'type'    => 'radio-buttons',
		'section' => 'blogSingle',
		'label'   => esc_html__( 'Sidebar Position', 'nanosoft' ),
		'choices' => array(
			'none'    => esc_html__( 'No Sidebar', 'nanosoft' ),
			'left'  => esc_html__( 'Left', 'nanosoft' ),
			'right' => esc_html__( 'Right', 'nanosoft' )
		)
	);
	
	
	return $controls;
}


function nanosoft_customize_blog_related( $controls ) {
	$controls['blog__related__title'] = array(
		'type'    => 'textfield',
		'label'   => esc_html__( 'Widget Title', 'nanosoft' ),
		'section' => 'blogRelated',
		'default' => esc_html__( 'Related Posts', 'nanosoft' )
	);

	$controls['blog__related__count'] = array(
		'type'    => 'textfield',
		'label'   => esc_html__( 'Number of Related Posts', 'nanosoft' ),
		'section' => 'blogRelated',
		'default' => esc_html__( '4', 'nanosoft' )
	);

	$controls['blog__related__gridColumns'] = array(
		'type'        => 'radio-buttons',
		'section'     => 'blogRelated',
		'label'       => esc_html__( 'Grid Columns', 'nanosoft' ),
		'choices'     => array( 2 => 2, 3 => 3, 4 => 4, 5 => 5 )
	);

	$controls['blog__related__type'] = array(
		'type' => 'dropdown',
		'section' => 'blogRelated',
		'label' => esc_html__( 'Show Related Posts Based On', 'nanosoft' ),
		'default' => 'tag',
		'choices' => array(
			'tag'      => esc_html__( 'Tag', 'nanosoft' ),
			'category' => esc_html__( 'Category', 'nanosoft' ),
			'random'   => esc_html__( 'Random', 'nanosoft' ),
			'recent'   => esc_html__( 'Recent', 'nanosoft' )
		)
	);

	return $controls;
}

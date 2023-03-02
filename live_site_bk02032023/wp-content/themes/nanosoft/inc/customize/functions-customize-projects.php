<?php
defined( 'ABSPATH' ) or die();

add_filter( 'nanosoft_customize_containers', 'nanosoft_customize_projects_containers' );
add_filter( 'nanosoft_customize_controls', 'nanosoft_customize_projects_controls' );
add_filter( 'nanosoft_customize_controls', 'nanosoft_customize_single_project_controls' );
add_filter( 'nanosoft_customize_controls', 'nanosoft_customize_project_related' );
add_filter( 'nanosoft_customize_settings', 'nanosoft_customize_projects_settings' );


function nanosoft_customize_projects_containers( $containers ) {
	$containers['projects'] = array(
		'type'        => 'panel',
		'title'       => esc_html__( 'Projects', 'nanosoft' ),
		'description' => ''
	);

	$containers[ 'projectsList' ] = array(
		'type'  => 'section',
		'title'       => esc_html__( 'Project Archive', 'nanosoft' ),
		'description' => '',
		'panel'       => 'projects'
	);

	$containers[ 'projectsSingle' ] = array(
		'type'  => 'section',
		'title'       => esc_html__( 'Project Single', 'nanosoft' ),
		'description' => '',
		'panel'       => 'projects'
	);

	$containers[ 'projectsRelated' ] = array(
		'type'  => 'section',
		'title'       => esc_html__( 'Related Projects', 'nanosoft' ),
		'description' => '',
		'panel'       => 'projects'
	);

	return $containers;
}


function nanosoft_customize_projects_controls( $controls ) {
	$controls['projects__displayMode'] = array(
		'type'        => 'radio-buttons',
		'section'     => 'projectsList',
		'description' => esc_html__( 'Controls the layout for the projects pages.', 'nanosoft' ),
		'choices'     => array(
			'grid-alt'  => esc_html__( 'Grid Titte', 'nanosoft' ),
			'grid'      => esc_html__( 'Grid', 'nanosoft' ),
			'masonry'   => esc_html__( 'Masonry', 'nanosoft' )
		)
	);

	$controls['projects__gridColumns'] = array(
		'type'        => 'radio-buttons',
		'section'     => 'projectsList',
		'label'       => esc_html__( 'Grid Columns', 'nanosoft' ),
		'choices'     => array( 2 => 2, 3 => 3, 4 => 4, 5 => 5 )
	);
	$controls['projects__gridGutter'] = array(
		'type'        => 'textfield',
		'section'     => 'projectsList',
		'label'       => esc_html__( 'Grid Column Spacing (px)', 'nanosoft' ),
	);
	$controls['projects__imagesize'] = array(
		'type'        => 'textfield',
		'section'     => 'projectsList',
		'label' => esc_html__( 'Image Size', 'nanosoft' ),
		'description' => esc_html__( 'Enter image size. Example: "thumbnail", "medium", "large", "full" or other sizes defined by current theme. Alternatively enter image size in pixels: 200x100 (Width x Height). Leave empty to use "thumbnail" size.', 'nanosoft' )
	);
	$controls['projects__imagesizeCrop'] = array(
		'type'        => 'radio-buttons',
		'section'     => 'projectsList',
		'choices'     => array(
			'crop' => esc_html__('Hard Crop', 'nanosoft'),
			'none' => esc_html__('None', 'nanosoft')
		)
	);

	$controls['projects__filterable'] = array(
		'type'        => 'radio-onoff',
		'section'     => 'projectsList',
		'label'       => esc_html__( 'Enable Projects Filterable', 'nanosoft' ),
	);
	$controls['projects__filterableType'] = array(
		'type'        => 'radio-buttons',
		'section'     => 'projectsList',
		'label'       => esc_html__( 'Filterable Type', 'nanosoft' ),
		'choices'     => array(
			'nproject-tag'      => esc_html__( 'Tag', 'nanosoft' ),
			'nproject-category' => esc_html__( 'Category', 'nanosoft' )
		)
	);
	$controls['projects__filterableAlign'] = array(
		'type'        => 'radio-buttons',
		'section'     => 'projectsList',
		'label'       => _x( 'Filterable Alignment', 'customize', 'nanosoft' ),
		'description' => _x( '', 'customize', 'nanosoft' ),
		'choices'     => array(
			'left'    => _x( 'Left', 'customize', 'nanosoft' ),
			'center'  => _x( 'Center', 'customize', 'nanosoft' ),
			'right'   => _x( 'Right', 'customize', 'nanosoft' )
		)
	);

	$controls['projects__excerpt'] = array(
		'type'        => 'radio-onoff',
		'section'     => 'projectsList',
		'label'       => esc_html__( 'Show Summary Text', 'nanosoft' ),
	);
	$controls['projects__autoExcerptLength'] = array(
		'type'        => 'textfield',
		'section'     => 'projectsList',
		'label'       => esc_html__( 'Summary Text Length', 'nanosoft' ),
	);

	$controls['projects__readmore'] = array(
		'type'        => 'radio-onoff',
		'section'     => 'projectsList',
		'label'       => esc_html__( 'Show Readmore Button', 'nanosoft' ),
	);


	// Sidebar section
	$controls['projects__sidebarHeading'] = array(
		'type'        => 'heading',
		'section'     => 'projectsList',
		'label'       => esc_html__( 'Sidebar', 'nanosoft' ),
	);
	$controls['projects__sidebar'] = array(
		'type'        => 'dropdown',
		'section'     => 'projectsList',
		'choices'     => 'nanosoft_customize_dropdown_sidebars'
	);

	$controls['projects__sidebarPosition'] = array(
		'type'    => 'radio-buttons',
		'section' => 'projectsList',
		'label'   => esc_html__( 'Sidebar Position', 'nanosoft' ),
		'choices' => array(
			'none'  => esc_html__( 'No Sidebar', 'nanosoft' ),
			'left'  => esc_html__( 'Left', 'nanosoft' ),
			'right' => esc_html__( 'Right', 'nanosoft' )
		)
	);

	return $controls;
}


function nanosoft_customize_single_project_controls( $controls ) {
	$controls['project__pagination'] = array(
		'type'        => 'radio-onoff',
		'section'     => 'projectsSingle',
		'label'       => esc_html__( 'Show Post Navigator', 'nanosoft' ),
	);
	$controls['project__author'] = array(
		'type'        => 'radio-onoff',
		'section'     => 'projectsSingle',
		'label'       => esc_html__( 'Show Post Author', 'nanosoft' ),
	);
	$controls['project__tags'] = array(
		'type'        => 'radio-onoff',
		'section'     => 'projectsSingle',
		'label'       => esc_html__( 'Show Project Tags', 'nanosoft' ),
	);
	$controls['project__related'] = array(
		'type'        => 'radio-onoff',
		'section'     => 'projectsSingle',
		'label'       => esc_html__( 'Show Related Posts', 'nanosoft' ),
	);
	$controls['project__galerryMode'] = array(
		'type'        => 'radio-buttons',
		'section'     => 'projectsSingle',
		'label'       => esc_html__( 'Gallery Styles', 'nanosoft' ),
		'choices'     => array(
			'list'   => esc_html__( 'List', 'nanosoft' ),
			'slider' => esc_html__( 'Slider', 'nanosoft' ),
			'grid'   => esc_html__( 'Grid', 'nanosoft' )
		)
	);

	$controls['project__galleryColumns'] = array(
		'type'        => 'radio-buttons',
		'section'     => 'projectsSingle',
		'label'       => esc_html__( 'Gallery Columns', 'nanosoft' ),
		'choices'     => array(
			2 => 2,
			3 => 3,
			4 => 4,
			5 => 5,
		)
	);
	$controls['project__galleryPosition'] = array(
		'type'        => 'radio-buttons',
		'section'     => 'projectsSingle',
		'label'       => esc_html__( 'Gallery Position', 'nanosoft' ),
		'choices'     => array(
			'top'    => esc_html__( 'Top', 'nanosoft' ),
			'right'  => esc_html__( 'Right', 'nanosoft' ),
			'bottom' => esc_html__( 'Bottom', 'nanosoft' ),
			'left'   => esc_html__( 'Left', 'nanosoft' )
		)
	);

	// Sidebar section
	$controls['project__sidebarHeading'] = array(
		'type'        => 'heading',
		'section'     => 'projectsSingle',
		'label'       => esc_html__( 'Sidebar', 'nanosoft' ),
	);
	$controls['project__sidebar'] = array(
		'type'        => 'dropdown',
		'section'     => 'projectsSingle',
		'choices'     => 'nanosoft_customize_dropdown_sidebars'
	);

	$controls['project__sidebarPosition'] = array(
		'type'    => 'radio-buttons',
		'section' => 'projectsSingle',
		'label'   => esc_html__( 'Sidebar Position', 'nanosoft' ),
		'choices' => array(
			'none'  => esc_html__( 'No Sidebar', 'nanosoft' ),
			'left'  => esc_html__( 'Left', 'nanosoft' ),
			'right' => esc_html__( 'Right', 'nanosoft' )
		)
	);

	return $controls;
}


function nanosoft_customize_projects_settings( $settings ) {
	$settings['projects__displayMode']     = array( 'default' => 'grid' );
	$settings['projects__gridColumns']     = array( 'default' => 3 );
	$settings['projects__gridGutter']      = array( 'default' => 20 );
	$settings['projects__imagesize']       = array( 'default' => 'full' );
	$settings['projects__imagesizeCrop']   = array( 'default' => 'crop' );
	
	$settings['projects__filterable']        = array( 'default' => 'on' );
	$settings['projects__filterableAlign']   = array( 'default' => 'left' );
	$settings['projects__filterableType']    = array( 'default' => 'nproject-tag' );
	$settings['projects__excerpt']           = array( 'default' => 'on' );
	$settings['projects__autoExcerpt']       = array( 'default' => 'on' );
	$settings['projects__autoExcerptLength'] = array( 'default' => '12' );
	$settings['projects__readmore']          = array( 'default' => 'on' );
	$settings['projects__sidebar']           = array( 'default' => 'primary' );
	$settings['projects__sidebarPosition']   = array( 'default' => 'right' );

	$settings['project__pagination']      = array( 'default' => 'on' );
	$settings['project__author']          = array( 'default' => 'on' );
	$settings['project__related']         = array( 'default' => 'on' );
	$settings['project__galerryMode']     = array( 'default' => 'grid' );
	$settings['project__galleryColumns']  = array( 'default' => 3 );
	$settings['project__galleryPosition'] = array( 'default' => 'top' );
	$settings['project__sidebar']         = array( 'default' => 'primary' );
	$settings['project__sidebarPosition'] = array( 'default' => 'left' );
	$settings['project__tags']            = array( 'default' => 'on' );

	$settings['project__related__title']            = array( 'default' => 'Related Posts' );
	$settings['project__related__count']            = array( 'default' => '4' );
	$settings['projects__related__gridColumns']     = array( 'default' => 4 );
	$settings['project__related__type']             = array( 'default' => 'category' );

	return $settings;
}

function nanosoft_customize_project_related( $controls ) {
	$controls['project__related__title'] = array(
		'type'    => 'textfield',
		'label'   => esc_html__( 'Widget Title', 'nanosoft' ),
		'section' => 'projectsRelated',
		'default' => esc_html__( 'Related Projects', 'nanosoft' )
	);

	$controls['project__related__count'] = array(
		'type'    => 'textfield',
		'label'   => esc_html__( 'Number of Related Projects', 'nanosoft' ),
		'section' => 'projectsRelated',
		'default' => esc_html__( '4', 'nanosoft' )
	);

	$controls['projects__related__gridColumns'] = array(
		'type'        => 'radio-buttons',
		'section'     => 'projectsRelated',
		'label'       => esc_html__( 'Grid Columns', 'nanosoft' ),
		'choices'     => array( 2 => 2, 3 => 3, 4 => 4, 5 => 5 )
	);

	$controls['project__related__type'] = array(
		'type' => 'dropdown',
		'section' => 'projectsRelated',
		'label' => esc_html__( 'Show Related Projects Based On', 'nanosoft' ),
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

<?php
defined( 'ABSPATH' ) or die();

add_filter( 'nanosoft_customize_containers', 'nanosoft_customize_shop_containers' );
add_filter( 'nanosoft_customize_controls', 'nanosoft_customize_shop_controls' );
// add_filter( 'nanosoft_customize_controls', 'nanosoft_customize_single_product_controls' );
add_filter( 'nanosoft_customize_settings', 'nanosoft_customize_shop_settings' );


function nanosoft_customize_shop_containers( $containers ) {
	$containers['shop'] = array(
		'type'            => 'section',
		'title'           => esc_html__( 'Shop', 'nanosoft' ),
		'description'     => '',
		'active_callback' => function() {
			return class_exists( 'WooCommerce' );
		}
	);

	return $containers;
}


function nanosoft_customize_shop_controls( $controls ) {
	$controls['shop__imageSizeHeading'] = array(
		'type'        => 'heading',
		'section'     => 'shop',
		'label'       => esc_html__( 'Product images', 'nanosoft' ),
		'description' => esc_html__( 'These settings affect the display and dimensions of images in your catalog - the display on the front-end will still be affected by CSS styles.', 'nanosoft' ),
	);
	$controls['shop__productImageSize'] = array(
		'type'        => 'textfield',
		'section'     => 'shop',
		'label'       => esc_html__( 'Catalog images', 'nanosoft' ),
		'description' => esc_html__( 'Enter image size in pixels: 200x100 (Width x Height).', 'nanosoft' )
	);
	$controls['shop__productImageSizeCrop'] = array(
		'type'        => 'radio-buttons',
		'section'     => 'shop',
		'choices'     => array(
			'crop' => esc_html__('Hard Crop', 'nanosoft'),
			'none' => esc_html__('None', 'nanosoft')
		)
	);
	$controls['product__imageSize'] = array(
		'type'        => 'textfield',
		'section'     => 'shop',
		'label'       => esc_html__( 'Single Product Image', 'nanosoft' ),
		'description' => esc_html__( 'Enter image size in pixels: 200x100 (Width x Height).', 'nanosoft' )
	);
	$controls['product__imageSizeCrop'] = array(
		'type'        => 'radio-buttons',
		'section'     => 'shop',
		'choices'     => array(
			'crop' => esc_html__('Hard Crop', 'nanosoft'),
			'none' => esc_html__('None', 'nanosoft')
		)
	);
	$controls['product__thumbnailSize'] = array(
		'type'        => 'textfield',
		'section'     => 'shop',
		'label'       => esc_html__( 'Product Thumbnails', 'nanosoft' ),
		'description' => esc_html__( 'Enter image size in pixels: 200x100 (Width x Height).', 'nanosoft' )
	);
	$controls['product__thumbnailSizeCrop'] = array(
		'type'        => 'radio-buttons',
		'section'     => 'shop',
		'choices'     => array(
			'crop' => esc_html__('Hard Crop', 'nanosoft'),
			'none' => esc_html__('None', 'nanosoft')
		)
	);


	$controls['shop__heading'] = array(
		'type'        => 'heading',
		'section'     => 'shop',
		'label'       => esc_html__( 'Shop Settings', 'nanosoft' ),
		'description' => esc_html__( 'This section is designed for only Woocommerce, it will be applied for page that listing all products.', 'nanosoft' ),
	);

	$controls['shop__gridColumns'] = array(
		'type'        => 'radio-buttons',
		'section'     => 'shop',
		'label'       => esc_html__( 'Grid Columns', 'nanosoft' ),
		'choices'     => array(
			2 => 2,
			3 => 3,
			4 => 4,
			5 => 5
		)
	);
	$controls['shop__gridGutter'] = array(
		'type'        => 'textfield',
		'section'     => 'shop',
		'label'       => esc_html__( 'Grid Columns Spacing (px)', 'nanosoft' )
	);
	$controls['shop__paginate'] = array(
		'type'        => 'textfield',
		'section'     => 'shop',
		'label'       => esc_html__( 'Products Per Page', 'nanosoft' )
	);

	$controls['shop__sidebar'] = array(
		'type'        => 'dropdown',
		'section'     => 'shop',
		'label'       => esc_html__( 'Sidebar', 'nanosoft' ),
		'choices'     => 'nanosoft_customize_dropdown_sidebars'
	);
	$controls['shop__sidebarPosition'] = array(
		'type'        => 'radio-buttons',
		'section'     => 'shop',
		'label'       => esc_html__( 'Sidebar Position', 'nanosoft' ),
		'choices'     => array(
			'none'  => esc_html__( 'No Sidebar', 'nanosoft' ),
			'left'  => esc_html__( 'Left', 'nanosoft' ),
			'right' => esc_html__( 'Right', 'nanosoft' )
		)
	);



	/**
	 * Product Settigns
	 */
	$controls['product__heading'] = array(
		'type'        => 'heading',
		'section'     => 'shop',
		'label'       => esc_html__( 'Product Settings', 'nanosoft' ),
		'description' => esc_html__( 'Like "Blog Single" section, you can change style for product details page.', 'nanosoft' ),
	);

	$controls['product__sidebar'] = array(
		'type'        => 'dropdown',
		'section'     => 'shop',
		'label'       => esc_html__( 'Sidebar', 'nanosoft' ),
		'choices'     => 'nanosoft_customize_dropdown_sidebars'
	);
	$controls['product__sidebarPosition'] = array(
		'type'        => 'radio-buttons',
		'section'     => 'shop',
		'label'       => esc_html__( 'Sidebar Position', 'nanosoft' ),
		'choices'     => array(
			'none'  => esc_html__( 'No Sidebar', 'nanosoft' ),
			'left'  => esc_html__( 'Left', 'nanosoft' ),
			'right' => esc_html__( 'Right', 'nanosoft' )
		)
	);

	return $controls;
}


function nanosoft_customize_shop_settings( $settings ) {
	$settings['shop__productImageSizeCrop'] = array( 'default' => 'crop' );
	$settings['product__imageSizeCrop']     = array( 'default' => 'crop' );
	$settings['product__thumbnailSizeCrop'] = array( 'default' => 'crop' );
	$settings['shop__gridColumns']        = array( 'default' => 3 );
	$settings['shop__gridGutter']         = array( 'default' => 20 );
	$settings['shop__paginate']           = array( 'default' => 12 );
	$settings['shop__productImageSize']   = array( 'default' => 'full' );
	$settings['shop__sidebar']            = array( 'default' => 'primary' );
	$settings['shop__sidebarPosition']    = array( 'default' => 'left' );
	$settings['product__imageSize']       = array( 'default' => 'full' );
	$settings['product__thumbnailSize']   = array( 'default' => '200x150' );
	$settings['product__sidebar']         = array( 'default' => 'primary' );
	$settings['product__sidebarPosition'] = array( 'default' => 'left' );

	return $settings;
}



<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// METABOX OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options      = array();



// -----------------------------------------
// Page Header Metabox Options                    -
// -----------------------------------------
$options[]    = array(
  'id'        => '_custom_page_header_options',
  'title'     => __( 'Custom Page Header Options', 'alvon' ),
  'post_type' => 'page',
  'context'   => 'normal',
  'priority'  => 'default',
  'sections'  => array(

    array(
      'name'   => 'page_setting',
      'fields' => array(
        // If selected color is "black or white"
        array(
          'type'    => 'subheading',
          'content' => __( 'Select your header style', 'alvon' ),
        ),
      
        array(
          'id'          => 'header_style',
          'type'        => 'image_select',
          'title'       => __( 'Header Style', 'alvon' ),
          'options'     => array(
            'style1'    => ALVON_PLG_URL. 'assets/imgs/header1.jpg',
            'style2'    => ALVON_PLG_URL. 'assets/imgs/header2.jpg',
            'style3'    => ALVON_PLG_URL. 'assets/imgs/header3.jpg',
          ),
        ),

      ),
    ),
    // end: a section

  ),
);


// -----------------------------------------
// Page Footer Metabox Options                    -
// -----------------------------------------
$options[]    = array(
  'id'        => '_custom_page_footer_options',
  'title'     => 'Custom Page Footer Options',
  'post_type' => 'page',
  'context'   => 'normal',
  'priority'  => 'default',
  'sections'  => array(

    array(
      'name'   => 'page_setting',
      'fields' => array(
        // If selected color is "black or white"
        array(
          'type'    => 'subheading',
          'content' => 'Select your footer style',
        ),
      
        array(
          'id'          => 'footer_style',
          'type'        => 'image_select',
          'title'       => 'Footer Style',
          'options'     => array(
            'style1'    => ALVON_PLG_URL. 'assets/imgs/footer1.jpg',
            'style2'    => ALVON_PLG_URL. 'assets/imgs/footer2.jpg',
            'style3'    => ALVON_PLG_URL. 'assets/imgs/footer3.jpg',
          ),
        ),

      ),
    ),
    // end: a section

  ),
);


// -----------------------------------------
// Default Post Setting                          -
// -----------------------------------------
$options[]    = array(
  'id'        => '_alvon_post',
  'title'     => __( 'Post Setting', 'alvon' ),
  'post_type' => 'post',
  'context'   => 'normal',
  'priority'  => 'default',
  'sections'  => array(

    array(
      'name'   => 'alvon_service',
      'fields' => array(

        array(
          'id'             => 'post_format_type',
          'type'           => 'select',
          'title'          => 'Custom Post Format',
          'options'        => array(
            'alvon-video'  => 'Video',
            'alvon-audio'  => 'Audio',
            'alvon-quote'  => 'Quote',
          ),
          'default_option' => 'Select Custom Post Type',
        ),
        array(
          'id'    => 'video_link',
          'type'  => 'text',
          'title' => __( 'Put Video Link', 'alvon' ),
          'dependency'   => array( 'post_format_type', '==', 'alvon-video' ),
        ),
        array(
          'id'    => 'audio_link',
          'type'  => 'text',
          'title' => __( 'Put Audio Link', 'alvon' ),
          'dependency'   => array( 'post_format_type', '==', 'alvon-audio' ),
        ),

      ),
    ),

  ),
);



// -----------------------------------------
// Service Setting                          -
// -----------------------------------------
$options[]    = array(
  'id'        => '_alvon_service',
  'title'     => __( 'Service Setting', 'alvon' ),
  'post_type' => 'service',
  'context'   => 'normal',
  'priority'  => 'default',
  'sections'  => array(

    array(
      'name'   => 'alvon_service',
      'fields' => array(

        array(
          'id'             => 'service_icon_type',
          'type'           => 'select',
          'title'          => 'Select Icon Type',
          'options'        => array(
            'icon'         => 'Icon',
            'image'        => 'Image',
          ),
        ),
        array(
          'id'    => 'service_icon',
          'type'  => 'icon',
          'title' => __( 'Service Icon', 'alvon' ),
          'dependency'   => array( 'service_icon_type', '==', 'icon' ),
        ),
        array(
          'id'    => 'service_icon_image',
          'type'  => 'image',
          'title' => __( 'Service Icon Image', 'alvon' ),
          'dependency'   => array( 'service_icon_type', '==', 'image' ),
        ),
        array(
          'id'    => 'service_icon_color',
          'type'  => 'color_picker',
          'title' => __( 'Icon Color', 'alvon' ),
          'default' => '#6e40f1',
          'dependency'   => array( 'service_icon_type', '==', 'icon' ),
        ),
        array(
          'id'    => 'service_custom_class',
          'type'  => 'text',
          'title' => __( 'Custom Class', 'alvon' ),
        ),

      ),
    ),

  ),
);



// -----------------------------------------
// Testimonial Setting                          -
// -----------------------------------------
$options[]    = array(
  'id'        => '_alvon_testimonial',
  'title'     => __( 'Testimonial Setting', 'alvon' ),
  'post_type' => 'testimonial',
  'context'   => 'normal',
  'priority'  => 'default',
  'sections'  => array(

    array(
      'name'   => 'alvon_testimonial',
      'fields' => array(
        array(
          'id'    => 'testimonial_designation',
          'type'  => 'text',
          'title' => __( 'Designation', 'alvon' ),
        ),
        array(
          'id'       => 'rewiew_setting',
          'type'     => 'select',
          'title'    => __( 'Select Rating', 'dustrial' ),
          'options'  => array(
            '1' => __( '1 Star', 'dustrial' ),
            '2' => __( '2 Star', 'dustrial' ),
            '3' => __( '3 Star', 'dustrial' ),
            '4' => __( '4 Star', 'dustrial' ),
            '5' => __( '5 Star', 'dustrial' ),
          ),
          'default'  => '5',
        ),

      ),
    ),

  ),
);



// -----------------------------------------
// Portfolio Setting                         -
// -----------------------------------------
$options[]    = array(
  'id'        => '_alvon_portfolios',
  'title'     => __( 'Portfolio Setting', 'alvon' ),
  'post_type' => 'portfolio',
  'context'   => 'normal',
  'priority'  => 'default',
  'sections'  => array(

    array(
      'name'   => 'alvon_portfolio',
      'fields' => array(

        array(
          'id'    => 'portfolio_sub_title',
          'type'  => 'text',
          'title' => __( 'Portfolio sub title', 'alvon' ),
        ),

        array(
          'type'    => 'subheading',
          'content' => __( 'Portfolio Details Information', 'alvon' ),
        ),
        array(
          'id'    => 'client_name',
          'type'  => 'text',
          'title' => __( 'Client Name', 'alvon' ),
        ),
        array(
          'id'    => 'company_location',
          'type'  => 'text',
          'title' => __( 'Location Name', 'alvon' ),
        ),
        array(
          'id'    => 'portfolio_date',
          'type'  => 'text',
          'title' => __( 'Portfolio Date', 'alvon' ),
        ),
        array(
          'id'    => 'portfolio_website',
          'type'  => 'text',
          'title' => __( 'Portfolio Website', 'alvon' ),
        ),

      ),
    ),

  ),
);



// -----------------------------------------
// Portfolio Setting                         -
// -----------------------------------------
$options[]    = array(
  'id'        => '_alvon_portfolios_gallery',
  'title'     => __( 'Portfolio Gallery Setting', 'alvon' ),
  'post_type' => 'portfolio',
  'context'   => 'side',
  'priority'  => 'low',
  'sections'  => array(

    array(
      'name'   => 'alvon_portfolio_gallery',
      'fields' => array(

        array(
          'id'    => 'portfolio_gallery',
          'type'  => 'gallery',
          'title' => 'Gallery image',
          'desc' => 'This gallery is show in single post details',
        ),

      ),
    ),

  ),
);



// -----------------------------------------
// Team Setting                         -
// -----------------------------------------
$options[]    = array(
  'id'        => '_alvon_team',
  'title'     => __( 'Team Setting', 'alvon' ),
  'post_type' => 'team',
  'context'   => 'normal',
  'priority'  => 'default',
  'sections'  => array(

    array(
      'name'   => 'alvon_team',
      'fields' => array(

        array(
          'id'    => 'team_designation',
          'type'  => 'text',
          'title' => __( 'Team Designation', 'alvon' ),
        ),

      ),
    ),

  ),
);



// -----------------------------------------
// Pricing Setting                         -
// -----------------------------------------
$options[]    = array(
  'id'        => '_alvon_price',
  'title'     => __( 'Price Setting', 'alvon' ),
  'post_type' => 'price',
  'context'   => 'normal',
  'priority'  => 'default',
  'sections'  => array(

    array(
      'name'   => 'alvon_prifing_table',
      'fields' => array(

        array(
          'id'              => 'price_table_info',
          'type'            => 'group',
          'title'           => __( 'Price Info', 'alvon' ),
          'button_title'    => __( 'Add New', 'alvon' ),
          'accordion_title' => __( 'Add New Field', 'alvon' ),
          'fields'          => array(
            array(
              'id'          => 'price_title',
              'type'        => 'text',
              'title'       => __( 'Price Title', 'alvon' ),
            ),
            array(
              'id'          => 'price',
              'type'        => 'text',
              'title'       => __( 'Price', 'alvon' ),
            ),
            array(
              'id'          => 'price_desc',
              'type'        => 'text',
              'title'       => __( 'Price Description', 'alvon' ),
            ),
            array(
              'id'          => 'price_img',
              'type'        => 'image',
              'title'       => __( 'Price Image', 'alvon' ),
            ),
            array(
              'id'       => 'price_list',
              'type'     => 'wysiwyg',
              'title'    => 'Price Offer List',
              'settings' => array(
                'textarea_rows' => 7,
                'tinymce'       => true,
                'media_buttons' => false,
              )
            ),
            array(
              'id'          => 'btn_text',
              'type'        => 'text',
              'title'       => __( 'Button Text', 'alvon' ),
            ),
            array(
              'id'          => 'btn_link',
              'type'        => 'text',
              'title'       => __( 'Button Link', 'alvon' ),
            ),
            array(
              'id'      => 'active_price',
              'type'    => 'checkbox',
              'title'   => 'Active Table',
              'label'   => 'If you want to active this item, please check it',
              'default' => false,
            ),

          ),
        ),
        array(
          'id'    => 'price_custom_table',
          'type'  => 'text',
          'title' => __( 'Custom Class', 'alvon' ),
        ),
      
      ),
    ),

  ),
);


ALVONFramework_Metabox::instance( $options );
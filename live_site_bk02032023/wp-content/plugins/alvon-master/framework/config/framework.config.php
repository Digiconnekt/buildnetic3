<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK SETTINGS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$settings           = array(
  'menu_title'      => __( 'Theme Options', 'alvon' ),
  'menu_type'       => 'menu', // menu, submenu, options, theme, etc.
  'menu_slug'       => 'alvon',
  'ajax_save'       => true,
  'show_reset_all'  => false,
  'framework_title' => __( 'Alvon <small> by Johanspond v:1.0.6 </small>', 'alvon' ),
);

// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options        = array();



/*-----------------------------------------------------------------------------------------*
*   Genaral Settings
* -----------------------------------------------------------------------------------------*/

$options[]      = array(
  'name'        => 'genaral',
  'title'       => __( 'Genaral Settings', 'alvon' ),
  'icon'        => 'fa fa-home',
   // begin: fields
  'fields'      => array(
    array(
      'type'    => 'heading',
      'content' => __( 'Alvon General Settings', 'alvon' ),
    ),
    array(
      'type'    => 'subheading',
      'content' => __( 'Site Font Settings', 'alvon' ),
    ),
    array(
      'id'           => 'alvon_body_font',
      'type'         => 'typography',
      'title'        => __( 'Body font', 'alvon' ),
      'default'   => array(
        'family'  => 'Karla',
        'font'    => 'google', // this is helper for output ( google, websafe, custom )
      ),
      'variant'   => false,
    ),
    array(
      'id'           => 'alvon_heading_font',
      'type'         => 'typography',
      'title'        => __( 'Heading font', 'alvon' ),
      'default'   => array(
        'family'  => 'Karla',
        'font'    => 'google', // this is helper for output ( google, websafe, custom )
      ),
      'variant'   => false,
    ),

    array(
      'type'    => 'subheading',
      'content' => __( 'Site Icon Settings', 'alvon' ),
    ),
    array(
      'id'          => 'alvon_site_icon',
      'type'        => 'image',
      'title'       => __( 'Upload Favicon Icon', 'alvon' ),
      'default'     => ALVON_PLG_URL. 'assets/imgs/favicon.ico',
      'desc'       => __( 'Site Icons should be square and Recommended size is 80 × 80 pixels.', 'alvon' ),
    ),

    array(
      'type'    => 'subheading',
      'content' => __( 'Logo Settings', 'alvon' ),
    ),
    array(
      'id'          => 'alvon_logo_img',
      'type'        => 'image',
      'title'       => __( 'Upload white logo', 'alvon' ),
      'default'     => ALVON_PLG_URL. 'assets/imgs/logo.png',
      'desc'       => __( 'Recommended image size is 60x54 png file', 'alvon' ),
    ),
    array(
      'id'          => 'alvon_logo_img2',
      'type'        => 'image',
      'title'       => __( 'Upload red logo', 'alvon' ),
      'default'     => ALVON_PLG_URL. 'assets/imgs/logo_2.png',
      'desc'       => __( 'Recommended image size is 60x54 png file', 'alvon' ),
    ),
    array(
      'id'           => 'alvon_logo_custom_size',
      'type'         => 'text',
      'title'        => __( 'Logo size', 'alvon' ),
      'default'      => '180px',
    ),

    array(
      'type'    => 'subheading',
      'content' => __( 'Breadcrumb Settings', 'alvon' ),
    ),
    array(
      'id'           => 'alvon_breadcrumb_switch',
      'type'         => 'switcher',
      'title'        => __( 'Breadcrumb Switch Enable/Disable', 'alvon' ),
      'default'      => true,
    ),
    array(
      'id'      => 'breatcrumb_bg_img',
      'type'    => 'image',
      'title'   => __( 'Breadcrumb Background Image', 'alvon' ),
      'default'     => ALVON_PLG_URL. 'assets/imgs/breadcrumb-bg.jpg',
      'desc'       => __( 'Recommended image size is 1920x400 jpg/png file, for secondary header', 'alvon' ),
      'dependency'   => array( 'alvon_breadcrumb_switch', '==', 'true' ),
    ),
    array(
      'id'           => 'alvon_breadcrumb_overlay',
      'type'         => 'color_picker',
      'title'        => __( 'Breadcrumb overlay color', 'alvon' ),
      'default'      => '#004dcd',
      'dependency'   => array( 'alvon_breadcrumb_switch', '==', 'true' ),
    ),
    array(
      'id'      => 'breatcrumb_bg_img_opacity',
      'type'    => 'select',
      'title'   => __( 'Breadcrumb Background Image Opacity', 'alvon' ),
      'options'      => array(
        '0.0'   => '0.0',
        '0.1' => '0.1',
        '0.2' => '0.2',
        '0.3' => '0.3',
        '0.4' => '0.4',
        '0.5' => '0.5',
        '0.6' => '0.6',
        '0.7' => '0.7',
        '0.8' => '0.8',
        '0.9' => '0.9',
        '1'   => '1',
      ),
      'dependency'   => array( 'alvon_breadcrumb_switch', '==', 'true' ),
    ),
    array(
      'type'    => 'subheading',
      'content' => __( 'Default header footer settings', 'alvon' ),
    ),
    array(
      'id'          => 'default_header_style',
      'type'        => 'image_select',
      'title'       => __( 'Default Header Style', 'alvon' ),
      'options'     => array(
        'style1'    => ALVON_PLG_URL. 'assets/imgs/header1.jpg',
        'style2'    => ALVON_PLG_URL. 'assets/imgs/header2.jpg',
        'style3'    => ALVON_PLG_URL. 'assets/imgs/header3.jpg',
      ),
    ),
    array(
      'id'          => 'default_footer_style',
      'type'        => 'image_select',
      'title'       => __( 'Default Footer Style', 'alvon' ),
      'options'     => array(
        'style1'    => ALVON_PLG_URL. 'assets/imgs/footer1.jpg',
        'style2'    => ALVON_PLG_URL. 'assets/imgs/footer2.jpg',
        'style3'    => ALVON_PLG_URL. 'assets/imgs/footer3.jpg',
      ),
    ),
    array(
      'type'    => 'subheading',
      'content' => __( 'Alvon page loader settings', 'alvon' ),
    ),
    array(
      'id'           => 'alvon_preloader_enable',
      'type'         => 'switcher',
      'title'        => __( 'Preloader on?', 'alvon' ),
      'default' => true,
    ),
    array(
      'id'      => 'alvon_preloader_color',
      'type'    => 'color_picker',
      'title'   => __( 'Preloader color', 'alvon' ),
      'after'   => '<p class="cs-text-muted">It is preloader color.</p>',
      'default' => '#00aeff',
      'dependency'   => array( 'alvon_preloader_enable', '==', 'true' ),
    ),
    array(
      'type'    => 'subheading',
      'content' => __( 'Scroll to top settings', 'alvon' ),
    ),
    array(
      'id'           => 'alvon_scroll_top',
      'type'         => 'switcher',
      'title'        => __( 'Scroll to top on?', 'alvon' ),
    ),
    array(
      'id'           => 'alvon_scrollup_bg_color',
      'type'         => 'color_picker',
      'title'        => __( 'Background color', 'alvon' ),
      'after'        => '<p class="cs-text-muted">It is scroll up backgroud color.</p>',
      'default'      => '#00aeff',
      'dependency'   => array( 'alvon_scroll_top', '==', 'true' ),
    ),
    array(
      'id'           => 'alvon_scrollup_font_color',
      'type'         => 'color_picker',
      'title'        => __( 'Font color', 'alvon' ),
      'after'        => '<p class="cs-text-muted">It is scroll up font color.</p>',
      'default'      => '#ffffff',
      'dependency'   => array( 'alvon_scroll_top', '==', 'true' ),
    ),
    array(
      'type'    => 'subheading',
      'content' => __( 'All default color settings', 'alvon' ),
    ),
    array(
      'id'           => 'alvon_all_default_color',
      'type'         => 'color_picker',
      'title'        => __( 'All color', 'alvon' ),
      'after'        => '<p class="cs-text-muted">This is normally all default color settings.</p>',
      'default'      => '#00aeff',
    ),
    array(
      'id'           => 'alvon_all_default_color_h3',
      'type'         => 'color_picker',
      'title'        => __( 'Home 3 all color', 'alvon' ),
      'after'        => '<p class="cs-text-muted">This is normally all default color settings.</p>',
      'default'      => '#ff5050',
    ),
  )
);


/*-----------------------------------------------------------------------------------------*
*   Header Settings
* -----------------------------------------------------------------------------------------*/

$options[]      = array(
  'name'        => 'header_setting',
  'title'       => __( 'Header Settings', 'alvon' ),
  'icon'        => 'fa fa-header',
   // begin: fields
  'fields'      => array(

    // Menu button set
    array(
      'type'    => 'heading',
      'content' => __( 'Menu elements setting', 'alvon' ),
    ),
    array(
      'id'    => 'menu_language_button',
      'type'    => 'switcher',
      'title' => __( 'language', 'alvon' ),
    ),
    array(
      'id'          => 'menu_language_button_shortcode',
      'type'        => 'textarea',
      'title'       => __( 'Put your shortcode', 'alvon' ),
      'default'     => '[alvonlng]',
      'shortcode'   => true,
      'dependency'  => array( 'menu_language_button', '==', 'true' ),
    ),
    array(
      'id'    => 'menu_get_quote_btn',
      'type'  => 'switcher',
      'title' => __( 'Menu Quote Button', 'alvon' ),
      'label' => __( 'Do you want to on it ?', 'alvon' ),
    ),
    array(
      'id'    => 'quote_btn_text',
      'type'    => 'text',
      'title' => __( 'Quote button text', 'alvon' ),
      'default' => 'Get A Quote',
      'dependency'   => array( 'menu_get_quote_btn', '==', 'true' ),
    ),
    array(
      'id'    => 'quote_btn_link',
      'type'    => 'text',
      'title' => __( 'Quote button link', 'alvon' ),
      'default' => '#',
      'dependency'   => array( 'menu_get_quote_btn', '==', 'true' ),
    ),
    array(
      'id'    => 'menu_search_btn',
      'type'  => 'switcher',
      'title' => __( 'Menu Search Button', 'alvon' ),
      'label' => __( 'Do you want to on it ?', 'alvon' ),
    ),
  )
);


/*-----------------------------------------------------------------------------------------*
*   Alvon Blog Settings
* -----------------------------------------------------------------------------------------*/

$options[]      = array(
  'name'        => 'blog_setting',
  'title'       => __( 'Blog Page Settings', 'alvon' ),
  'icon'        => 'fa fa-pencil-square-o',
   // begin: fields
  'fields'      => array(

    array(
      'type'    => 'subheading',
      'content' => __( 'Blog Page Settings', 'alvon' ),
    ),

    array(
      'id'      => 'blog_page_breadcrumb_title',
      'type'    => 'text',
      'title'   => __( 'Blog page breadcrumb title', 'alvon' ),
      'default' => 'Blog Posts',
    ),
  
    array(
      'id'           => 'blog_layout',
      'type'         => 'image_select',
      'title'        => __( 'Page Layout Style', 'alvon' ),
      'options'      => array(
        'left-sidebar'  => ALVON_PLG_URL. 'assets/imgs/sidebar_l.jpg',
        'right-sidebar' => ALVON_PLG_URL. 'assets/imgs/sidebar_r.jpg',
        'full-width'    => ALVON_PLG_URL. 'assets/imgs/fullwidth.jpg',
        ),
    ),

    array(
      'id'           => 'blog_post_col_layout',
      'type'         => 'image_select',
      'title'        => __( 'Post Layout Style', 'alvon' ),
      'options'      => array(
        'col_2' => ALVON_PLG_URL. 'assets/imgs/columns-2.png',
        'col_3' => ALVON_PLG_URL. 'assets/imgs/columns-3.png',
        ),
    ),

    array(
      'id'      => 'blog_post_excerpt_length',
      'type'    => 'text',
      'title'   => __( 'Blog post content excerpt length', 'alvon' ),
      'default' => '35',
    ),

    array(
      'id'      => 'blog_post_admin',
      'type'    => 'switcher',
      'title'   => __( 'Post admin on?', 'alvon' ),
      'default' => true,
    ),
    array(
      'id'      => 'blog_post_comments',
      'type'    => 'switcher',
      'title'   => __( 'Post comments on?', 'alvon' ),
      'default' => true,
    ),

    array(
      'type'    => 'subheading',
      'content' => __( 'Blog Single Page Settings', 'alvon' ),
    ),
    array(
      'id'           => 'blog_single_layout',
      'type'         => 'image_select',
      'title'        => __( 'Page Layout Style', 'alvon' ),
      'options'      => array(
        'left-sidebar'  => ALVON_PLG_URL. 'assets/imgs/sidebar_l.jpg',
        'right-sidebar' => ALVON_PLG_URL. 'assets/imgs/sidebar_r.jpg',
        'full-width'    => ALVON_PLG_URL. 'assets/imgs/fullwidth.jpg',
        ),
    ),
    array(
      'id'      => 'blog_single_post_admin',
      'type'    => 'switcher',
      'title'   => __( 'Post admin on?', 'alvon' ),
      'default' => true,
    ),
    array(
      'id'      => 'blog_single_post_date',
      'type'    => 'switcher',
      'title'   => __( 'Post date on?', 'alvon' ),
      'default' => true,
    ),
    array(
      'id'      => 'blog_single_post_comments',
      'type'    => 'switcher',
      'title'   => __( 'Post comments on?', 'alvon' ),
      'default' => true,
    ),
    array(
      'id'      => 'blog_single_post_cats',
      'type'    => 'switcher',
      'title'   => __( 'Post category on?', 'alvon' ),
      'default' => true,
    ),
    array(
      'id'      => 'blog_single_post_tags',
      'type'    => 'switcher',
      'title'   => __( 'Post tags on?', 'alvon' ),
      'default' => true,
    ),
    array(
      'id'           => 'alvon_post_share_enable',
      'type'         => 'switcher',
      'title'        => __( 'Single Page Share Button On/Off', 'alvon' ),
      'default'      => false,
    ),
  
  )
);


/*-----------------------------------------------------------------------------------------*
*   Alvon Portfolio Settings
* -----------------------------------------------------------------------------------------*/

$options[]      = array(
  'name'        => 'project_setting',
  'title'       => __( 'Portfolio Project Settings', 'alvon' ),
  'icon'        => 'fab fa-accusoft',
  'fields'      => array(

    array(
      'type'    => 'subheading',
      'content' => __( 'Portfolio Page Settings', 'alvon' ),
    ),
    array(
      'id'    => 'portfolio_post_slug',
      'type'  => 'text',
      'title' => __( 'Post Slug', 'alvon' ),
      'default' => 'portfolio',
    ),
    array(
      'id'    => 'alvon_project_page_posts_per_page',
      'type'  => 'text',
      'title' => __( 'Posts per page', 'alvon' ),
      'default' => '6',
    ),
    array(
      'id'           => 'portfolio_page_layout',
      'type'         => 'image_select',
      'title'        => __( 'Page Layout Style', 'alvon' ),
      'options'      => array(
        'left-sidebar'  => ALVON_PLG_URL. 'assets/imgs/sidebar_l.jpg',
        'right-sidebar' => ALVON_PLG_URL. 'assets/imgs/sidebar_r.jpg',
        'full-width'    => ALVON_PLG_URL. 'assets/imgs/fullwidth.jpg',
      ),
    ),
    array(
      'id'           => 'project_page_columns',
      'type'         => 'image_select',
      'title'        => __( 'Post Layout Style', 'alvon' ),
      'options'      => array(
        '6' => ALVON_PLG_URL. 'assets/imgs/columns-2.png',
        '4' => ALVON_PLG_URL. 'assets/imgs/columns-3.png',
        '3' => ALVON_PLG_URL. 'assets/imgs/columns-4.png',
      ),
    ),
    
    array(
      'type'    => 'subheading',
      'content' => __( 'Portfolio Single Page Settings', 'alvon' ),
    ),
    array(
      'id'      => 'alvon_portfolio_single_breadcrumb',
      'type'    => 'text',
      'title'   => __( 'Breadcrumb title', 'alvon' ),
      'default' => 'Portfolio Details',
    ), 
    array(
      'id'           => 'alvon_ps_social_share',
      'type'         => 'switcher',
      'title'        => __( 'Social Share Enable/Disable', 'alvon' ),
    ),
    array(
      'id'           => 'alvon_ps_link_btn',
      'type'         => 'switcher',
      'title'        => __( 'Enable link button', 'alvon' ),
    ),
    array(
      'id'           => 'alvon_ps_link_btn_text',
      'type'         => 'text',
      'title'        => __( 'button text', 'alvon' ),
      'default'      => __( 'Live Preview', 'alvon' ),
      'dependency'   => array( 'alvon_ps_link_btn', '==', 'true' ),
    ),
    array(
      'id'           => 'alvon_ps_link_btn_link',
      'type'         => 'text',
      'title'        => __( 'button link', 'alvon' ),
      'default'      => __( '#', 'alvon' ),
      'dependency'   => array( 'alvon_ps_link_btn', '==', 'true' ),
    ),
    array(
      'id'           => 'alvon_ps_related_post',
      'type'         => 'switcher',
      'title'        => __( 'Related Post Image Slider Enable/Disable', 'alvon' ),
    ),
    array(
      'id'           => 'related_post_title',
      'type'         => 'text',
      'title'        => __( 'Related post title', 'alvon' ),
      'default'      => 'Releted Works',
      'dependency'   => array( 'alvon_ps_related_post', '==', 'true' ),
    ),
    array(
      'id'           => 'related_post_per_page',
      'type'         => 'text',
      'title'        => __( 'Related posts per page', 'alvon' ),
      'default'      => '5',
      'dependency'   => array( 'alvon_ps_related_post', '==', 'true' ),
    ),

    
  )
);


/*-----------------------------------------------------------------------------------------*
*   Alvon Service Settings
* -----------------------------------------------------------------------------------------*/

$options[]      = array(
  'name'        => 'service_setting',
  'title'       => __( 'Service Settings', 'alvon' ),
  'icon'        => 'fa fa-medkit',
  'fields'      => array(
    
    array(
      'type'    => 'subheading',
      'content' => __( 'Service Single Page Settings', 'alvon' ),
    ),
    array(
      'id'    => 'service_post_slug',
      'type'  => 'text',
      'title' => __( 'Post Slug', 'alvon' ),
      'default' => 'service',
    ),
    array(
      'id'      => 'alvon_service_single_breadcrumb_title',
      'type'    => 'text',
      'title'   => __( 'Service Single Breadcrumb Title', 'alvon' ),
      'default' => 'Service Details'
    ),
  )
);


/*-----------------------------------------------------------------------------------------*
*   Alvon Team Settings
* -----------------------------------------------------------------------------------------*/

$options[]      = array(
  'name'        => 'team_setting',
  'title'       => __( 'Team Settings', 'alvon' ),
  'icon'        => 'fa fa-medkit',
  'fields'      => array(
    
    array(
      'type'    => 'subheading',
      'content' => __( 'Team Single Page Settings', 'alvon' ),
    ),
     array(
      'id'      => 'alvon_team_single_breadcrumb_title',
      'type'    => 'text',
      'title'   => __( 'Team Single Breadcrumb Title', 'alvon' ),
      'default' => 'Team Details'
    ),
  )
);


/*-----------------------------------------------------------------------------------------*
*   Alvon Portfolio Settings
* -----------------------------------------------------------------------------------------*/

$options[]      = array(
  'name'        => 'faq_setting',
  'title'       => __( 'Faq page settings', 'alvon' ),
  'icon'        => 'fab fa-accusoft',
  'fields'      => array(

    array(
      'type'    => 'subheading',
      'content' => __( 'Faq Page Settings', 'alvon' ),
    ),
    array(
      'id'           => 'faq_page_layout',
      'type'         => 'image_select',
      'title'        => __( 'Page Layout Style', 'alvon' ),
      'options'      => array(
        'left-sidebar'  => ALVON_PLG_URL. 'assets/imgs/sidebar_l.jpg',
        'right-sidebar' => ALVON_PLG_URL. 'assets/imgs/sidebar_r.jpg',
        'full-width'    => ALVON_PLG_URL. 'assets/imgs/fullwidth.jpg',
      ),
    ),
    
  )
);


// ===================================================================
// 404 Page Settings =
// ===================================================================

$options[]      = array(
  'name'        => '404_page',
  'title'       => __( '404 Page Settings', 'alvon' ),
  'icon'        => 'fa fa-frown-o',
  // begin: fields
  'fields'      => array(

    array(
      'id'    => '404_page_name',
      'type'  => 'text',
      'title' => __( 'Page Name', 'alvon' ),
      'default' => '404 Page'
    ),
    array(
      'id'    => 'no_title',
      'type'  => 'text',
      'title' => __( 'Number Title', 'alvon' ),
      'default' => '404'
    ),
    array(
      'id'    => '404_title',
      'type'  => 'text',
      'title' => __( 'Title', 'alvon' ),
      'default' => 'Sorry Page Not Found'
    ),
    array(
      'id'    => '404_desc',
      'type'  => 'textarea',
      'title' => __( 'Description', 'alvon' ),
      'default' => 'The page you are looking for was removed or might never existed.'
    ),
    array(
      'id'    => 'alvon_404_btn_txt',
      'type'  => 'text',
      'title' => __( 'Button Text', 'alvon' ),
      'default' => 'Go To Home'
    ),

    array(
      'id'    => 'alvon_404_img',
      'type'  => 'image',
      'title' => __( '404 Image', 'alvon' ),
      'default' => ALVON_PLG_URL. '/assets/imgs/404.png',
    ),
  
  )
);


// ===================================================================
// Search Page Settings =
// ===================================================================

$options[]      = array(
  'name'        => 'search_page',
  'title'       => __( 'Search Page Settings', 'alvon' ),
  'icon'        => 'fa fa-search-plus',
  // begin: fields
  'fields'      => array(
    array(
      'type'  => 'heading',
      'content' => __( 'No Search Reasult Page', 'alvon' ),
    ),
    array(
      'id'    => 'search_none_page_title',
      'type'  => 'text',
      'title' => __( 'Search none page title', 'alvon' ),
      'default' => 'Nothing Found'
    ),
    array(
      'id'    => 'search_none_page_desc',
      'type'  => 'textarea',
      'title' => __( 'Page Sub Title', 'alvon' ),
      'default' => 'Sorry, but nothing matched your search terms. Please try again with some different keywords.'
    ),
  
  )
);


// ===================================================================
// Footer Options =
// ===================================================================

$options[]      = array(
  'name'        => 'footer_setting',
  'title'       => __( 'Footer Settings', 'alvon' ),
  'icon'        => 'fa fa-rub',
  // begin: fields
  'fields'      => array(
    array(
      'type'  => 'heading',
      'content' => __( 'All Footer / Common Footer', 'alvon' ),
    ),
    array(
      'id'      => 'copyright_footer_switch',
      'type'    => 'switcher',
      'title'   => __( 'Copyright footer switch', 'alvon' ),
      'default' => true,
    ),
    array(
      'id'        => 'copyright_text',
      'type'      => 'textarea',
      'title'     => __( 'Copyright Text', 'alvon' ),
      'default'   => '&copy; 2021 <a href="http://pluginspoint.com/alvon">Alvon</a>. All Rights Reserved',
      'sanitize'  => false,
      'dependency'   => array( 'copyright_footer_switch', '==', 'true' ),
    ),

    /* Footer 1 or default footer */
    array(
      'type'  => 'heading',
      'content' => __( 'Footer 1/Default', 'alvon' ),
    ),
    array(
      'id'        => 'footer_bg',
      'type'      => 'image',
      'title'     => __( 'Footer Backgroud Image', 'alvon' ),
      'default'   => ALVON_PLG_URL. 'assets/imgs/footer1-bg.jpg',
    ),
    array(
      'id'        => 'footer1_anim_img',
      'type'      => 'image',
      'title'     => __( 'Footer 1 Animate Image', 'alvon' ),
      'default'   => ALVON_PLG_URL. 'assets/imgs/footer_shape.png',
    ),

    /* Footer 2 */
    array(
      'type'  => 'heading',
      'content' => __( 'Footer 2', 'alvon' ),
    ),
    array(
      'id'        => 'footer_bg2',
      'type'      => 'color_picker',
      'title'     => __( 'Footer Backgroud Color', 'alvon' ),
      'default' => '#000b41',
    ),
    array(
      'id'    => 'footer2_cta_switch',
      'type'    => 'switcher',
      'title' => __( 'Footer 2 Call To Action', 'alvon' ),
    ),
    array(
      'id'        => 'footer2_cta_img',
      'type'      => 'image',
      'title'     => __( 'Call to action backgroud image', 'alvon' ),
      'default'   => ALVON_PLG_URL. 'assets/imgs/cta_bg.jpg',
      'dependency'   => array( 'footer2_cta_switch', '==', 'true' ),
    ),
    
    array(
      'id'          => 'footer2_cta_sub_title',
      'type'        => 'text',
      'title'       => __( 'Sub Title', 'alvon' ),
      'default'     => 'Hire Us Now',
      'dependency'   => array( 'footer2_cta_switch', '==', 'true' ),
    ),
    array(
      'id'          => 'footer2_cta_title',
      'type'        => 'text',
      'title'       => __( 'Title', 'alvon' ),
      'default'     => 'Estimate Your Project & Say Hi On Mail',
      'dependency'  => array( 'footer2_cta_switch', '==', 'true' ),
    ),
    array(
      'id'          => 'footer2_cta_btn_text',
      'type'        => 'text',
      'title'       => __( 'Button Text', 'alvon' ),
      'default'     => 'Mail us',
      'dependency'   => array( 'footer2_cta_switch', '==', 'true' ),
    ),
    array(
      'id'          => 'footer2_cta_btn_link',
      'type'        => 'text',
      'title'       => __( 'Button Link', 'alvon' ),
      'default'     => '#',
      'dependency'   => array( 'footer2_cta_switch', '==', 'true' ),
    ),


    /* Footer 3 */
    array(
      'type'  => 'heading',
      'content' => __( 'Footer 3', 'alvon' ),
    ),
    array(
      'id'        => 'footer_bg3',
      'type'      => 'image',
      'title'     => __( 'Footer Backgroud Image', 'alvon' ),
      'default'   => ALVON_PLG_URL. 'assets/imgs/footer3-bg.jpg',
    ),
    array(
      'id'        => 'footer3_logo',
      'type'      => 'image',
      'title'     => __( 'Footer Logo Image', 'alvon' ),
      'default'     => ALVON_PLG_URL. 'assets/imgs/logo.png',
    ),
    array(
      'id'          => 'footer3_desc',
      'type'        => 'text',
      'title'       => __( 'Description', 'alvon' ),
      'default'     => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullam co laboris nisi ut aliquip ex ea commodo consequat.',
    ),
    array(
      'id'              => 'footer3_social_buttons',
      'type'            => 'group',
      'title'           => __( 'Footer 3 social buttons', 'alvon' ),
      'button_title'    => __( 'Add new', 'alvon' ),
      'accordion_title' => __( 'Add new social', 'alvon' ),
      'fields'          => array(
        array(
          'id'          => 'social_icon',
          'type'        => 'icon',
          'title'       => __( 'Select Icon', 'alvon' ),
        ),
        array(
          'id'          => 'profile_link',
          'type'        => 'text',
          'title'       => __( 'Profile link', 'alvon' ),
        ),
      ),
    ),

  ),
  // end: fields
);


// ------------------------------
// backup                       -
// ------------------------------

$options[]   = array(
  'name'     => 'backup_section',
  'title'    => __( 'Alvon Backup', 'alvon' ),
  'icon'     => 'fa fa-shield',
  'fields'   => array(

    array(
      'type'    => 'notice',
      'class'   => 'warning',
      'content' => __( 'You can save your current options. Download a Backup and Import.', 'alvon' ),
    ),
    array(
      'type'    => 'backup',
    ),

  )
);


ALVONFramework::instance( $settings, $options );
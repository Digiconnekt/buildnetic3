<?php 

function alvon_body_fonts_url() {
  $font_url = '';
  /*
  Translators: If there are characters in your language that are not supported
  by chosen font(s), translate this to 'off'. Do not translate into your own language.
   */
  if ( 'off' !== _x( 'on', 'Google font: on or off', 'alvon' ) ) {

    if( function_exists( 'alvon_framework_init' ) ) {

      $body_typo_data = alvon_get_option('alvon_body_font');
      $heading_typo_data = alvon_get_option('alvon_heading_font');

      if( !empty($body_typo_data) || !empty($heading_typo_data)) {

        $body_font = $body_typo_data['family'];
        $heading_font = $heading_typo_data['family'];

        $font_url = add_query_arg( 'family', esc_attr( $body_font.':400,400i,700|'. $heading_font ).': 200,300,400,600,600i,700,800,800i,900', "//fonts.googleapis.com/css" );

      } else {
        $font_url = add_query_arg( 'family', urlencode( 'Karla:400,400i,700|Nunito:200,300,400,600,600i,700,800,800i,900' ), "//fonts.googleapis.com/css" );
      } 
    } else {
      $font_url = add_query_arg( 'family', urlencode( 'Karla:400,400i,700|Nunito:200,300,400,600,600i,700,800,800i,900' ), "//fonts.googleapis.com/css" );
    }
  }
  return $font_url;
}



function alvon_scripts() {

  /** lifestyleblog Fonts Load.
  --------------------------------------------------------------------------------------------------- */
  wp_enqueue_style( 'alvon-body-fonts',  alvon_body_fonts_url(), '', '1.0.0', 'screen' );

	/**  css include.
	--------------------------------------------------------------------------------------------------- */
  wp_enqueue_style('bootstrap', ALVON_CSS . 'bootstrap.min.css');
  wp_enqueue_style('animate', ALVON_CSS . 'animate.min.css');
  wp_enqueue_style('magnific-popup', ALVON_CSS . 'magnific-popup.css');
  wp_enqueue_style('fontawesome-all', ALVON_CSS . 'fontawesome-all.min.css');
  wp_enqueue_style('meanmenu', ALVON_CSS . 'meanmenu.css');
  wp_enqueue_style('nice-select', ALVON_CSS . 'nice-select.css');
  wp_enqueue_style('aos', ALVON_CSS . 'aos.css');
  wp_enqueue_style('slick', ALVON_CSS . 'slick.css');
  wp_enqueue_style('alvon-default', ALVON_CSS . 'alvon-default.css');
  wp_enqueue_style('alvon-main', ALVON_CSS . 'alvon-main.css');
  wp_enqueue_style('alvon-responsive', ALVON_CSS . 'alvon-responsive.css');

  //Alvon Core style
  wp_enqueue_style('alvon-style', get_stylesheet_uri() );

	/**  js include.
	--------------------------------------------------------------------------------------------------------------------*/
  wp_enqueue_script('popper', ALVON_JS . 'popper.min.js', array('jquery'), '', true);
  wp_enqueue_script('bootstrap', ALVON_JS . 'bootstrap.min.js', array('jquery'), '4.0.0', true);
  wp_enqueue_script('isotope-pkgd', ALVON_JS . 'isotope.pkgd.min.js', array('jquery'), '3.0.6', true);
  wp_enqueue_script('slick', ALVON_JS . 'slick.min.js', array('jquery'), '', true);
  wp_enqueue_script('jquery-meanmenu', ALVON_JS . 'jquery.meanmenu.min.js', array('jquery'), '', true);
  wp_enqueue_script('aos', ALVON_JS . 'aos.js', array('jquery'), '', true);
  wp_enqueue_script('wow', ALVON_JS . 'wow.min.js', array('jquery'), '', true);
  wp_enqueue_script('jquery-counterup', ALVON_JS . 'jquery.counterup.min.js', array('jquery'), '1.0', true);
  wp_enqueue_script('jquery-waypoints', ALVON_JS . 'jquery.waypoints.min.js', array('jquery'), '2.0.3', true);
  wp_enqueue_script('jquery-nice-select', ALVON_JS . 'jquery.nice-select.min.js', array('jquery'), '1.0', true);
  wp_enqueue_script( 'imagesloaded' );
  wp_enqueue_script('jquery-magnific-popup', ALVON_JS . 'jquery.magnific-popup.min.js', array('jquery'), '1.1.0', true);
  wp_enqueue_script('alvon-main', ALVON_JS . 'alvon-main.js', array('jquery'), '1.0.0', true);

  if (is_singular() && comments_open() && get_option('thread_comments')) {
    wp_enqueue_script('comment-reply');
  }
}

add_action('wp_enqueue_scripts', 'alvon_scripts');
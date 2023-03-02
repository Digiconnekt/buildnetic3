<?php 
/*------------------------------------------------------------------------------------------------------------------*/
/*  Alvon Portfolio Slider
/*------------------------------------------------------------------------------------------------------------------*/

vc_map(array(
  'base' => 'alvon_portfolio_post_slider',
  'name' => __('Portfolio Slider', 'alvon'),
  'category' => __('Alvon', 'alvon'),
  'icon' => 'fa fa-qrcode',
  'params' => array(

    array(
      'param_name' => 'portfolio_items',
      'type' => 'param_group',
      'params' => array(

        array(
          "param_name" => "portfolio_img",
          "type" => "attach_image",
          "heading" => __("Icon Image", "alvon"),
        ),
        array(
          "param_name"  => "btn_link_type",
          "type"      => "dropdown",
            "heading"     => __("Link Type", "alvon"),
            "std"       => __("1", "alvon"),
            "value" => array(
              'Link to post' => 1,
              'External Link' => 2,
            ),
            "description"   => __("Link Type", "alvon"),
        ),
        array(
          "param_name"  => "btn_link_to_page",
          "type"      => "dropdown",
            "heading"     => __("Link to post", "alvon"),
            "value"     => alvon_get_portfolio_as_list(),
            "description"   => __("Link Type", "alvon"),
          "dependency" => array(
            "element"=> "btn_link_type",
            "value"=> array("1"),
          )
        ),
        array(
          "param_name"  => "btn_link_to_external",
          "type"      => "textfield",
            "heading"     => __("External Link", "alvon"),
            "description"   => __("External Link", "alvon"),
          "dependency" => array(
            "element"=> "btn_link_type",
            "value"=> array("2"),
          )
        ),

      )
    ),

    array(
      "param_name" => "slide_count",
      'heading' => __( "Desktop Count",  "alvon" ),
      "type" => "textfield",
      "std" => __("3", "alvon"),
      "description" => __( "Display Logo in extea large desktop device", "alvon" ),
    ),
    array(
      "param_name" => "desktop_count",
      'heading' => __( "Desktop Count",  "alvon" ),
      "type" => "textfield",
      "std" => __("3", "alvon"),
      "description" => __( "Display Logo in desktop device", "alvon" ),
    ),
    array(
      'heading' => __( "Tablet Count",  "alvon" ),
      "param_name" => "tablet_count",
      "type" => "textfield",
        "std" => __("2", "alvon"),
        "description" => __( "Display Logo in tablet device", "alvon" ),
    ),
    array(
      'heading' => __( "Mobile Count",  "alvon" ),
      "param_name" => "mobile_count",
      "type" => "textfield",
      "std" => __("1", "alvon"),
      "description" => __( "Display logo in mobile device", "alvon" ),
    ),

    array(
      'param_name' => 'enable_autoplay',
      'type' => 'dropdown',
      'heading' => __( 'Autoplay',  "alvon" ),
      "std" => __("true", "alvon"),
      'value' => array(
        __( 'Yes',  "alvon"  ) => 'true',
        __( 'No',  "alvon"  ) => 'false',
      ),
      "description" => __( "If you want to enable or disable slider autoplay, please please select form box", "alvon" ),
    ),
    array(
      'param_name' => 'enable_autoplay_speed',
      'type' => 'dropdown',
      'heading' => __( 'Autoplay speed',  "alvon" ),
      "std" => __("4000", "alvon"),
      'value' => array(
        __( '15000',  "alvon"  ) => '15000',
        __( '1000',  "alvon"  ) => '1000',
        __( '2000',  "alvon"  ) => '2000',
        __( '3000',  "alvon"  ) => '3000',
        __( '4000',  "alvon"  ) => '4000',
        __( '5000',  "alvon"  ) => '5000',
        __( '6000',  "alvon"  ) => '6000',
        __( '7000',  "alvon"  ) => '7000',
        __( '8000',  "alvon"  ) => '8000',
        __( '9000',  "alvon"  ) => '9000',
        __( '10000',  "alvon"  ) => '10000',
        __( '11000',  "alvon"  ) => '11000',
        __( '12000',  "alvon"  ) => '12000',
        __( '13000',  "alvon"  ) => '13000',
        __( '14000',  "alvon"  ) => '14000',
      ),
      "description" => __( "If you want to enable or disable slider autoplay speed, please please select form box", "alvon" ),
    ),

    array(
      'param_name' => 'enable_navigation',
      'type' => 'dropdown',
      'heading' => __( 'Navigation?',  "alvon" ),
      "std" => __("true", "alvon"),
      'value' => array(
        __( 'No',  "alvon"  ) => 'false',
        __( 'Yes',  "alvon"  ) => 'true',
      ),
      "description" => __( "If you want to enable or disable slider navigation, please please select form box", "alvon" ),
    ),

  ),
));


/*  Portfolio post grid shortcode
/*-----------------------------------------------------------------------*/

add_shortcode( 'alvon_portfolio_post_slider', 'alvon_portfolio_post_slider_shortcode' );
function alvon_portfolio_post_slider_shortcode($atts, $content = null) {
  extract( shortcode_atts(
    array(
      'portfolio_items'       => '',
      'slide_count'           => '3',
      'desktop_count'         => '3',
      'tablet_count'          => '2',
      'mobile_count'          => '1',
      'enable_autoplay'       => 'true',
      'enable_autoplay_speed' => '4000',
      'enable_navigation'     => 'true',
      ), $atts )
  );
  ob_start();

  if (!empty($atts['portfolio_items'])) {
    $portfolio_items = vc_param_group_parse_atts($atts['portfolio_items']);
  } else {
    $portfolio_items = '';
  }

?>

<script>
    jQuery(document).ready(function(){

      jQuery('.project-active').slick({
        centerMode: true,
        centerPadding: '0',
        slidesToShow: <?php echo esc_attr( $slide_count ); ?>,
        arrows: <?php echo esc_attr( $enable_navigation ); ?>,
        prevArrow: '<button type="button" class="slick-prev"><i class="fal fa-arrow-left"></i></button>',
        nextArrow: '<button type="button" class="slick-next"><i class="fal fa-arrow-right"></i></button>',
        dots: false,
        responsive: [
          {
            breakpoint: 1200,
            settings: {
              arrows: false,
              centerMode: true,
              centerPadding: '0px',
              slidesToShow: <?php echo esc_attr( $desktop_count ); ?>
            }
          },
          {
            breakpoint: 992,
            settings: {
              arrows: false,
              centerMode: true,
              centerPadding: '0px',
              slidesToShow: <?php echo esc_attr( $tablet_count ); ?>
            }
          },
          {
            breakpoint: 767,
            settings: {
              arrows: false,
              centerMode: true,
              centerPadding: '0px',
              slidesToShow: <?php echo esc_attr( $mobile_count ); ?>
            }
          },
        ]
      });


    });

  </script> 


<!-- Portfolio
============================================= -->

  <!-- portfolio-area -->
  <div class="project-active">
    <?php 
      if (is_array( $portfolio_items )) {
        foreach( $portfolio_items as $item) {

          if (!empty($item['portfolio_img'])) {
            $p_image = $item['portfolio_img'];
          } else {
            $p_image = '';
          }
          $portfolio_image = get_vc_image( $p_image );

          if (!empty($item['btn_link_type'])) {
            $btn_link_type = $item['btn_link_type'];
          } else {
            $btn_link_type = '';
          }
          if (!empty($item['btn_link_to_page'])) {
            $btn_link_to_page = $item['btn_link_to_page'];
          } else {
            $btn_link_to_page = '';
          }
          if (!empty($item['btn_link_to_external'])) {
            $btn_link_to_external = $item['btn_link_to_external'];
          } else {
            $btn_link_to_external = '';
          }

          if( $btn_link_type == 1 ){
            $link_source = get_page_link($btn_link_to_page);
          } elseif( $btn_link_type == 2 ){
            $link_source = $btn_link_to_external;
          } else {
            $link_source = get_page_link($btn_link_to_page);
          }

          if (!empty($item['custom_class'])) {
            $custom_class = $item['custom_class'];
          } else {
            $custom_class = '';
          }

    ?>

    <div class="col-lg-4">
        <div class="single-project <?php echo esc_attr( $custom_class ); ?>">
            <div class="project-thumb">
                <a href="<?php echo esc_url( $link_source ); ?>"><img src="<?php echo esc_url( $portfolio_image ); ?>" alt="img"></a>
            </div>
        </div>
    </div>
    <?php }
    } ?>
  </div>
  <!-- portfolio-area-end -->

<!-- End Of Portfolio
============================================= -->

<?php
  return ob_get_clean();
}
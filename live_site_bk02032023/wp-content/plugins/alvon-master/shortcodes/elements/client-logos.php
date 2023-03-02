<?php 
/*------------------------------------------------------------------------------------------------------------------*/
/*  Alvon client logo slider
/*------------------------------------------------------------------------------------------------------------------*/

vc_map(array(
  'base' => 'alvon_client_logo_slider',
  'name' => __('Client Logo Slider', 'alvon'),
  'category' => __('Alvon', 'alvon'),
  'icon' => 'fa fa-sliders',
  'params' => array(

    array(
      "param_name" => "brand_logo_img",
      "type" => "attach_images",
        "heading" => __("Client logo image", "alvon"),
    ),

    array(
      "param_name" => "big_desktop_count",
      'heading' => __( "Desktop Count",  "alvon" ),
      "type" => "textfield",
        "std" => __("5", "alvon"),
        "description" => __( "Display Logo in desktop device", "alvon" ),
    ),
    array(
      "param_name" => "desktop_count",
      'heading' => __( "Medium Desktop Count",  "alvon" ),
      "type" => "textfield",
        "std" => __("4", "alvon"),
        "description" => __( "Logo in medium desktop device", "alvon" ),
    ),
    array(
      'heading' => __( "Tablet Count",  "alvon" ),
      "param_name" => "tablet_count",
      "type" => "textfield",
        "std" => __("3", "alvon"),
        "description" => __( "Display Logo in tablet device", "alvon" ),
    ),
    array(
      "param_name" => "small_count",
      'heading' => __( "Small Count",  "alvon" ),
      "type" => "textfield",
        "std" => __("2", "alvon"),
        "description" => __( "Display logo in small device", "alvon" ),
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
      'value' => array(
        __( 'No',  "alvon"  ) => 'false',
        __( 'Yes',  "alvon"  ) => 'true',
      ),
      "description" => __( "If you want to enable or disable slider navigation, please please select form box", "alvon" ),
    ),
    
  ),
));

/*  Clients logo shortcode
/*-----------------------------------------------------------------------*/

add_shortcode( 'alvon_client_logo_slider', 'alvon_client_logo_slider_shortcode' );
function alvon_client_logo_slider_shortcode($atts, $content = null) {
  extract( shortcode_atts(
    array(
      'brand_logo_img'        => '',
      'enable_navigation'     => 'false',
      'enable_autoplay'       => 'true',
      'enable_autoplay_speed' => '5000',
      'big_desktop_count'     => '5',
      'desktop_count'         => '4',
      'tablet_count'          => '3',
      'small_count'           => '2',
      'mobile_count'          => '1',
      ), $atts )
  );
  ob_start();

  $slide_images = explode( ',', $brand_logo_img );

?>

<script type="text/javascript">

  jQuery(document).ready(function(){

    jQuery('.brand-active').slick({
      dots: false,
      arrows: false,
      infinite: true,
      speed: <?php echo esc_attr( $enable_autoplay_speed ); ?>,
      autoplay: <?php echo esc_attr( $enable_autoplay ); ?>,
      slidesToShow: <?php echo esc_attr( $big_desktop_count ); ?>,
      slidesToScroll: 2,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: <?php echo esc_attr( $desktop_count ); ?>,
            slidesToScroll: 3,
            infinite: true,
          }
        },
        {
          breakpoint: 992,
          settings: {
            slidesToShow: <?php echo esc_attr( $tablet_count ); ?>,
            slidesToScroll: 2,
          }
        },
        {
          breakpoint: 767,
          settings: {
            slidesToShow: <?php echo esc_attr( $small_count ); ?>,
            slidesToScroll: 2,
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: <?php echo esc_attr( $mobile_count ); ?>,
            slidesToScroll: 1
          }
        }
      ]
    });

  });


</script>  

  <!-- brand-area -->
  <div class="brand-active">
    <?php foreach ($slide_images as $key => $value) { 
      $image_id = $value;
      $attachment = wp_get_attachment_image_src( $image_id, 'full' );
      $image = $attachment['0'];
    ?>
      <div class="single-brand">
        <img src="<?php echo esc_url($image); ?>" alt="">
      </div>
    <?php } ?>
  </div>

<?php
  return ob_get_clean();
}

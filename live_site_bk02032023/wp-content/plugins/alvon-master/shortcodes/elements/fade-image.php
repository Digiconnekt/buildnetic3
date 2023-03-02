<?php 
/*------------------------------------------------------------------------------------------------------------------*/
/*  Alvon Pretty Icon Item
/*------------------------------------------------------------------------------------------------------------------*/
vc_map(array(
  'base' => 'alvon_fade_image',
  'name' => __('Fade Image', 'alvon'),
  'category' => __('Alvon', 'alvon'),
  'icon' => 'fas fa-chart-line',
  'params' => array(

    array(
      "param_name" => "fade_image",
      "type" => "attach_image",
      "heading" => __("Fade Image", "alvon"),
    ),
    array(
      "param_name" => "custom_class",
      "type" => "textfield",
      "heading" => __("Custom Class", "alvon"),
      'admin_label' => false,
    ),


  ),
));

/*  Pretty Icon Item Shortcode
/*-----------------------------------------------------------------------*/

add_shortcode( 'alvon_fade_image', 'alvon_fade_image_shortcode' );
function alvon_fade_image_shortcode($atts, $content = null) {
  extract( shortcode_atts(
    array(
      'fade_image'   => '',
      'custom_class' => '',
      ), $atts )
  );
  ob_start();

  $fade_image = get_vc_image( $fade_image, 'full' );

  ?>

  <div class="choice-shape <?php echo esc_attr( $custom_class ); ?>" data-aos="fade-down-right" data-aos-easing="linear" data-aos-duration="1500"><img src="<?php echo esc_url( $fade_image ); ?>" alt="<?php esc_attr_e( 'Fade image', 'alvon' ); ?>"></div>

<?php
  return ob_get_clean();
}
<?php 

/*------------------------------------------------------------------------------------------------------------------*/
/*  Alvon Video
/*------------------------------------------------------------------------------------------------------------------*/

vc_map(array(
  'base' => 'alvon_video',
  'name' => __('Video', 'alvon'),
  'category' => __('Alvon', 'alvon'),
  'icon' => 'fa fa-file-video-o',
  'params' => array(

    array(
      "param_name" => "video_bg_img",
      "type" => "attach_image",
      "heading" => __("Video Background Image", "alvon"),
      'admin_label' => false,
    ),
    array(
      "param_name"  => "video_link",
      "type"      => "textfield",
      "heading"     => __("Video Link", "alvon"),
    ),

    // add params same as with any other content elemen
    array(
      'param_name' => 'animation',
      'type' => 'animation_style',
      'heading' => __( 'Animation Style', 'alvon' ),
      'description' => __( 'Choose your animation style', 'alvon' ),
    ),
    array(
      "param_name"  => "anim_delay",
      "type"      => "dropdown",
        "heading"     => __("Animation delay", "alvon"),
        "value" => alvon_anim_delay(),
      "description"   => __("Select animation delay", "alvon"),
      'admin_label' => false,
    ),
    array(
      'param_name' => 'custom_btn_class',
      'type' => 'textfield',
      'heading' => __( 'Custom Button Class', 'alvon' ),
    ),
      
  ),
));

/*  Section Head Shortcode
/*-----------------------------------------------------------------------*/

add_shortcode( 'alvon_video', 'alvon_video_shortcode' );
function alvon_video_shortcode($atts, $content = null) {
  extract( shortcode_atts(
    array(
      'video_bg_img'         => '',
      'video_link'           => '',
      'animation'            => '',
      'anim_delay'           => '0.2s',
      'custom_btn_class'     => '',
      ), $atts )
  );
  ob_start();

  $video_bg_img = get_vc_image($video_bg_img, 'full');

?>
  <!-- Alvon Button
  ============================================= -->
  <div class="services-video-thumb p-relative wow <?php echo esc_attr( $animation . ' ' . $custom_btn_class ); ?>" data-wow-delay="<?php echo esc_attr($anim_delay); ?>">
    <img src="<?php echo esc_url( $video_bg_img ); ?>" alt="<?php esc_attr_e( 'video bg img', 'alvon' ); ?>">
    <a href="<?php echo esc_url($video_link); ?>" class="popup-video"><i class="fas fa-play"></i></a>
  </div>
  <!-- End Of Alvon Button
  ============================================= -->

<?php
  return ob_get_clean();
}
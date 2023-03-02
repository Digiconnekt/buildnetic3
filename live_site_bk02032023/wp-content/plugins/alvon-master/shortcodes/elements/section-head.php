<?php 
/*------------------------------------------------------------------------------------------------------------------*/
/*  Alvon Section Head
/*------------------------------------------------------------------------------------------------------------------*/

vc_map(array(
  'base' => 'alvon_section_head',
  'name' => __('Section Head', 'alvon'),
  'category' => __('Alvon', 'alvon'),
  'icon' => 'fa fa-header',
  'params' => array(

    array(
      "param_name" => "section_sub_title",
      "type" => "textfield",
      "heading" => __("Sub Title", "alvon"),
    ),
    array(
      "param_name" => "section_title",
      "type" => "textfield",
      "heading" => __("Title", "alvon"),
    ),
    array(
      "param_name" => "section_title_underline",
      "type" => "textfield",
      "heading" => __("Underline Title", "alvon"),
    ),
    array(
      "param_name" => "box_number",
      "type" => "textfield",
      "heading" => __("Box Number", "alvon"),
    ),
    array(
      'param_name' => 'sh_text_align',
      'type' => 'dropdown',
      'heading' => __( 'Please select your section text align',  "alvon" ),
      'value' => array(
        __( 'Select text align',  "alvon"  ) => ' ',
        __( 'Text Align Center',  "alvon"  ) => 'text-center',
        __( 'Text Align Left',  "alvon"  )   => 'text-left',
        __( 'Text Align Right',  "alvon"  )  => 'text-right',
      ),
      "description" => __( "There have more section head style. check all one by one for your need.", "alvon" )
    ),
    array(
      'param_name' => 'animation',
      'type' => 'animation_style',
      'heading' => __( 'Animation Style', 'alvon' ),
      'description' => __( 'Choose your animation style', 'alvon' ),
    ),
    array(
      "param_name"  => "anim_delay",
      "type"      => "dropdown",
      "heading"     => __("Animaiion delay", "alvon"),
      "value" => alvon_anim_delay(),
      "description"   => __("Select animation delay", "alvon"),
      'admin_label' => false,
    ),
    array(
      "param_name" => "custom_class",
      "type" => "textfield",
      "heading" => "Custom Class",
    ),

    // Style group
    array(
      "param_name" => "title_color",
      "type" => "colorpicker",
      "heading" => __("Title Color", "alvon"),
      'admin_label' => false,
      "group" => esc_html__( "Styling", 'alvon'),
    ),
    array(
      "param_name" => "title_font_size",
      "type" => "textfield",
      "heading" => __("Title Font Size", "alvon"),
      'admin_label' => false,
      "group" => esc_html__( "Styling", 'alvon'),
      "description"   => __("Font size with px ( like 28px )", "alvon"),
    ),
    array(
      "param_name" => "sub_title_color",
      "type" => "colorpicker",
      "heading" => __("Sub Title Color", "alvon"),
      'admin_label' => false,
      "group" => esc_html__( "Styling", 'alvon'),
    ),
    array(
      "param_name" => "sub_title_font_size",
      "type" => "textfield",
      "heading" => __("Sub Title Font Size", "alvon"),
      'admin_label' => false,
      "group" => esc_html__( "Styling", 'alvon'),
      "description"   => __("Font size with px ( like 28px )", "alvon"),
    ),
    array(
      "param_name" => "box_bg_color",
      "type" => "colorpicker",
      "heading" => __("Number box background color", "alvon"),
      'admin_label' => false,
      "group" => esc_html__( "Styling", 'alvon'),
    ),
    array(
      "param_name" => "box_font_color",
      "type" => "colorpicker",
      "heading" => __("Number box font color", "alvon"),
      'admin_label' => false,
      "group" => esc_html__( "Styling", 'alvon'),
    ),
  ),
));


/*  Section Head Shortcode
/*-----------------------------------------------------------------------*/

add_shortcode( 'alvon_section_head', 'alvon_section_head_shortcode' );
function alvon_section_head_shortcode($atts, $content = null) {
  extract( shortcode_atts(
    array(
      'section_sub_title'       => '',
      'section_title'           => '',
      'section_title_underline' => '',
      'box_number'              => '',
      'sh_text_align'           => '',
      'animation'               => '',
      'anim_delay'              => '',
      'custom_class'            => '',
      'title_color'             => '',
      'title_font_size'         => '',
      'sub_title_color'         => '',
      'sub_title_font_size'     => '',
      'box_bg_color'            => '',
      'box_font_color'          => '',
      ), $atts )
  );
  ob_start();

  if ($sh_text_align == 'text-left') {
    $content_position = 'text-left'. ' ' . $custom_class;
  } elseif ($sh_text_align == 'text-center') {
    $content_position = 'text-center'. ' ' . $custom_class;
  } elseif ( $sh_text_align == 'text-right') {
    $content_position = 'text-right'. ' ' . $custom_class;
  } else {
    $content_position = ' '. $custom_class;
  }


  $e_uniqid     = uniqid();
  $inline_style = '';
  if ( $title_color || $title_font_size ) {
    $inline_style .= '.sec-head-style'. $e_uniqid .' h2 {';
    $inline_style .= ( $title_color ) ? 'color:'. $title_color  .' !important;' : '';
    $inline_style .= ( $title_font_size ) ? 'font-size:'. $title_font_size  .' !important;' : '';
    $inline_style .= '}';
  }
  if ( $title_color ) {
    $inline_style .= '.sec-head-style'. $e_uniqid .' h2 span {';
    $inline_style .= ( $title_color ) ? 'color:'. $title_color  .' !important;' : '';
    $inline_style .= '}';
  }
  if ( $sub_title_color || $sub_title_font_size ) {
    $inline_style .= '.sec-head-style'. $e_uniqid .' span.sub-title {';
    $inline_style .= ( $sub_title_color ) ? 'color:'. $sub_title_color  .' !important;' : '';
    $inline_style .= ( $sub_title_font_size ) ? 'font-size:'. $sub_title_font_size  .' !important;' : '';
    $inline_style .= '}';
  }
  if ( $box_bg_color || $box_font_color ) {
    $inline_style .= '.sec-head-style'. $e_uniqid .' h2 small {';
    $inline_style .= ( $box_bg_color ) ? 'background:'. $box_bg_color  .' !important;' : '';
    $inline_style .= ( $box_font_color ) ? 'color:'. $box_font_color  .' !important;' : '';
    $inline_style .= '}';
  }
  add_inline_style( $inline_style );
  $styled_class  = 'sec-head-style'. $e_uniqid;

?>

<!-- Section head
============================================= -->
<div class="section-title title-tag <?php echo esc_attr( $content_position.' wow '.$animation.' '.$styled_class ); ?>" data-wow-delay="<?php echo esc_attr($anim_delay); ?>">
  <?php if ($section_sub_title) { ?>
  <span class="sub-title"><?php echo esc_html($section_sub_title); ?></span>
  <?php } if ( $section_title || $section_title_underline ) { ?>
  <h2>
    <?php echo esc_html($section_title); 
    if ( $section_title_underline ) {
    ?> 
      <span><?php echo esc_html($section_title_underline); ?></span>
    <?php } if ( $box_number ) { ?>
      <small data-aos="zoom-in-down" class="aos-init aos-animate"><?php echo esc_html($box_number); ?></small>
    <?php } ?>
  </h2>
  <?php } ?>
</div>

<!-- End Of Alvon Section Head
============================================= -->

<?php
  return ob_get_clean();
}
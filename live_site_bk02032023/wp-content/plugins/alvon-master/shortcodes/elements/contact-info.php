<?php 
/*------------------------------------------------------------------------------------------------------------------*/
/*  Alvon Icon List
/*------------------------------------------------------------------------------------------------------------------*/

vc_map(array(
  'base' => 'contact_info',
  'name' => __('Contact Info', 'alvon'),
  'category' => __('Alvon', 'alvon'),
  'icon' => 'far fa-question-circle',
  'params' => array(

    array(
      'param_name' => 'icon_type',
      'type' => 'dropdown',
      'heading' => __( 'Icon library for phone icon', 'alvon' ),
      "std"       => __("imageicon", "alvon"),
      'value' => array(
        __( 'Image Icon', 'alvon' ) => 'imageicon',
        __( 'Font Icon', 'alvon' ) => 'fonticon',
      ),
      'admin_label' => false,
      'description' => __( 'Select icon library.', 'alvon' ),
    ),
    array(
      'param_name' => 'contact_icon',
      'type' => 'iconpicker',
      'heading' => __( 'Icon', 'alvon' ),
      'value' => 'fa fa-adjust', // default value to backend editor admin_label
      'settings' => array(
        'emptyIcon' => false,
        'type' => 'fontawesomepro',
        'iconsPerPage' => 2314,
      ),
      'dependency' => array(
        'element' => 'icon_type',
        'value' => 'fonticon',
      ),
      'description' => __( 'Select icon from library.', 'alvon' ),
    ),
    array(
      "param_name" => "contact_icon_img",
      "type" => "attach_image",
      "heading" => __("Icon Image", "alvon"),
      'dependency' => array(
        'element' => 'icon_type',
        'value' => 'imageicon',
      ),
    ),
    array(
      "param_name" => "info_title",
      "type" => "textfield",
      "heading" => __("Info Title", "alvon"),
      'admin_label' => true,
    ),
    array(
      'param_name' => 'info_lists',
      'type' => 'param_group',
      'params' => array(
        array(
          "param_name" => "info_text",
          "type" => "textfield",
          "heading" => __("Info Text", "alvon"),
        ),
        array(
          "param_name" => "custom_info_class",
          "type" => "textfield",
          "heading" => __("Custom List Class", "alvon"),
        ),
      )
    ),
    array(
      "param_name" => "btn_link",
      "type" => "vc_link",
      "heading" => __("Button Link", "alvon"),
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
        "heading"     => __("Animation delay", "alvon"),
        "value" => alvon_anim_delay(),
      "description"   => __("Select animation delay", "alvon"),
      'admin_label' => false,
    ),
    array(
      "param_name" => "custom_class",
      "type" => "textfield",
      "heading" => __("Custom List Class", "alvon"),
    ),

  ),
));


/*  Icon List Shortcode
/*-----------------------------------------------------------------------*/

add_shortcode( 'contact_info', 'contact_info_shortcode' );
function contact_info_shortcode($atts, $content = null) {
  extract( shortcode_atts(
    array(
      'icon_type'        => 'imageicon',
      'contact_icon'     => '',
      'contact_icon_img' => '',
      'info_title'       => '',
      'info_lists'       => '',
      'btn_link'         => '',
      'animation'        => '',
      'anim_delay'       => '',
      'custom_class'     => '',
      ), $atts )
  );
  ob_start();

  $info_img = get_vc_image( $contact_icon_img, 'full' );

  if (!empty($atts['info_lists'])) {
    $info_lists = vc_param_group_parse_atts($atts['info_lists']);
  } else {
    $info_lists = '';
  }

  if ($btn_link) {
    $url = $btn_link;
    $link = vc_build_link( $url );
    $link = ($link=='||') ? '' : $link;
    $a_link = $link['url'];
    $a_title = ($link['title'] == '') ? '' : $link['title'];
    $a_target = ($link['target'] == '') ? '' : 'target="'.$link['target'].'"';
  }

?>

<!-- Contact info item
============================================= -->
<div class="single-contact-info text-center mb-30 wow <?php echo esc_attr($animation); ?>" data-wow-delay="<?php echo esc_attr($anim_delay); ?>">
  <?php if ( $icon_type == 'imageicon' ) { 
    if (!empty($info_img)) {
  ?>
  <div class="contact-icon img-icon">
    <img src="<?php echo esc_url( $info_img ); ?>" alt="<?php esc_attr_e('Icon', 'alvon'); ?>">
  </div>
  <?php } } else if ( $icon_type == 'fonticon' ) { ?>
  <div class="contact-icon font-icon">
    <i class="<?php echo esc_attr($contact_icon); ?>"></i>
  </div>
  <?php } ?>

  <div class="contact-info">
    <h5><?php echo esc_html( $info_title ); ?></h5>
    <?php if (is_array( $info_lists )) {
      foreach( $info_lists as $list) { 

        if (!empty($list['info_text'])) {
          $info_text = $list['info_text'];
        } else {  
          $info_text = '';
        }
        if (!empty($list['custom_info_class'])) {
          $info_class = $list['custom_info_class'];
        } else {  
          $info_class = '';
        }
    ?>
      <span class="contact-<?php echo esc_attr( $info_class ); ?>-info"><?php echo esc_html( $info_text ); ?></span>
    <?php } } 
    if (!empty($a_link)) { ?>
      <a href="<?php echo esc_url( $a_link ); ?>"><?php echo esc_html( $a_title ); ?></a>
    <?php } ?>
  </div>
</div>
<!-- End Of Contact info item
============================================= -->

<?php
  return ob_get_clean();
}
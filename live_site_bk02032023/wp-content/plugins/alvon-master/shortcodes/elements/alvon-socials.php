<?php 
/*------------------------------------------------------------------------------------------------------------------*/
/*  Alvon Icon List
/*------------------------------------------------------------------------------------------------------------------*/

vc_map(array(
  'base' => 'alvon_socials',
  'name' => __('Social List', 'alvon'),
  'category' => __('Alvon', 'alvon'),
  'icon' => 'far fa-share-square',
  'params' => array(

    array(
      'param_name' => 'alvon_social_list',
      'type' => 'param_group',
      'params' => array(

        array(
          'param_name' => 'social_icon',
          'type' => 'iconpicker',
          'heading' => __( 'Icon', 'alvon' ),
          'value' => 'vc-oi vc-oi-dial',
          'settings' => array(
            'emptyIcon' => false,
            'type' => 'fontawesomepro',
            'iconsPerPage' => 2314,
          ),
          'description' => __( 'Select icon from library.', 'alvon' ),
        ),
        array(
          "param_name" => "social_link",
          "type" => "vc_link",
          "heading" => __("Social Link", "alvon"),
        ),
        array(
          "param_name" => "custom_list_class",
          "type" => "textfield",
          "heading" => __("Custom List Class", "alvon"),
        ),

      )
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

add_shortcode( 'alvon_socials', 'alvon_socials_shortcode' );
function alvon_socials_shortcode($atts, $content = null) {
  extract( shortcode_atts(
    array(
      'alvon_social_list'   => '',
      'custom_class' => '',
      ), $atts )
  );
  ob_start();

  if (!empty($atts['alvon_social_list'])) {
    $alvon_social_list = vc_param_group_parse_atts($atts['alvon_social_list']);
  } else {
    $alvon_social_list = '';
  }

?>

<!-- Icon List
============================================= -->
<div class="team-social">
    <?php 
    if (is_array( $alvon_social_list )) {
      foreach( $alvon_social_list as $list) {

      if (!empty($list['social_icon'])) {
        $social_icon = $list['social_icon'];
      } else {
        $social_icon = '';
      }
      if (!empty($list['social_link'])) {
        $social_link = $list['social_link'];
      } else {
        $social_link = '';
      }
      
      if (!empty($list['list_icon_text'])) {
        $list_icon_text = $list['list_icon_text'];
      } else {
        $list_icon_text = '';
      }

      if (!empty($list['custom_list_class'])) {
        $custom_list_class = $list['custom_list_class'];
      } else {
        $custom_list_class = '';
      }

      $icon = $custom_list_class . ' ' . $social_icon;
      
      if ($social_link) {
        $url = $social_link;
        $link = vc_build_link( $url );
        $link = ($link=='||') ? '' : $link;
        $a_link = $link['url'];
        $a_title = ($link['title'] == '') ? '' : $link['title'];
        $a_target = ($link['target'] == '') ? '' : 'target="'.$link['target'].'"';
      }

    ?>
      <a href="<?php echo esc_url( $a_link ); ?>" <?php echo wp_kses_stripslashes($a_target); ?>><i class="<?php echo esc_attr( $icon ); ?>"></i></a>
    <?php }
    } ?>
</div>
<!-- End Of Icon List
============================================= -->

<?php
  return ob_get_clean();
}
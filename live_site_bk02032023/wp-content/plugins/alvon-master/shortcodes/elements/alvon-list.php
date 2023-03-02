<?php 
/*------------------------------------------------------------------------------------------------------------------*/
/*  Alvon Icon List
/*------------------------------------------------------------------------------------------------------------------*/

vc_map(array(
  'base' => 'alvon_list',
  'name' => __('Alvon List', 'alvon'),
  'category' => __('Alvon', 'alvon'),
  'icon' => 'fa fa-list-ul',
  'params' => array(

    array(
      'param_name' => 'alvon_list',
      'type' => 'param_group',
      'params' => array(

        array(
          "param_name"  => "layout_variation",
          "type"      => "dropdown",
            "heading"     => __("Variation Style", "alvon"),
            "value" => array(
              'Normal List' => '1',
              'List with icon' => '2',
              'List with title' => '3',
              'List with icon + title' => '4',
              'List with text icon + title' => '5',
            ),
          "description"   => __("Layout Variation", "alvon"),
          'admin_label' => true,
        ),
        array(
          'param_name' => 'pretty_icon',
          'type' => 'iconpicker',
          'heading' => __( 'Icon', 'alvon' ),
          'value' => 'vc-oi vc-oi-dial',
          'settings' => array(
            'emptyIcon' => false,
            'type' => 'fontawesomepro',
            'iconsPerPage' => 2314,
          ),
          "dependency" => array(
            "element"=> "layout_variation",
            "value"=> array( "2", "4" ),
          ),
          'description' => __( 'Select icon from library.', 'alvon' ),
        ),
        array(
          "param_name" => "list_icon_text",
          "type" => "textfield",
          "heading" => __("Icon text", "alvon"),
          "dependency" => array(
            "element"=> "layout_variation",
            "value"=> array( "5" ),
          )
        ),
        /*List Title*/
        array(
          "param_name" => "list_title",
          "type" => "textfield",
          "heading" => __("List Title", "alvon"),
          "dependency" => array(
            "element"=> "layout_variation",
            "value"=> array( "3","4","5" ),
          )
        ),
        /*List Description*/
        array(
          "param_name" => "list_text",
          "type" => "textarea",
          "heading" => __("List text", "alvon"),
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

add_shortcode( 'alvon_list', 'alvon_list_shortcode' );
function alvon_list_shortcode($atts, $content = null) {
  extract( shortcode_atts(
    array(
      'alvon_list'   => '',
      'custom_class' => '',
      ), $atts )
  );
  ob_start();

  if (!empty($atts['alvon_list'])) {
    $alvon_list = vc_param_group_parse_atts($atts['alvon_list']);
  } else {
    $alvon_list = '';
  }

?>

<!-- Icon List
============================================= -->
<div class="choice-list">
  <ul class="alvon-list <?php echo esc_attr( $custom_class ); ?>">
    <?php 
    if (is_array( $alvon_list )) {
      foreach( $alvon_list as $list) {

      if (!empty($list['list_title'])) {
        $list_title = $list['list_title'];
      } else {
        $list_title = '';
      }
      if (!empty($list['list_text'])) {
        $list_text = $list['list_text'];
      } else {
        $list_text = '';
      }
      if (!empty($list['pretty_icon'])) {
        $icon = $list['pretty_icon'];
      } else {
        $icon = '';
      }
      
      if (!empty($list['list_icon_text'])) {
        $list_icon_text = $list['list_icon_text'];
      } else {
        $list_icon_text = '';
      }
      
      if (!empty($list['layout_variation'])) {
        $layout_variation = $list['layout_variation'];
      } else {
        $layout_variation = '';
      }
      if (!empty($list['custom_list_class'])) {
        $custom_list_class = $list['custom_list_class'];
      } else {
        $custom_list_class = '';
      }


      if ( $layout_variation == '1' ) {
    ?>
      <li class="style1 mb-25 <?php echo esc_attr( $custom_list_class ); ?>">
        <div class="list-content">
          <p><?php echo esc_html($list_text); ?></p>
        </div>
      </li>
    <?php } elseif ( $layout_variation == '2' ) { ?>
      <li class="style2 <?php echo esc_attr( $custom_list_class ); ?>">
        <div class="choice-check">
          <i class="<?php echo esc_attr($icon); ?>"></i>
        </div>
        <div class="choice-list-c">
            <span><?php echo $list_text; ?></span>
        </div>
      </li>
    <?php } elseif ( $layout_variation == '3' ) { ?>
      <li class="style3 mb-25 <?php echo esc_attr( $custom_list_class ); ?>">
        <div class="list-content">
          <h5><?php echo esc_html($list_title); ?></h5>
          <p><?php echo esc_html($list_text); ?></p>
        </div>
      </li>
    <?php } elseif ( $layout_variation == '4' ) { ?>
      <li class="style4 <?php echo esc_attr( $custom_list_class ); ?>">
        <div class="choice-check">
          <i class="<?php echo esc_attr($icon); ?>"></i>
        </div>
        <div class="choice-list-c">
            <h5><?php echo esc_html($list_title); ?></h5>
            <span><?php echo $list_text; ?></span>
        </div>
      </li>
    <?php } elseif ( $layout_variation == '5' ) { ?>
      <li class="single-bs-wrap style5 <?php echo esc_attr( $custom_list_class ); ?>">
        <div class="bs-number">
          <h5><?php echo esc_html($list_icon_text); ?></h5>
        </div>
        <div class="choice-list-c">
            <h3><?php echo esc_html($list_title); ?></h3>
            <p><?php echo esc_html($list_text); ?></p>
        </div>
      </li>
    <?php } else { ?>
      <li class="mb-25 <?php echo esc_attr( $custom_list_class ); ?>">
        <div class="list-content">
          <p><?php echo esc_html($list_text); ?></p>
        </div>
      </li>
    <?php }}} ?>
  </ul>
</div>
<!-- End Of Icon List
============================================= -->

<?php
  return ob_get_clean();
}
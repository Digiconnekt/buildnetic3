<?php 
/*------------------------------------------------------------------------------------------------------------------*/
/*  Caros Price Table
/*------------------------------------------------------------------------------------------------------------------*/

vc_map(array(
  'base' => 'single_price_table',
  'name' => __('Single Price Table', 'alvon'),
  'category' => __('Alvon', 'alvon'),
  'icon' => 'fas fa-dollar-sign',
  'params' => array(

    array(
      "param_name" => "table_image",
      "type" => "attach_image",
      "heading" => __("Table Image", "alvon"),
    ),
    array(
      "param_name" => "table_title",
      "type" => "textfield",
      "heading" => __("Table title", "alvon"),
    ),
    array(
      "param_name" => "price_currency",
      "type" => "textfield",
      "heading" => __("Price currency", "alvon"),
    ),
    array(
      "param_name" => "table_price",
      "type" => "textfield",
      "heading" => __("Table price", "alvon"),
    ),
    array(
      "param_name" => "price_coins",
      "type" => "textfield",
      "heading" => __("Price Coins", "alvon"),
    ),
    array(
      "param_name" => "table_time",
      "type" => "textfield",
      "heading" => __("Table time", "alvon"),
    ),
    array(
      'param_name' => 'table_list',
      'type' => 'param_group',
      'params' => array(

        array(
          "param_name"  => "list_variation",
          "type"      => "dropdown",
            "heading"     => __("List Style", "alvon"),
            "value" => array(
              'Normal List' => '1',
              'List with icon' => '2',
            ),
          "description"   => __("List Variation", "alvon"),
          'admin_label' => true,
        ),

        /*List Icon*/
        array(
          'param_name' => 'list_icon',
          'type' => 'iconpicker',
          'heading' => __( 'Icon', 'alvon' ),
          'value' => 'vc-oi vc-oi-dial',
          'settings' => array(
            'emptyIcon' => false,
            'type' => 'fontawesomepro',
            'iconsPerPage' => 2314,
          ),
          "dependency" => array(
            "element"=> "list_variation",
            "value"=> array( "2" ),
          ),
          'description' => __( 'Select icon from library.', 'alvon' ),
        ),
        /*List Text*/
        array(
          "param_name" => "list_text",
          "type" => "textfield",
          "heading" => __("List text", "alvon"),
        ),

      )
    ),
    array(
      "param_name" => "table_btn_txt",
      "type" => "textfield",
      "heading" => __("Table button text", "alvon"),
    ),
    array(
      "param_name" => "table_btn_link",
      "type" => "textfield",
      "heading" => __("Table button link", "alvon"),
    ),
    /*Extra Settings*/
    array(
      "param_name" => "active_item",
      "type"       => "dropdown",
        "heading"  => __("Active item ?", "alvon"),
        "std"      => "1",
        "value" => array(
          'No' => '1',
          'Yes' => '2',
        ),
      "description"   => __("Active item selector", "alvon"),
      'admin_label' => false,
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
      "heading" => __("Custom table class", "alvon"),
    ),

  ),
));


/* Caros Price Table Shortcode
/*-----------------------------------------------------------------------*/

add_shortcode( 'single_price_table', 'single_price_table_shortcode' );
function single_price_table_shortcode($atts, $content = null) {
  extract( shortcode_atts(
    array(
      'table_image'    => '',
      'table_title'    => '',
      'price_currency' => '',
      'table_price'    => '',
      'price_coins'    => '',
      'table_time'     => '',
      'table_list'     => '',
      'table_btn_txt'  => '',
      'table_btn_link' => '',
      'active_item'    => '1',
      'animation'      => '',
      'anim_delay'     => '',
      'custom_class'   => '',
      ), $atts )
  );
  ob_start();

  if (!empty($atts['table_list'])) {
    $table_list = vc_param_group_parse_atts($atts['table_list']);
  } else {
    $table_list = '';
  }

  if ($active_item == '2') {
    $active = 'active';
  } else {
    $active = '';
  }

  if ($table_image) {
    $image = get_vc_image( $table_image );
  } else {
    $image = '';
  }

  $custom_class = $custom_class. ' wow ' .$animation. ' '.$active;


?>

<!-- Caros Price Table
============================================= -->

<div class="pricing-box text-center mb-30 <?php echo esc_attr( $custom_class ); ?>" data-wow-delay="<?php echo esc_attr( $anim_delay ); ?>">
  <div class="pricing-head mb-20">
    <?php if (!empty($image)) { ?>
      <div class="pricing-icon mb-45">
        <img src="<?php echo esc_url( $image ); ?>" alt="<?php esc_attr_e( 'icon', 'alvon' ); ?>">
      </div>
    <?php } ?>
    <span><?php echo esc_html( $table_title ); ?></span>
    <h2>
      <span><?php echo esc_html( $price_currency ); ?></span><?php echo esc_html( $table_price ); ?><span><?php echo esc_html( $price_coins ); ?></span>
    </h2>
  </div>
  <div class="pricing-body mb-35">
    <span class="time"><?php echo esc_html( $table_time ); ?></span>
    <ul>
      <?php 
        if (is_array( $table_list )) {
          foreach( $table_list as $list) {

          if (!empty($list['list_text'])) {
            $list_text = $list['list_text'];
          } else {
            $list_text = '';
          }

          if (!empty($list['list_icon'])) {
            $icon = $list['list_icon'];
          } else {
            $icon = '';
          }


          $list_variation = $list['list_variation'];

          if ( $list_variation == 2 ) {
            $icon_code = '<i class="'.$icon.'"></i>';
          } else {
            $icon_code = '';
          }
      ?>
        <li><?php echo $icon_code; ?><span><?php echo esc_html( $list_text ); ?></span></li>
      <?php }
      } ?>
    </ul>
  </div>
  <div class="pricing-btn">
    <a href="<?php echo esc_url( $table_btn_link ); ?>" class="btn"><i class="fal fa-shopping-cart"></i> <?php echo esc_html( $table_btn_txt ); ?></a>
  </div>
</div>

<?php
  return ob_get_clean();
}
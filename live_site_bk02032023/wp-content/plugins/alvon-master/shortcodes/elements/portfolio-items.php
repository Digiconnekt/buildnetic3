<?php 
/*------------------------------------------------------------------------------------------------------------------*/
/*  Alvon Service Item
/*------------------------------------------------------------------------------------------------------------------*/

vc_map(array(
  'base' => 'alvon_portfolio_items',
  'name' => __('Portfolio Items', 'alvon'),
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
          "heading" => __("Custom Class", "alvon"),
        )

      )
    ),
    array(
      "param_name"  => "grid_columns",
      "type"      => "dropdown",
        "heading"     => __("Variation Style", "alvon"),
        "std"       => __("4", "alvon"),
        "value" => array(
          'Columns 1' => '12',
          'Columns 2' => '6',
          'Columns 3' => '4',
          'Columns 4' => '3',
        ),
      "description"   => __("Layout Variation", "alvon"),
    ),
    array(
      "param_name" => "no_gutters",
      "type" => "checkbox",
      "heading" => __( "No Gutters?", "alvon" ),
      "description" => __( "If you want to remove column gap please check the box", "alvon" )
    ),

  ),
));


/*  Service Item Shortcode
/*-----------------------------------------------------------------------*/

add_shortcode( 'alvon_portfolio_items', 'alvon_portfolio_items_shortcode' );
function alvon_portfolio_items_shortcode($atts, $content = null) {
  extract( shortcode_atts(
    array(
      'portfolio_items' => '',
      'grid_columns'    => '4',
      'no_gutters'      => '',
      ), $atts )
  );
  ob_start();

  if (!empty($atts['portfolio_items'])) {
    $portfolio_items = vc_param_group_parse_atts($atts['portfolio_items']);
  } else {
    $portfolio_items = '';
  }

  if (empty($no_gutters)) {
    $bottom_margin = 'mb-30';
    $gutters = '';
  } else {
    $bottom_margin = '';
    $gutters = 'no-gutters';
  }

  if ($gutters == 'no-gutters') {
    $margin_bottom = '30';
  } else {
    $margin_bottom = '';    
  }
?>
  <div class="row <?php echo esc_attr( $gutters . ' mb-' . $margin_bottom ); ?>">
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


          if (!empty($item['animation'])) {
            $animation = $item['animation'];
          } else {
            $animation = '';
          }
          if (!empty($item['anim_delay'])) {
            $anim_delay = $item['anim_delay'];
          } else {
            $anim_delay = '';
          }
          if (!empty($item['custom_class'])) {
            $custom_class = $item['custom_class'];
          } else {
            $custom_class = '';
          }

          $item_class = $bottom_margin . ' ' . $custom_class . ' ' . $animation;

      ?>
    <div class="col-xl-<?php echo esc_attr( $grid_columns ); ?> col-md-6">
      <div class="single-porject wow <?php echo esc_attr( $item_class ); ?>" data-wow-delay="<?php echo esc_attr($anim_delay); ?>">
          <div class="project-thumb">
            <a href="<?php echo esc_url( $link_source ); ?>"><img src="<?php echo esc_url( $portfolio_image ); ?>" alt="<?php esc_attr_e( 'img', 'alvon' ); ?>"></a>
          </div>
      </div>
    </div>
    <?php }
    } ?>
  </div>


<?php
  return ob_get_clean();
}
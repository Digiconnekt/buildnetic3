<?php 
/*------------------------------------------------------------------------------------------------------------------*/
/*  Alvon Service Item
/*------------------------------------------------------------------------------------------------------------------*/

vc_map(array(
  'base' => 'alvon_feature_items',
  'name' => __('Feature Items', 'alvon'),
  'category' => __('Alvon', 'alvon'),
  'icon' => 'fas fa-clipboard-list',
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
      'param_name' => 'feature_icon',
      'type' => 'iconpicker',
      'heading' => __( 'Icon', 'alvon' ),
      'value' => 'fa fa-adjust', // default value to backend editor admin_label
      'settings' => array(
        'emptyIcon' => false,
        'type' => 'fontawesomepro',
        'iconsPerPage' => 2500,
        // default 100, how many icons per/page to display, we use (big number) to display all icons in single page
      ),
      'dependency' => array(
        'element' => 'icon_type',
        'value' => 'fonticon',
      ),
      'description' => __( 'Select icon from library.', 'alvon' ),
    ),
    array(
      "param_name" => "feature_icon_img",
      "type" => "attach_image",
      "heading" => __("Icon Image", "alvon"),
      'dependency' => array(
        'element' => 'icon_type',
        'value' => 'imageicon',
      ),
    ),

    array(
      "param_name" => "item_title",
      "type" => "textfield",
      "heading" => __("Item Title", "alvon"),
      'admin_label' => true,
    ),
    array(
      "param_name" => "item_desc",
      "type" => "textarea",
      "heading" => __("Description", "alvon"),
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

  ),
));


/*  Service Item Shortcode
/*-----------------------------------------------------------------------*/

add_shortcode( 'alvon_feature_items', 'alvon_feature_items_shortcode' );
function alvon_feature_items_shortcode($atts, $content = null) {
  extract( shortcode_atts(
    array(
      'icon_type'        => 'imageicon',
      'feature_icon'     => '',
      'feature_icon_img' => '',
      'item_title'       => '',
      'item_desc'        => '',
      'animation'        => '',
      'anim_delay'       => '',
      'custom_class'     => '',
      ), $atts )
  );
  ob_start();

  $icon_image = get_vc_image( $feature_icon_img, 'full');

?>

<div class="single-c-features <?php echo esc_attr( $custom_class . ' ' . ' wow ' . $animation ); ?>" data-wow-delay="<?php echo esc_attr($anim_delay); ?>">
  <?php if ( $icon_type == 'imageicon' ) { 
    if (!empty($icon_image)) {
  ?>
    <div class="features-icon mb-30">
      <img src="<?php echo esc_url( $icon_image ); ?>" alt="<?php esc_attr_e('Icon', 'alvon'); ?>">
    </div>
  <?php } } else if ( $icon_type == 'fonticon' ) { ?>
    <div class="features-icon mb-30">
      <i class="<?php echo esc_attr($icon); ?>"></i>
    </div>
  <?php } ?>
  <div class="cf-content">
    <?php if (!empty( $item_title ) ) { ?>
      <h3><?php echo $item_title; ?></h3>
    <?php } if (!empty( $item_desc ) ) { ?>
      <p><?php echo $item_desc; ?></p>
    <?php } ?>
  </div>
</div>

<?php
  return ob_get_clean();
}
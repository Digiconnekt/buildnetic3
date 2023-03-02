<?php 

/*------------------------------------------------------------------------------------------------------------------*/
/*  Alvon Button
/*------------------------------------------------------------------------------------------------------------------*/

vc_map(array(
  'base' => 'alvon_button',
  'name' => __('Button', 'alvon'),
  'category' => __('Alvon', 'alvon'),
  'icon' => 'fa fa-anchor',
  'params' => array(

    array(
      "param_name"  => "btn_type",
      "type"      => "dropdown",
        "heading"     => __("Button Icon Image Type", "alvon"),
        "std"       => __("1", "alvon"),
        "value" => array(
          'Empty Button' => 1,
          'Fill Button'  => 2,
        ),
        "description"   => __("Link Type", "alvon"),
    ),
    array(
      "param_name" => "button_text",
      "type" => "textfield",
      "heading" => __("Button Text", "alvon"),
      'admin_label' => true,
    ),
    array(
      'param_name' => 'button_icon',
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
      "param_name"  => "btn_link_type",
      "type"      => "dropdown",
      "heading"     => __("Link Type", "alvon"),
      "std"       => __("1", "alvon"),
      "value" => array(
        'Link to page' => 1,
        'External Link' => 2,
      ),
      "description"   => __("Link Type", "alvon"),
    ),
    array(
      "param_name"  => "btn_link_to_page",
      "type"      => "dropdown",
        "heading"     => __("Link to page", "alvon"),
        "value"     => alvon_get_page_as_list(),
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
      'param_name' => 'button_text_align',
      'type' => 'dropdown',
      'heading' => __( 'Please select text align',  "alvon" ),
      'value' => array(
        __( 'Select text align',  "alvon"  ) => ' ',
        __( 'Text Align Center',  "alvon"  ) => 'text-center',
        __( 'Text Align Left',  "alvon"  ) => 'text-left',
        __( 'Text Align Right',  "alvon"  ) => 'text-right',
      ),
      "description" => __( "There have more section head style. check all one by one for your need.", "alvon" )
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

add_shortcode( 'alvon_button', 'alvon_button_shortcode' );
function alvon_button_shortcode($atts, $content = null) {
  extract( shortcode_atts(
    array(
      'btn_type'             => '1',
      'button_text'          => '',
      'button_icon'          => '',
      'btn_link_type'        => '',
      'btn_link_to_page'     => '',
      'btn_link_to_external' => '',
      'button_text_align'    => '',
      'animation'            => '',
      'anim_delay'           => '0.2s',
      'custom_btn_class'     => '',
      ), $atts )
  );
  ob_start();

  if( $btn_link_type == 1 ){
    $link_source = get_page_link($btn_link_to_page);
  } elseif( $btn_link_type == 2 ){
    $link_source = $btn_link_to_external;
  } else {
    $link_source = get_page_link($btn_link_to_page);
  }

  $custom_class = $animation . ' ' . $custom_btn_class . ' ' . $button_text_align;

?>
  <!-- Alvon Button
  ============================================= -->

  <?php if ($btn_type == 1) { ?>
    <div class="title-btn wow <?php echo esc_attr( $custom_class ); ?>" data-wow-delay="<?php echo esc_attr($anim_delay); ?>">
      <a href="<?php echo esc_url($link_source); ?>" class="btn"> 
        <?php echo esc_html($button_text); ?> 
        <?php if (!empty ($button_icon)) { ?>
          <i class="<?php echo esc_attr( $button_icon ); ?>"></i>
        <?php } ?>
      </a>
    </div>
  <?php } elseif ($btn_type == 2) { ?>
    <div class="filed-button wow <?php echo esc_attr( $custom_class ); ?>" data-wow-delay="<?php echo esc_attr($anim_delay); ?>">
      <a href="<?php echo esc_url($link_source); ?>" class="btn"> 
        <?php echo esc_html($button_text); ?> 
        <?php if (!empty ($button_icon)) { ?>
          <i class="<?php echo esc_attr( $button_icon ); ?>"></i>
        <?php } ?>
      </a>
    </div>
  <?php } else { ?>
    <div class="text-right">
      <a href="<?php echo esc_url($link_source); ?>" class="btn">
        <?php if (!empty ($button_icon)) { ?>
          <i class="<?php echo esc_attr( $button_icon ); ?>"></i> 
        <?php } ?>
        <?php echo esc_html($button_text); ?> 
      </a>
    </div>
  <?php } ?>
  <!-- End Of Alvon Button
  ============================================= -->

<?php
  return ob_get_clean();
}
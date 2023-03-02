<?php 
/*------------------------------------------------------------------------------------------------------------------*/
/*  Alvon Service Item
/*------------------------------------------------------------------------------------------------------------------*/

vc_map(array(
  'base' => 'alvon_service_items',
  'name' => __('Service Items', 'alvon'),
  'category' => __('Alvon', 'alvon'),
  'icon' => 'fa fa-briefcase',
  'params' => array(

    array(
      'param_name' => 'services_items',
      'type' => 'param_group',
      'params' => array(

        array(
          "param_name" => "item_base_color",
          "type" => "colorpicker",
          "heading" => __("Item base color", "alvon"),
          'admin_label' => false,
        ),
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
          'param_name' => 'service_icon',
          'type' => 'iconpicker',
          'heading' => __( 'Icon', 'alvon' ),
          'value' => 'fa fa-adjust', // default value to backend editor admin_label
          'settings' => array(
            'emptyIcon' => false,
            'type' => 'fontawesomepro',
            'iconsPerPage' => 2500,
          ),
          'dependency' => array(
            'element' => 'icon_type',
            'value' => 'fonticon',
          ),
          'description' => __( 'Select icon from library.', 'alvon' ),
        ),
        array(
          "param_name" => "box_font_color",
          "type" => "colorpicker",
          "heading" => __("Icon font color", "alvon"),
          'admin_label' => false,
          'dependency' => array(
            'element' => 'icon_type',
            'value' => 'fonticon',
          ),
        ),
        array(
          "param_name" => "service_icon_img",
          "type" => "attach_image",
          "heading" => __("Icon Image", "alvon"),
          'dependency' => array(
            'element' => 'icon_type',
            'value' => 'imageicon',
          ),
        ),
        array(
          "param_name" => "service_icon_img2",
          "type" => "attach_image",
          "heading" => __("Icon Image 2", "alvon"),
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
          "param_name" => "item_title_p2",
          "type" => "textfield",
          "heading" => __("Item Title Underline", "alvon"),
          "description" => __( 'This field for only style 3 ( underline title part )', 'alvon' ),
          'admin_label' => true,
        ),
        array(
          "param_name" => "item_desc",
          "type" => "textarea",
          "heading" => __("Description", "alvon"),
        ),
        array(
          'param_name' => 'item_text_align',
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
            "value"     => alvon_get_service_as_list(),
            "description"   => __("Link Type", "alvon"),
          "dependency" => array(
            "element"=> "btn_link_type",
            "value"=> array("1"),
          )
        ),
        array(
          "param_name"  => "btn_link_to_external_text",
          "type"      => "textfield",
          "heading"     => __("External Text", "alvon"),
          "description"   => __("External Text", "alvon"),
          "dependency" => array(
            "element"=> "btn_link_type",
            "value"=> array("2"),
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
        ),

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
      "param_name"  => "layout_variation",
      "type"      => "dropdown",
        "heading"     => __("Variation Style", "alvon"),
        "std"       => __("1", "alvon"),
        "value" => array(
          'Variation 1' => '1',
          'Variation 2' => '2',
          'Variation 3' => '3',
          'Variation 4' => '4',
          'Variation 5' => '5',
          'Variation 6' => '6',
        ),
      "description"   => __("Layout Variation", "alvon"),
    )

  ),
));


/*  Service Item Shortcode
/*-----------------------------------------------------------------------*/

add_shortcode( 'alvon_service_items', 'alvon_service_items_shortcode' );
function alvon_service_items_shortcode($atts, $content = null) {
  extract( shortcode_atts(
    array(
      'services_items'   => '',
      'grid_columns'     => '4',
      'layout_variation' => '1',
      ), $atts )
  );
  ob_start();

  if (!empty($atts['services_items'])) {
    $services_items = vc_param_group_parse_atts($atts['services_items']);
  } else {
    $services_items = '';
  }
if ( $layout_variation == '1' ) { ?>
  <div class="row">
    <?php 
      if (is_array( $services_items )) {
        foreach( $services_items as $item) {

          $icon_type = $item['icon_type'];

          $icon = $item['service_icon'];
          
          if (!empty($item['service_icon_img'])) {
            $icon_img = $item['service_icon_img'];
          } else {
            $icon_img = '';
          }
          $icon_image = get_vc_image( $icon_img );

          if (!empty($item['item_title'])) {
            $item_title = $item['item_title'];
          } else {
            $item_title = '';
          }
          if (!empty($item['item_title_p2'])) {
            $item_title_p2 = $item['item_title_p2'];
          } else {
            $item_title_p2 = '';
          }

          if (!empty($item['item_desc'])) {
            $item_desc = $item['item_desc'];
          } else {
            $item_desc = '';
          }
          if (!empty($item['item_text_align'])) {
            $item_text_align = $item['item_text_align'];
          } else {
            $item_text_align = '';
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

          if (!empty($item['item_base_color'])) {
            $item_base_color = $item['item_base_color'];
          } else {
            $item_base_color = '';
          }
          if (!empty($item['box_font_color'])) {
            $box_font_color = $item['box_font_color'];
          } else {
            $box_font_color = '';
          }

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


          $e_uniqid     = uniqid();
          $inline_style = '';
          if ( $item_base_color || $box_font_color ) {
            $inline_style .= '.si-style'. $e_uniqid .' .services-icon {';
            $inline_style .= ( $box_font_color ) ? 'color:'. $box_font_color  .' !important;' : '';
            $inline_style .= '}';
          }
          if ( $item_base_color ) {
            $inline_style .= '.si-style'. $e_uniqid .' .services-content h3:hover a {';
            $inline_style .= ( $item_base_color ) ? 'color:'. $item_base_color  .' !important;' : '';
            $inline_style .= '}';
          }
          if ( $item_base_color ) {
            $inline_style .= '.si-style'. $e_uniqid .' .services-icon::before {';
            $inline_style .= ( $item_base_color ) ? 'background:'. $item_base_color  .' !important;' : '';
            $inline_style .= '}';
          }
          add_inline_style( $inline_style );
          $styled_class  = ' si-style'. $e_uniqid;


          $all_class = $custom_class.' '.$item_text_align.' wow '.$animation.$styled_class;

      ?>
    <div class="col-xl-<?php echo esc_attr( $grid_columns ); ?> col-lg-4 col-md-6">
      <div class="single-services text-center mb-30 <?php echo esc_attr( $all_class ); ?> style1 ">
         <?php if ( $icon_type == 'imageicon' ) { 
            if (!empty($icon_image)) {
          ?>
          <div class="services-icon image-icon">
            <img src="<?php echo esc_url( $icon_image ); ?>" alt="<?php esc_attr_e('Icon', 'alvon'); ?>" data-aos="zoom-in-down" class="aos-init aos-animate">
          </div>
          <?php } } else if ( $icon_type == 'fonticon' ) { ?>
          <div class="services-icon font-icon">
            <i class="<?php echo esc_attr($icon); ?>"></i>
          </div>
          <?php } ?>
          <div class="services-content">
            <?php if (!empty( $item_title ) ) { 
              if (!empty($link_source)) {
            ?>
              <h3><a href="<?php echo esc_url( $link_source ); ?>"><?php echo esc_html($item_title); ?></a></h3>
            <?php } else { ?>
              <h3><?php echo esc_html($item_title); ?></h3>
            <?php } } if (!empty( $item_desc ) ) { ?>
              <p><?php echo esc_html($item_desc); ?></p>
            <?php } ?>
          </div>
      </div>
    </div>
    <?php }
    } ?>
  </div>
<?php } elseif ( $layout_variation == '2' ) { ?>
  <div class="row">
    <?php 
      if (is_array( $services_items )) {
        foreach( $services_items as $item) {

          $icon_type = $item['icon_type'];

          $icon = $item['service_icon'];
          
          if (!empty($item['service_icon_img'])) {
            $icon_img = $item['service_icon_img'];
          } else {
            $icon_img = '';
          }
          $icon_image = get_vc_image( $icon_img );

          if (!empty($item['item_title'])) {
            $item_title = $item['item_title'];
          } else {
            $item_title = '';
          }
          if (!empty($item['item_title_p2'])) {
            $item_title_p2 = $item['item_title_p2'];
          } else {
            $item_title_p2 = '';
          }

          if (!empty($item['item_desc'])) {
            $item_desc = $item['item_desc'];
          } else {
            $item_desc = '';
          }
          if (!empty($item['item_text_align'])) {
            $item_text_align = $item['item_text_align'];
          } else {
            $item_text_align = '';
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

          if (!empty($item['item_base_color'])) {
            $item_base_color = $item['item_base_color'];
          } else {
            $item_base_color = '';
          }
          if (!empty($item['box_font_color'])) {
            $box_font_color = $item['box_font_color'];
          } else {
            $box_font_color = '';
          }

          $e_uniqid     = uniqid();
          $inline_style = '';
          if ( $item_base_color || $box_font_color ) {
            $inline_style .= '.si-style'. $e_uniqid .' .s-services-icon {';
            $inline_style .= ( $box_font_color ) ? 'color:'. $box_font_color  .' !important;' : '';
            $inline_style .= ( $item_base_color ) ? 'background-color:'. $item_base_color  .' !important;' : '';
            $inline_style .= '}';
          }
          if ( $item_base_color ) {
            $inline_style .= '.si-style'. $e_uniqid .' .services-content h3:hover a {';
            $inline_style .= ( $item_base_color ) ? 'color:'. $item_base_color  .' !important;' : '';
            $inline_style .= '}';
          }
          if ( $item_base_color ) {
            $inline_style .= '.si-style'. $e_uniqid .' .s-services-content p::before {';
            $inline_style .= ( $item_base_color ) ? 'background:'. $item_base_color  .' !important;' : '';
            $inline_style .= '}';
          }
          add_inline_style( $inline_style );
          $styled_class  = ' si-style'. $e_uniqid;


          $all_class = $custom_class.' '.$item_text_align.' wow '.$animation.$styled_class;

      ?>
    <div class="col-xl-<?php echo esc_attr( $grid_columns ); ?> col-lg-4 col-md-6">
      <div class="single-services text-center mb-30 <?php echo esc_attr( $all_class ); ?> style2" data-wow-delay="<?php echo esc_attr( $anim_delay ); ?>">
        <?php if ( $icon_type == 'imageicon' ) { 
          if (!empty($icon_image)) {
        ?>
        <div class="s-services-icon image-icon mb-25">
          <img src="<?php echo esc_url( $icon_image ); ?>" alt="<?php esc_attr_e('Icon', 'alvon'); ?>">
        </div>
        <?php } } else if ( $icon_type == 'fonticon' ) { ?>
          <div class="s-services-icon font-icon mb-25">
            <i class="<?php echo esc_attr($icon); ?> text-center"></i>
          </div>
        <?php } ?>
        <div class="services-content s-services-content">
          <?php if (!empty( $item_title ) ) {
            if (!empty($link_source)) {
          ?>
            <h3><a href="<?php echo esc_url( $link_source ); ?>"><?php echo esc_html($item_title); ?></a></h3>
          <?php } else { ?>
            <h3><?php echo esc_html($item_title); ?></h3>
          <?php } } if (!empty( $item_desc ) ) { ?>
            <p><?php echo esc_html($item_desc); ?></p>
          <?php } ?>
        </div>
      </div>
    </div>
    <?php }
    } ?>
  </div>
<?php } elseif ( $layout_variation == '3' ) { ?>
  <div class="row">
    <?php 
      if (is_array( $services_items )) {
        foreach( $services_items as $item) {

          $icon_type = $item['icon_type'];

          $icon = $item['service_icon'];
          
          if (!empty($item['service_icon_img'])) {
            $icon_img = $item['service_icon_img'];
          } else {
            $icon_img = '';
          }
          $icon_image = get_vc_image( $icon_img );

          if (!empty($item['item_title'])) {
            $item_title = $item['item_title'];
          } else {
            $item_title = '';
          }
          if (!empty($item['item_title_p2'])) {
            $item_title_p2 = $item['item_title_p2'];
          } else {
            $item_title_p2 = '';
          }
          if (!empty($item['item_desc'])) {
            $item_desc = $item['item_desc'];
          } else {
            $item_desc = '';
          }
          if (!empty($item['item_text_align'])) {
            $item_text_align = $item['item_text_align'];
          } else {
            $item_text_align = '';
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

          if (!empty($item['item_base_color'])) {
            $item_base_color = $item['item_base_color'];
          } else {
            $item_base_color = '';
          }
          if (!empty($item['box_font_color'])) {
            $box_font_color = $item['box_font_color'];
          } else {
            $box_font_color = '';
          }

          $e_uniqid     = uniqid();
          $inline_style = '';
          if ( $item_base_color || $box_font_color ) {
            $inline_style .= '.si-style'. $e_uniqid .' .t-services-icon {';
            $inline_style .= ( $box_font_color ) ? 'color:'. $box_font_color  .' !important;' : '';
            $inline_style .= ( $item_base_color ) ? 'background-color:'. $item_base_color  .' !important;' : '';
            $inline_style .= '}';
          }
          if ( $item_base_color ) {
            $inline_style .= '.si-style'. $e_uniqid .' .t-services-content h5:hover a {';
            $inline_style .= ( $item_base_color ) ? 'color:'. $item_base_color  .' !important;' : '';
            $inline_style .= '}';
          }
          if ( $item_base_color ) {
            $inline_style .= '.si-style'. $e_uniqid .' .t-services-content h5::before {';
            $inline_style .= ( $item_base_color ) ? 'background:'. $item_base_color  .' !important;' : '';
            $inline_style .= '}';
          }
          add_inline_style( $inline_style );
          $styled_class  = ' si-style'. $e_uniqid;


          $all_class = $custom_class.' '.$item_text_align.' wow '.$animation.$styled_class;

      ?>
    <div class="col-xl-<?php echo esc_attr( $grid_columns ); ?> col-lg-4 col-md-6">

      <div class="single-services mb-30 <?php echo esc_attr( $all_class ); ?> style3" data-wow-delay="<?php echo esc_attr( $anim_delay ); ?>">
          <?php if ( $icon_type == 'imageicon' ) { 
            if (!empty($icon_image)) {
          ?>
          <div class="t-services-icon image-icon">
            <img src="<?php echo esc_url( $icon_image ); ?>" alt="<?php esc_attr_e('Icon', 'alvon'); ?>">
          </div>
          <?php } 
          } else if ( $icon_type == 'fonticon' ) { ?>
            <div class="t-services-icon font-icon">
              <i class="<?php echo esc_attr($icon); ?> text-center"></i>
            </div>
          <?php } ?>
          <div class="t-services-content fix">
            <?php if (!empty( $item_title ) ) {
              if (!empty($link_source)) {
            ?>
              <h5><a href="<?php echo esc_url( $link_source ); ?>"><?php echo esc_html( $item_title ); ?> <span><?php echo esc_html( $item_title_p2 ); ?></span></a></h5>
            <?php } else { ?>
              <h5><?php echo esc_html( $item_title ); ?> <span><?php echo esc_html( $item_title_p2 ); ?></span></h5> 
            <?php } } if (!empty( $item_desc ) ) { ?>
              <p><?php echo esc_html($item_desc); ?></p>
            <?php } ?>
          </div>
      </div>
    </div>
    <?php }
    } ?>
  </div>
<?php } elseif ( $layout_variation == '4' ) { ?>
  <div class="row">
    <?php 
      if (is_array( $services_items )) {
        foreach( $services_items as $item) {

          $icon_type = $item['icon_type'];

          $icon = $item['service_icon'];
          
          if (!empty($item['service_icon_img'])) {
            $icon_img = $item['service_icon_img'];
          } else {
            $icon_img = '';
          }
          $icon_image = get_vc_image( $icon_img );

          if (!empty($item['item_title'])) {
            $item_title = $item['item_title'];
          } else {
            $item_title = '';
          }
          if (!empty($item['item_title_p2'])) {
            $item_title_p2 = $item['item_title_p2'];
          } else {
            $item_title_p2 = '';
          }
          if (!empty($item['item_desc'])) {
            $item_desc = $item['item_desc'];
          } else {
            $item_desc = '';
          }
          if (!empty($item['item_text_align'])) {
            $item_text_align = $item['item_text_align'];
          } else {
            $item_text_align = '';
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

          if (!empty($item['item_base_color'])) {
            $item_base_color = $item['item_base_color'];
          } else {
            $item_base_color = '';
          }
          if (!empty($item['box_font_color'])) {
            $box_font_color = $item['box_font_color'];
          } else {
            $box_font_color = '';
          }

          $e_uniqid     = uniqid();
          $inline_style = '';
          if ( $item_base_color || $box_font_color ) {
            $inline_style .= '.si-style'. $e_uniqid .' .iabout-icon {';
            $inline_style .= ( $item_base_color ) ? 'background-color:'. $item_base_color  .' !important;' : '';
            $inline_style .= '}';
          } 
          if ( $item_base_color || $box_font_color ) {
            $inline_style .= '.si-style'. $e_uniqid .' .iabout-icon {';
            $inline_style .= ( $box_font_color ) ? 'color:'. $box_font_color  .' !important;' : '';
            $inline_style .= ( $item_base_color ) ? 'background-color:'. $item_base_color  .' !important;' : '';
            $inline_style .= '}';
          }
          if ( $item_base_color ) {
            $inline_style .= '.si-style'. $e_uniqid .' .iabout-content h4:hover a {';
            $inline_style .= ( $item_base_color ) ? 'color:'. $item_base_color  .' !important;' : '';
            $inline_style .= '}';
          }
          add_inline_style( $inline_style );
          $styled_class  = ' si-style'. $e_uniqid;


          $all_class = $custom_class.' '.$item_text_align.' wow '.$animation.$styled_class;

      ?>
    <div class="col-xl-<?php echo esc_attr( $grid_columns ); ?> col-lg-4 col-md-6">

      <div class="inner-single-about mb-85 <?php echo esc_attr( $all_class ); ?> style4" data-wow-delay="<?php echo esc_attr( $anim_delay ); ?>">
        <?php if ( $icon_type == 'imageicon' ) { 
          if (!empty($icon_image)) {
        ?>
          <div class="services-icon iabout-icon img-icon">
              <img src="<?php echo esc_url( $icon_image ); ?>" alt="icon">
          </div>
        <?php } 
        } elseif ( $icon_type == 'fonticon' ) { ?>
          <div class="services-icon iabout-icon font-icon">
            <i class="<?php echo esc_attr($icon); ?> text-center"></i>
          </div>
        <?php } else { ?>
          <div class="services-icon iabout-icon font-icon">
            <i class="fas fa-dragon"></i>
          </div>
        <?php } ?>
          <div class="iabout-content">
            <?php if (!empty( $item_title ) ) {
              if (!empty($link_source)) {
            ?>
              <h4><a href="<?php echo esc_url( $link_source ); ?>"><?php echo esc_html( $item_title ); ?> <span><?php echo esc_html( $item_title_p2 ); ?></span></a></h4>
            <?php } else { ?>
              <h4><?php echo esc_html( $item_title ); ?> <span><?php echo esc_html( $item_title_p2 ); ?></span></h4>
            <?php } } if (!empty( $item_desc ) ) { ?>
              <p><?php echo esc_html($item_desc); ?></p>
            <?php } ?>
          </div>
      </div>

    </div>
    <?php }
    } ?>
  </div>
<?php } elseif ( $layout_variation == '5' ) { ?>
  <div class="row">
    <?php 
      if (is_array( $services_items )) {
        foreach( $services_items as $item) {

          $icon_type = $item['icon_type'];

          $icon = $item['service_icon'];
          
          if (!empty($item['service_icon_img'])) {
            $icon_img = $item['service_icon_img'];
          } else {
            $icon_img = '';
          }
          $icon_image = get_vc_image( $icon_img );

          if (!empty($item['item_title'])) {
            $item_title = $item['item_title'];
          } else {
            $item_title = '';
          }
          if (!empty($item['item_title_p2'])) {
            $item_title_p2 = $item['item_title_p2'];
          } else {
            $item_title_p2 = '';
          }
          if (!empty($item['item_desc'])) {
            $item_desc = $item['item_desc'];
          } else {
            $item_desc = '';
          }
          if (!empty($item['item_text_align'])) {
            $item_text_align = $item['item_text_align'];
          } else {
            $item_text_align = '';
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

          if (!empty($item['item_base_color'])) {
            $item_base_color = $item['item_base_color'];
          } else {
            $item_base_color = '';
          }
          if (!empty($item['box_font_color'])) {
            $box_font_color = $item['box_font_color'];
          } else {
            $box_font_color = '';
          }

          $e_uniqid     = uniqid();
          $inline_style = '';
          if ( $item_base_color ) {
            $inline_style .= '.si-style'. $e_uniqid .' .iabout-content h4 a:hover {';
            $inline_style .= ( $item_base_color ) ? 'color:'. $item_base_color  .' !important;' : '';
            $inline_style .= '}';
          }
          add_inline_style( $inline_style );
          $styled_class  = ' si-style'. $e_uniqid;


          $all_class = $custom_class.' '.$item_text_align.' wow '.$animation.$styled_class;

      ?>
    <div class="col-xl-<?php echo esc_attr( $grid_columns ); ?>">

      <div class="inner-single-about mb-30 <?php echo esc_attr( $all_class ); ?> style5" data-wow-delay="<?php echo esc_attr( $anim_delay ); ?>">
          <div class="iabout-content">
            <div class="icon-title">
              <?php if ( $icon_type == 'imageicon' ) { 
                if (!empty($icon_image)) {
              ?>
                <div class="iabout-icon">
                    <img src="<?php echo esc_url( $icon_image ); ?>" alt="icon">
                </div>
              <?php } 
              } elseif ( $icon_type == 'fonticon' ) { ?>
                <div class="services-icon iabout-icon">
                  <i class="<?php echo esc_attr($icon); ?> text-center"></i>
                </div>
              <?php } else { ?>
                <div class="services-icon iabout-icon">
                  <i class="fas fa-dragon"></i>
                </div>
              <?php } ?>
              <?php if (!empty( $item_title ) ) {
                if (!empty($link_source)) {
              ?>
                <h4><a href="<?php echo esc_url( $link_source ); ?>"><?php echo esc_html( $item_title ); ?> <span><?php echo esc_html( $item_title_p2 ); ?></span></a></h4>
              <?php } else { ?>
                <h4><?php echo esc_html( $item_title ); ?> <span><?php echo esc_html( $item_title_p2 ); ?></span></h4>
              <?php } } ?>
            </div>
            <?php if (!empty( $item_desc ) ) { ?>
              <p><?php echo esc_html($item_desc); ?></p>
            <?php } ?>
          </div>
      </div>

    </div>
    <?php }
    } ?>
  </div>
<?php } elseif ( $layout_variation == '6' ) { ?>
  <div class="row">
    <?php 
      if (is_array( $services_items )) {
        foreach( $services_items as $item) {

          $icon_type = $item['icon_type'];

          $icon = $item['service_icon'];
          
          if (!empty($item['service_icon_img'])) {
            $icon_img = $item['service_icon_img'];
          } else {
            $icon_img = '';
          }
          $icon_image = get_vc_image( $icon_img );

          if (!empty($item['service_icon_img2'])) {
            $icon_img2 = $item['service_icon_img2'];
          } else {
            $icon_img2 = '';
          }
          $icon_image2 = get_vc_image( $icon_img2 );

          if (!empty($item['item_title'])) {
            $item_title = $item['item_title'];
          } else {
            $item_title = '';
          }
          if (!empty($item['item_title_p2'])) {
            $item_title_p2 = $item['item_title_p2'];
          } else {
            $item_title_p2 = '';
          }
          if (!empty($item['item_desc'])) {
            $item_desc = $item['item_desc'];
          } else {
            $item_desc = '';
          }
          if (!empty($item['item_text_align'])) {
            $item_text_align = $item['item_text_align'];
          } else {
            $item_text_align = '';
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
          if (!empty($item['btn_link_to_external_text'])) {
            $btn_link_to_external_text = $item['btn_link_to_external_text'];
          } else {
            $btn_link_to_external_text = '';
          }

          if( $btn_link_type == 1 ){
            $link_source = get_page_link($btn_link_to_page);
          } elseif( $btn_link_type == 2 ){
            $link_source = $btn_link_to_external;
          } else {
            $link_source = get_page_link($btn_link_to_page);
          }

      ?>
    <div class="col-xl-<?php echo esc_attr( $grid_columns ); ?> col-md-6">

      <div class="inner-single-about mb-30 <?php echo esc_attr( $custom_class . ' ' .$item_text_align . ' wow ' . $animation ); ?> style6" data-wow-delay="<?php echo esc_attr( $anim_delay ); ?>">
          <div class="iabout-content">
            <div class="icon-title">
              <?php if ( $icon_type == 'imageicon' ) {
                if (!empty($icon_image)) {
              ?>
                <div class="about-icon-img6">
                <?php if (!empty($icon_image)) { ?>
                  <img class="img1" src="<?php echo esc_url( $icon_image ); ?>" alt="icon">
                <?php } if (!empty($icon_image2)) { ?>
                  <img class="img2" src="<?php echo esc_url( $icon_image2 ); ?>" alt="icon">
                <?php } if (!empty($icon_image2)) { ?>
                  <img class="hover-img" src="<?php echo esc_url( $icon_image2 ); ?>" alt="icon">
                <?php } else { ?>
                  <img class="img2 img3" src="<?php echo esc_url( $icon_image ); ?>" alt="icon">
                <?php } ?>
                </div>
              <?php } 
              } elseif ( $icon_type == 'fonticon' ) { ?>
                <div class="services-icon iabout-icon">
                  <i class="<?php echo esc_attr($icon); ?> text-center"></i>
                </div>
              <?php } else { ?>
                <div class="services-icon iabout-icon">
                  <i class="fas fa-dragon"></i>
                </div>
              <?php } ?>
              <?php if (!empty( $item_title ) ) {
                if (!empty($link_source)) {
              ?>
                <h4><a href="<?php echo esc_url( $link_source ); ?>"><?php echo esc_html( $item_title ); ?> <span><?php echo esc_html( $item_title_p2 ); ?></span></a></h4>
              <?php } else { ?>
                <h4><?php echo esc_html( $item_title ); ?> <span><?php echo esc_html( $item_title_p2 ); ?></span></h4>
              <?php } } ?>
            </div>
            <?php if (!empty( $item_desc ) ) { ?>
              <p><?php echo esc_html($item_desc); ?></p>
            <?php } if ($btn_link_type == 2) { ?>
              <a href="<?php echo esc_url( $link_source ); ?>" class="extra-link"><?php echo esc_html( $btn_link_to_external_text ); ?> <i class="fal fa-long-arrow-right"></i></a>
            <?php } ?>
          </div>
      </div>

    </div>
    <?php }
    } ?>
  </div>
<?php } else { ?>
  <div class="row">
    <?php 
      if (is_array( $services_items )) {
        foreach( $services_items as $item) {

          $icon_type = $item['icon_type'];

          $icon = $item['service_icon'];
          
          if (!empty($item['service_icon_img'])) {
            $icon_img = $item['service_icon_img'];
          } else {
            $icon_img = '';
          }
          $icon_image = get_vc_image( $icon_img );

          if (!empty($item['item_title'])) {
            $item_title = $item['item_title'];
          } else {
            $item_title = '';
          }
          if (!empty($item['item_title_p2'])) {
            $item_title_p2 = $item['item_title_p2'];
          } else {
            $item_title_p2 = '';
          }

          if (!empty($item['item_desc'])) {
            $item_desc = $item['item_desc'];
          } else {
            $item_desc = '';
          }
          if (!empty($item['item_text_align'])) {
            $item_text_align = $item['item_text_align'];
          } else {
            $item_text_align = '';
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

      ?>
    <div class="col-xl-<?php echo esc_attr( $grid_columns ); ?> col-lg-4 col-md-6">

      <div class="single-services text-center mb-50 <?php echo esc_attr( $custom_class . ' ' .$item_text_align . ' wow ' . $animation ); ?> style1">
         <?php if ( $icon_type == 'imageicon' ) { 
            if (!empty($icon_image)) {
          ?>
          <div class="services-icon image-icon">
            <img src="<?php echo esc_url( $icon_image ); ?>" alt="<?php esc_attr_e('Icon', 'alvon'); ?>">
          </div>
          <?php } } else if ( $icon_type == 'fonticon' ) { ?>
          <div class="services-icon font-icon">
            <i class="<?php echo esc_attr($icon); ?>"></i>
          </div>
          <?php } ?>
          <div class="services-content">
            <?php if (!empty( $item_title ) ) { 
              if (!empty($link_source)) {
            ?>
              <h3><a href="<?php echo esc_url( $link_source ); ?>"><?php echo esc_html($item_title); ?></a></h3>
            <?php } else { ?>
              <h3><?php echo esc_html($item_title); ?></h3>
            <?php } } if (!empty( $item_desc ) ) { ?>
              <p><?php echo esc_html($item_desc); ?></p>
            <?php } ?>
          </div>
      </div>

    </div>
    <?php }
    } ?>
  </div> 
<?php } ?>

<?php
  return ob_get_clean();
}
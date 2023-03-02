<?php 
/*------------------------------------------------------------------------------------------------------------------*/
/*  Alvon Price Table
/*------------------------------------------------------------------------------------------------------------------*/

vc_map(array(
  'base' => 'alvon_price_table',
  'name' => __('Price Table', 'alvon'),
  'category' => __('Alvon', 'alvon'),
  'icon' => 'fas fa-dollar-sign',

  'params' => array(
    array(
      "param_name" => "posts_per_page",
      "type" => "textfield",
      "std" => "2",
      "heading" => __("Posts per page", "alvon"),
    ),
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
      "param_name" => "custom_class",
      "type" => "textfield",
      "heading" => __("Custom table class", "alvon"),
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


/* Alvon Price Table Shortcode
/*-----------------------------------------------------------------------*/

add_shortcode( 'alvon_price_table', 'alvon_price_table_shortcode' );
function alvon_price_table_shortcode($atts, $content = null) {
  extract( shortcode_atts(
    array(
      'posts_per_page'          => '2',
      'section_sub_title'       => '',
      'section_title'           => '',
      'section_title_underline' => '',
      'box_number'              => '',
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

<!-- Alvon Price Table
============================================= -->

<!-- pricing-area -->
<div class="pricing-area <?php echo esc_attr( $custom_class ); ?> pt-115 pb-90">
    <div class="row align-items-center mb-55">
        <div class="col-lg-6 col-md-7">
            <div class="section-title inner-title title-tag <?php echo esc_attr( $styled_class ); ?>">
              <?php if (!empty($section_sub_title)) { ?>
                <span class="sub-title"><?php echo esc_html( $section_sub_title ); ?></span>
              <?php } ?>
                <h2>
                  <?php echo esc_html( $section_title ); ?> 
                  <?php if (!empty($section_title_underline)) { ?>
                  <span><?php echo esc_html( $section_title_underline ); ?></span>
                  <?php } if (!empty($box_number)) { ?>
                  <small class="red"><?php echo esc_html( $box_number ); ?></small>
                  <?php } ?>
                </h2>
            </div>
        </div>
        <div class="col-lg-6 col-md-5">
            <ul class="nav nav-tabs pricing-tabs" id="myTab" role="tablist">
              <?php
                $the_query = new WP_Query( array(
                  'post_type' => 'price',
                  'posts_per_page' => $posts_per_page,
                  'order' => 'ASC',
                ) );
                $i = 0;
                while ( $the_query->have_posts() ) :
                $the_query->the_post(); 
                $i++;
                  $unique_id = get_the_title();
                  $idl = str_replace( ' ', '_', $unique_id );
                  $id = strtolower($idl);

                  if ($i == 1) {
                    $active = 'active';
                  } else {
                    $active = '';
                  }
              ?>
                <li class="nav-item">
                    <a class="nav-link <?php echo esc_attr( $active ); ?>" id="<?php echo esc_attr( $id ); ?>-tab" data-toggle="tab" href="#<?php echo esc_attr( $id ); ?>" role="tab" aria-controls="<?php echo esc_attr( $id ); ?>"
                        aria-selected="true"><?php the_title(); ?></a>
                </li>
              <?php endwhile; wp_reset_postdata(); ?>
            </ul>
        </div>
    </div>
    <div class="tab-content" id="myTabContent">
      <?php
        $the_query = new WP_Query( array(
          'post_type' => 'price',
          'posts_per_page' => $posts_per_page,
          'order' => 'ASC',
        ) );
        $i = 0;
        while ( $the_query->have_posts() ) :
          $the_query->the_post();
          $i++;
          $price_info = get_post_meta(get_the_ID(), '_alvon_price', true);

          if (!empty($price_info['price_table_info'])) {
            $price_table_info = $price_info['price_table_info'];
          } else {
            $price_table_info = '';
          } 
          $unique_id = get_the_title();
          $idl = str_replace( ' ', '_', $unique_id );
          $id = strtolower($idl);

          if ($i == 1) {
            $active_show = 'show active';
          } else {
            $active_show = '';
          }
      ?>
        <div class="tab-pane fade <?php echo esc_attr( $active_show ); ?>" id="<?php echo esc_attr( $id ); ?>" role="tabpanel" aria-labelledby="<?php echo esc_attr( $id ); ?>-tab">
            <div class="row">
              <?php 
                if (is_array($price_table_info)) {
                  foreach ($price_table_info as $key => $value) { 

                  if (!empty($value['price_img'])) {
                    $footer1_anim_img_id = $value['price_img'];
                    $price_attachment = wp_get_attachment_image_src( $footer1_anim_img_id, 'full' );
                    $price_img    = ($price_attachment) ? $price_attachment[0] : $footer1_anim_img_id; 
                  } else {
                    $price_img = '';
                  }

                  if (!empty($value['price_title'])) {
                    $price_title = $value['price_title'];
                  } else {
                    $price_title = '';
                  }
                  if (!empty($value['price'])) {
                    $price = $value['price'];
                  } else {
                    $price = '';
                  }
                  if (!empty($value['price_desc'])) {
                    $price_desc = $value['price_desc'];
                  } else {
                    $price_desc = '';
                  }
                  if (!empty($value['price_list'])) {
                    $price_list = $value['price_list'];
                  } else {
                    $price_list = '';
                  }

                  if (!empty($value['active_price'])) {
                    $active_class = 'active';
                  } else {
                    $active_class = '';
                  }
                  if (!empty($value['btn_link'])) {
                    $btn_link = $value['btn_link'];
                  } else {
                    $btn_link = '';
                  }
                  if (!empty($value['btn_text'])) {
                    $btn_text = $value['btn_text'];
                  } else {
                    $btn_text = '';
                  }
              ?>
                <div class="col-xl-4 col-md-6">
                    <div class="pricing-box <?php echo esc_attr( $active_class ); ?> text-center mb-30">
                        <div class="pricing-head mb-20">
                          <?php if (!empty($price_img)) { ?>
                            <div class="pricing-icon mb-45">
                                <img src="<?php echo esc_url( $price_img ); ?>" alt="icon">
                            </div>
                          <?php } ?>
                            <span><?php echo esc_html($price_title); ?></span>
                            <h2><span><?php esc_html_e( '$', 'alvon' ); ?></span><?php echo esc_html($price); ?><span><?php esc_html_e( '.00', 'alvon' ); ?></span>
                            </h2>
                        </div>
                        <div class="pricing-body">
                            <span><?php echo esc_html($price_desc); ?></span>
                            <p><?php echo $price_list; ?></p>
                        </div>
                        <?php if (!empty($btn_link)) { ?>
                        <div class="pricing-btn mt-35">
                            <a href="<?php echo esc_url($btn_link); ?>" class="btn"><i class="fal fa-shopping-cart"></i> <?php echo esc_html( $btn_text ); ?> </a>
                        </div>
                        <?php } ?>
                    </div>
                </div>
              <?php }} ?>
            </div>
        </div>
      <?php endwhile; wp_reset_postdata(); ?>
    </div>
</div>
<!-- pricing-area-end -->

<?php
  return ob_get_clean();
}
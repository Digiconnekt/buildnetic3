<?php 

/*------------------------------------------------------------------------------------------------------------------*/
/*  Alvon Skill
/*------------------------------------------------------------------------------------------------------------------*/

vc_map(array(
  'base' => 'alvon_skill',
  'name' => __('Skill', 'alvon'),
  'category' => __('Alvon', 'alvon'),
  'icon' => 'fa fa-repeat',
  'params' => array(

    array(
      "param_name"  => "skill_style",
      "type"      => "dropdown",
      "heading"     => __("Skill Style", "alvon"),
      "std"      => "1",
      "value" => array(
        'Circle skill' => '1',
        'Line skill'   => '2',
      ),
      "description"   => __("Layout Variation", "alvon"),
      'admin_label' => true,
    ),
    array(
      "param_name" => "skill_title",
      "type" => "textfield",
      "heading" => __("Skill Title", "alvon"),
      'admin_label' => true,
    ),
    array(
      "param_name"  => "skill_persantage",
      "type"      => "textfield",
      "heading"     => __("Skill Persantage", "alvon"),
      'admin_label' => false,
    ),
    array(
      "param_name"  => "data_box_size",
      "type"      => "textfield",
      "heading"     => __("Data Box Size", "alvon"),
      "std"       => __("100", "alvon"),
      'admin_label' => false,
      "dependency" => array(
        "element"=> "skill_style",
        "value"=> array( "1" ),
      ),
    ),
    array(
      "param_name"  => "data_line_width",
      "type"      => "textfield",
      "heading"     => __("Data Line Width", "alvon"),
      'admin_label' => false,
      "dependency" => array(
        "element"=> "skill_style",
        "value"=> array( "1" ),
      ),
    ),
    array(
      'param_name' => 'empty_fill_color',
      'type' => 'colorpicker',
      'heading' => __( 'Empty Fill Color', 'alvon' ),
      "value" => __( "#ecf1ff", "alvon" ),
      'description' => __( 'Empty fill means full circle color', 'alvon' ),
    ),
    array(
      'param_name' => 'fill_color1',
      'type' => 'colorpicker',
      'heading' => __( 'Fill Color 1', 'alvon' ),
      "value" => __( "#00B9FE", "alvon" ),
      "dependency" => array(
        "element"=> "skill_style",
        "value"=> array( "1" ),
      ),
      'description' => __( 'Fill means persantage circle color ( Gradient 1st color ). If you do not want to gradient please set both color same', 'alvon' ),
    ),
    array(
      'param_name' => 'fill_color2',
      'type' => 'colorpicker',
      'heading' => __( 'Fill Color 2', 'alvon' ),
      "value" => __( "#004FCD", "alvon" ),
      "dependency" => array(
        "element"=> "skill_style",
        "value"=> array( "1" ),
      ),
      'description' => __( 'Fill means persantage circle color ( Gradient 2nd color ). If you do not want to gradient please set both color same', 'alvon' ),
    ),
    array(
      'param_name' => 'fill_color',
      'type' => 'colorpicker',
      'heading' => __( 'Fill Color', 'alvon' ),
      "value" => __( "#fff", "alvon" ),
      "dependency" => array(
        "element"=> "skill_style",
        "value"=> array( "2" ),
      ),
      'description' => __( 'Fill means persantage line color.', 'alvon' ),
    ),
    array(
      "param_name"  => "desc_title",
      "type"      => "textfield",
      "heading"     => __("Description title", "alvon"),
      'admin_label' => false,
      "dependency" => array(
        "element"=> "skill_style",
        "value"=> array( "1" ),
      ),
    ),
    array(
      "param_name"  => "desc",
      "type"      => "textarea",
      "heading"     => __("Description", "alvon"),
      'admin_label' => false,
      "dependency" => array(
        "element"=> "skill_style",
        "value"=> array( "1" ),
      ),
    ),
    array(
      "param_name"  => "desc_link",
      "type"      => "textfield",
      "heading"     => __("Read More Link", "alvon"),
      'admin_label' => false,
      "dependency" => array(
        "element"=> "skill_style",
        "value"=> array( "1" ),
      ),
    ),
    array(
      "param_name"  => "circle_box_position",
      "type"      => "dropdown",
      "heading"     => __("Circle Position", "alvon"),
      "std" => __("top", "alvon"),
      "value" => array(
        'Left'  => 'left',
        'Top' => 'top',
      ),
      "description"   => __("Persantage circle position left or top", "alvon"),
      'admin_label' => false,
      "dependency" => array(
        "element"=> "skill_style",
        "value"=> array( "1" ),
      ),
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
      "param_name"  => "custom_class",
      "type"      => "textfield",
      "heading"     => __("Custom Class", "alvon"),
      'admin_label' => false,
    ),
    array(
      "param_name" => "skill_heading_color",
      "type" => "colorpicker",
      "heading" => __("Skill heading color", "alvon"),
      'admin_label' => false,
      "group" => esc_html__( "Styling", 'alvon'),
      "description"   => __("Skill item all heading color", "alvon"),
    ),
    array(
      "param_name" => "skill_text_color",
      "type" => "colorpicker",
      "heading" => __("Skill text color", "alvon"),
      'admin_label' => false,
      "group" => esc_html__( "Styling", 'alvon'),
      "description"   => __("Skill item all text color", "alvon"),
    ),

    // add params same as with any other content elemen
      
  ),
));

/*  Section Head Shortcode
/*-----------------------------------------------------------------------*/

add_shortcode( 'alvon_skill', 'alvon_skill_shortcode' );
function alvon_skill_shortcode($atts, $content = null) {
  extract( shortcode_atts(
    array(
      'skill_style'         => '1',
      'skill_title'         => 'Alvon Digital Agency',
      'skill_persantage'    => '80',
      'data_box_size'       => '210',
      'data_line_width'     => '8',
      'empty_fill_color'    => '#ecf1ff',
      'fill_color1'         => '#00B9FE',
      'fill_color2'         => '#004FCD',
      'fill_color'          => '#ffffff',
      'desc_title'          => '',
      'desc'                => '',
      'desc_link'           => '',
      'circle_box_position' => 'top',
      'animation'           => '',
      'anim_delay'          => '0.2s',
      'custom_class'        => '',
      'skill_heading_color' => '',
      'skill_text_color'    => '',
      ), $atts )
  );
  ob_start();

  $e_uniqid = uniqid();

  $unique_class = 'pie-'.$e_uniqid;

  if (!empty($fill_color1)) {
    $fill_color = $fill_color1;
  } elseif (!empty($fill_color1)) {
  } else {
    $fill_color = $fill_color1;
  }

  $inline_style = '';
  if ( $skill_heading_color ) {
    $inline_style .= '.skill-style'. $e_uniqid .' .skill-range > span {';
    $inline_style .= ( $skill_heading_color ) ? 'color:'. $skill_text_color  .' !important;' : '';
    $inline_style .= '}';
  }
  if ( $skill_heading_color ) {
    $inline_style .= '.skill-style'. $e_uniqid .' .pie-chart-percent span {';
    $inline_style .= ( $skill_heading_color ) ? 'color:'. $skill_heading_color  .' !important;' : '';
    $inline_style .= '}';
  }
  if ( $skill_heading_color ) {
    $inline_style .= '.skill-style'. $e_uniqid .' .pie-chart-percent sup {';
    $inline_style .= ( $skill_heading_color ) ? 'color:'. $skill_heading_color  .' !important;' : '';
    $inline_style .= '}';
  }
  if ( $skill_text_color ) {
    $inline_style .= '.skill-style'. $e_uniqid .' .skill-content h4 {';
    $inline_style .= ( $skill_heading_color ) ? 'color:'. $skill_heading_color  .' !important;' : '';
    $inline_style .= '}';
  }
  if ( $skill_text_color ) {
    $inline_style .= '.skill-style'. $e_uniqid .' .skill-content p {';
    $inline_style .= ( $skill_text_color ) ? 'color:'. $skill_text_color  .' !important;' : '';
    $inline_style .= '}';
  }
  if ( $skill_text_color ) {
    $inline_style .= '.skill-style'. $e_uniqid .' .skill-content a {';
    $inline_style .= ( $skill_text_color ) ? 'color:'. $skill_text_color  .' !important;' : '';
    $inline_style .= '}';
  }
  add_inline_style( $inline_style );
  $styled_class  = ' skill-style'. $e_uniqid;

?>
<script>
    jQuery(document).ready(function(){
     
      ! function(t) {
          "use strict";

          function e() {
              var t = document.createElement("style");
              t.appendChild(document.createTextNode("@-ms-viewport { width: device-width; }")), navigator.userAgent.match(/IEMobile\/10\.0/) && t.appendChild(document.createTextNode("@-ms-viewport { width: auto !important; }")), document.getElementsByTagName("head")[0].appendChild(t)
          }

          function a() {
              t(".pie-<?php echo esc_attr($e_uniqid); ?>").each(function() {
                  var e = t(this),
                      a = e.parent().width(),
                      i = e.attr("data-barSize");
                  i > a && (i = a), e.css("height", i), e.css("width", i), e.css("line-height", i + "px"), e.find("i").css({
                      "line-height": i + "px",
                      "font-size": i / 3
                  })
              })
          }

          function i() {
              "undefined" != typeof t.fn.easyPieChart && t(".pie-<?php echo esc_attr($e_uniqid); ?>:in-viewport").each(function() {
                  var e = t(this),
                      a = e.parent().width(),
                      i = e.attr("data-barSize"),
                      n = "square";
                  void 0 !== e.attr("data-lineCap") && (n = e.attr("data-lineCap")), i > a && (i = a), e.easyPieChart({
                      animate: 1300,
                      lineCap: n,
                      lineWidth: e.attr("data-lineWidth"),
                      size: i,
                      barColor: function() {
                        var ctx = this.renderer.getCtx();
                        var canvas = this.renderer.getCanvas();
                        var gradient = ctx.createLinearGradient(230.000, 0.000, 70.000, 300.000);
                        gradient.addColorStop(.227, '<?php echo esc_attr( $fill_color1 ); ?>');
                        gradient.addColorStop(.60, '<?php echo esc_attr( $fill_color2 ); ?>');
                        return gradient;
                      },
                       trackColor: e.attr("data-trackColor"),
                      scaleColor: "transparent",
                      onStep: function(e, a, i) {
                          t(this.el).find(".pie-chart-percent span").text(Math.round(i))
                      }
                  })
              })
          }
          t(document).ready(function() {
              e(), a(), i()
          }), t(window).scroll(function() {
              i()
          })

      }(window.jQuery);

    });
  </script>
<?php if ( $skill_style == 1 ) { ?>

  <!-- Alvon Skill
  ============================================= -->
  <?php if ($circle_box_position == 'left') { ?>
  <div class="single-skill ss-skill pb-30 wow <?php echo esc_attr( $animation.' '.$custom_class.$styled_class ); ?>" data-wow-delay="<?php echo esc_attr( $anim_delay ); ?>">
    <div class="circle-wrap">
      <div class="pie-chart p-relative display-ib <?php echo esc_attr( $unique_class ); ?>" data-percent="<?php echo esc_attr($skill_persantage); ?>" data-trackcolor="<?php echo esc_attr($empty_fill_color); ?>" data-linewidth="<?php echo esc_attr($data_line_width); ?>" data-barsize="<?php echo esc_attr($data_box_size); ?>">
          <div class="skill-range">
            <div class="pie-chart-percent">
              <span></span>
              <sup><?php esc_html_e( '%', 'alvon' ); ?></sup>
            </div>
            <span><?php echo esc_html($skill_title); ?></span>
          </div>
      </div>
    </div>
    <div class="skill-content fix">
      <h4><?php echo esc_html($desc_title); ?></h4>
      <p><?php echo esc_html($desc); ?></p>
      <?php if (!empty($desc_link)) { ?>
        <a href="<?php echo esc_url( $desc_link ); ?>"><i class="fal fa-angle-right"></i> <?php esc_html_e( 'Read More', 'alvon' ); ?></a>
      <?php } ?>
    </div>
  </div>
  <?php } else if ($circle_box_position == 'top') { ?>
  <div class="single-skill pb-30 text-center wow <?php echo esc_attr( $animation . ' ' . $custom_class.$styled_class ); ?>" data-wow-delay="<?php echo esc_attr( $anim_delay ); ?>">
      <div class="circle-wrap mb-10">
          <div class="pie-chart p-relative display-ib <?php echo esc_attr( $unique_class ); ?>" data-percent="<?php echo esc_attr($skill_persantage); ?>" data-trackcolor="<?php echo esc_attr($empty_fill_color); ?>" data-linewidth="<?php echo esc_attr($data_line_width); ?>" data-barsize="<?php echo esc_attr($data_box_size); ?>">
              <div class="skill-range">
                  <div class="pie-chart-percent">
                      <span></span>
                      <sup><?php esc_html_e( '%', 'alvon' ); ?></sup>
                  </div>
                  <span><?php echo esc_html($skill_title); ?></span>
              </div>
          </div>
      </div>
      <div class="skill-content">
        <?php if (!empty($desc_title)) { ?>
        <h4><?php echo esc_html($desc_title); ?></h4>
        <?php } if (!empty($desc)) { ?>
        <p><?php echo esc_html($desc); ?></p>
        <?php } if (!empty($desc_link)) { ?>
          <a href="<?php echo esc_url( $desc_link ); ?>"><i class="fal fa-angle-right"></i> <?php esc_html_e( 'Read More', 'alvon' ); ?></a>
        <?php } ?>
      </div>
  </div>

  <?php } else { ?>
  <div class="single-skill pb-30 text-center wow <?php echo esc_attr( $animation.' '.$custom_class.$styled_class ); ?>" data-wow-delay="<?php echo esc_attr( $anim_delay ); ?>">
      <div class="circle-wrap mb-10">
          <div class="pie-chart p-relative display-ib" data-percent="<?php echo esc_attr($skill_persantage); ?>" data-trackcolor="<?php echo esc_attr($empty_fill_color); ?>" data-linewidth="<?php echo esc_attr($data_line_width); ?>" data-barsize="<?php echo esc_attr($data_box_size); ?>">
              <div class="skill-range">
                  <div class="pie-chart-percent">
                      <span></span>
                      <sup><?php esc_html_e( '%', 'alvon' ); ?></sup>
                  </div>
                  <span><?php echo esc_html($skill_title); ?></span>
              </div>
          </div>
      </div>
      <div class="skill-content">
        <?php if (!empty($desc_title)) { ?>
        <h4><?php echo esc_html($desc_title); ?></h4>
        <?php } if (!empty($desc)) { ?>
        <p><?php echo esc_html($desc); ?></p>
        <?php } if (!empty($desc_link)) { ?>
          <a href="<?php echo esc_url( $desc_link ); ?>"><i class="fal fa-angle-right"></i> <?php esc_html_e( 'Read More', 'alvon' ); ?></a>
        <?php } ?>
      </div>
  </div>
  <?php } ?>
  <!-- End Of Alvon Skill
  ============================================= -->

<?php } elseif ( $skill_style == 2 ) { ?>
  <div class="team-single-skill mb-30">
    <?php if (!empty($skill_title)) { ?>
      <div class="bar-title">
          <h4><?php echo esc_html($skill_title); ?></h4>
      </div>
    <?php } ?>
    <div class="progress">
        <div class="progress-bar wow slideInLeft" role="progressbar" style="width: <?php echo esc_attr($skill_persantage); ?>%;" aria-valuenow="<?php echo esc_attr($skill_persantage); ?>" aria-valuemin="0" aria-valuemax="100" data-wow-duration="1s" data-wow-delay="<?php echo esc_attr($anim_delay); ?>">
            <span><?php echo esc_html($skill_persantage); ?><?php esc_html_e( '%', 'alvon' ); ?></span>
        </div>
    </div>
  </div>

<?php } else { ?>
  <!-- Alvon Skill
  ============================================= -->
  <?php if ($circle_box_position == 'left') { ?>
  <div class="single-skill ss-skill pb-30 wow <?php echo esc_attr( $animation . ' ' . $custom_class ); ?>" data-wow-delay="<?php echo esc_attr( $anim_delay ); ?>">
    <div class="circle-wrap">
      <div class="pie-chart p-relative display-ib" data-percent="<?php echo esc_attr($skill_persantage); ?>" data-barcolor="<?php echo esc_attr($fill_color); ?>"
          data-trackcolor="<?php echo esc_attr($empty_fill_color); ?>" data-linewidth="<?php echo esc_attr($data_line_width); ?>" data-barsize="<?php echo esc_attr($data_box_size); ?>">
          <div class="skill-range">
            <div class="pie-chart-percent">
              <span></span>
              <sup><?php esc_html_e( '%', 'alvon' ); ?></sup>
            </div>
            <span><?php echo esc_html($skill_title); ?></span>
          </div>
      </div>
    </div>
    <div class="skill-content fix">
      <h4><?php echo esc_html($desc_title); ?></h4>
      <p><?php echo esc_html($desc); ?></p>
      <?php if (!empty($desc_link)) { ?>
        <a href="<?php echo esc_url( $desc_link ); ?>"><i class="fal fa-angle-right"></i> <?php esc_html_e( 'Read More', 'alvon' ); ?></a>
      <?php } ?>
    </div>
  </div>
  <?php } else if ($circle_box_position == 'top') { ?>
  <div class="single-skill pb-30 text-center wow <?php echo esc_attr( $animation . ' ' . $custom_class ); ?>" data-wow-delay="<?php echo esc_attr( $anim_delay ); ?>">
      <div class="circle-wrap mb-10">
          <div class="pie-chart p-relative display-ib" data-percent="<?php echo esc_attr($skill_persantage); ?>" data-barcolor="<?php echo esc_attr($fill_color); ?>"
          data-trackcolor="<?php echo esc_attr($empty_fill_color); ?>" data-linewidth="<?php echo esc_attr($data_line_width); ?>" data-barsize="<?php echo esc_attr($data_box_size); ?>">
              <div class="skill-range">
                  <div class="pie-chart-percent">
                      <span></span>
                      <sup><?php esc_html_e( '%', 'alvon' ); ?></sup>
                  </div>
                  <span><?php echo esc_html($skill_title); ?></span>
              </div>
          </div>
      </div>
      <div class="skill-content">
        <?php if (!empty($desc_title)) { ?>
        <h4><?php echo esc_html($desc_title); ?></h4>
        <?php } if (!empty($desc)) { ?>
        <p><?php echo esc_html($desc); ?></p>
        <?php } if (!empty($desc_link)) { ?>
          <a href="<?php echo esc_url( $desc_link ); ?>"><i class="fal fa-angle-right"></i> <?php esc_html_e( 'Read More', 'alvon' ); ?></a>
        <?php } ?>
      </div>
  </div>
  <?php } else { ?>
  <div class="single-skill pb-30 text-center wow <?php echo esc_attr( $animation . ' ' . $custom_class ); ?>" data-wow-delay="<?php echo esc_attr( $anim_delay ); ?>">
      <div class="circle-wrap mb-10">
          <div class="pie-chart p-relative display-ib" data-percent="<?php echo esc_attr($skill_persantage); ?>" data-barcolor="<?php echo esc_attr($fill_color); ?>"
          data-trackcolor="<?php echo esc_attr($empty_fill_color); ?>" data-linewidth="<?php echo esc_attr($data_line_width); ?>" data-barsize="<?php echo esc_attr($data_box_size); ?>">
              <div class="skill-range">
                  <div class="pie-chart-percent">
                      <span></span>
                      <sup><?php esc_html_e( '%', 'alvon' ); ?></sup>
                  </div>
                  <span><?php echo esc_html($skill_title); ?></span>
              </div>
          </div>
      </div>
      <div class="skill-content">
        <?php if (!empty($desc_title)) { ?>
        <h4><?php echo esc_html($desc_title); ?></h4>
        <?php } if (!empty($desc)) { ?>
        <p><?php echo esc_html($desc); ?></p>
        <?php } if (!empty($desc_link)) { ?>
          <a href="<?php echo esc_url( $desc_link ); ?>"><i class="fal fa-angle-right"></i> <?php esc_html_e( 'Read More', 'alvon' ); ?></a>
        <?php } ?>
      </div>
  </div>
  <?php } ?>
  <!-- End Of Alvon Skill
  ============================================= -->
<?php }
  return ob_get_clean();
}
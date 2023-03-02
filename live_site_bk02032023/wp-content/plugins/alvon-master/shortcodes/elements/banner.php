<?php 
/*------------------------------------------------------------------------------------------------------------------*/
/*  Alvon Banner
/*------------------------------------------------------------------------------------------------------------------*/

vc_map(array(
  'base' => 'alvon_banner',
  'name' => __('Banner', 'alvon'),
  'category' => __('Alvon', 'alvon'),
  'icon' => 'far fa-image',
  'params' => array(

    array(
      "param_name" => "banner_title",
      "type" => "textfield",
      "heading" => __("Title", "alvon"),
      'admin_label' => true,
    ),
    array(
      "param_name" => "banner_desc",
      "type" => "textarea",
      "heading" => __("Description", "alvon"),
      'admin_label' => false,
    ),
    array(
      "param_name" => "btn1_text",
      "type" => "textfield",
      "heading" => __("Button 1 Text", "alvon"),
    ),
    array(
      "param_name" => "btn1_link",
      "type" => "vc_link",
      "heading" => __("Button 1 Link", "alvon"),
    ),
    array(
      "param_name" => "btn2_text",
      "type" => "textfield",
      "heading" => __("Button 2 Text", "alvon"),
    ),
    array(
      "param_name" => "btn2_link",
      "type" => "vc_link",
      "heading" => __("Button 2 Link", "alvon"),
    ),
    array(
      "param_name" => "video_ba_img",
      "type" => "attach_image",
      "heading" => __("Video Banckground Image", "alvon"),
    ),
    array(
      "param_name" => "video_link",
      "type" => "textfield",
      "heading" => __("Video Link", "alvon"),
      'admin_label' => false,
    ),
    array(
      "param_name" => "custom_class",
      "type" => "textfield",
      "heading" => __("Custom Class", "alvon"),
      'admin_label' => false,
    ),
  ),
));


/*  Pretty Icon Item Shortcode
/*-----------------------------------------------------------------------*/

add_shortcode( 'alvon_banner', 'alvon_banner_shortcode' );
function alvon_banner_shortcode($atts, $content = null) {
  extract( shortcode_atts(
    array(
      'banner_title' => '',
      'banner_desc'  => '',
      'btn1_text'    => '',
      'btn1_link'    => '',
      'btn2_text'    => '',
      'btn2_link'    => '',
      'video_ba_img' => '',
      'video_link'   => '',
      'custom_class' => '',
      ), $atts )
  );
  ob_start();

  $video_ba_img = get_vc_image( $video_ba_img, 'full' );

  if ($btn1_link) {
    $url = $btn1_link;
    $link = vc_build_link( $url );
    $link = ($link=='||') ? '' : $link;
    $a_link = $link['url'];
    $a_title = ($link['title'] == '') ? '' : $link['title'];
    $a_target = ($link['target'] == '') ? '' : 'target="'.$link['target'].'"';
  }
  if ($btn2_link) {
    $url2 = $btn2_link;
    $link2 = vc_build_link( $url2 );
    $link2 = ($link2=='||') ? '' : $link2;
    $a_link2 = $link2['url'];
    $a_title2 = ($link2['title'] == '') ? '' : $link2['title'];
    $a_target2 = ($link2['target'] == '') ? '' : 'target="'.$link2['target'].'"';
  }
  ?>

  <!-- slider-area -->
  <div class="slider-area p-relative">
      <div class="slider-active">
          <div class="single-slider d-flex align-items-center t-slider-bg">
              <div class="container-fluid">
                  <div class="row slider-pt align-items-center justify-content-between">
                      <div class="col-lg-6">
                          <div class="slider-content t-slider-content">
                              <h2 data-animation="fadeInUp" data-delay=".2s"><?php echo esc_html( $banner_title ); ?></h2>
                              <p data-animation="fadeInUp" data-delay=".4s"><?php echo esc_html( $banner_desc ); ?></p>
                              <div class="t-slider-btn" data-animation="fadeInUp" data-delay=".6s">
                                <?php if (!empty($a_link)) { ?>
                                  <a href="<?php echo esc_url( $a_link ); ?>" class="btn"><?php echo esc_html( $btn1_text ); ?></a>
                                <?php } if (!empty($a_link2)) { ?>
                                  <a href="<?php echo esc_url( $a_link2 ); ?>" class="btn black-btn"><?php echo esc_html( $btn2_text ); ?></a>
                                <?php } ?>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-6 slider-img-pr d-none d-lg-block">
                          <div class="t-slider-img p-relative" data-animation="fadeInRight" data-delay=".6s">
                              <img src="<?php echo esc_url( $video_ba_img ); ?>" alt="img">
                              <a href="<?php echo esc_url( $video_link ); ?>" class="popup-video"><i class="fas fa-play"></i></a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- slider-area-end -->

<?php
  return ob_get_clean();
}
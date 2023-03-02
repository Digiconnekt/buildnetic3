<?php 
/*------------------------------------------------------------------------------------------------------------------*/
/*  Alvon Banner
/*------------------------------------------------------------------------------------------------------------------*/

vc_map(array(
  'base' => 'alvon_experience',
  'name' => __('Experience man', 'alvon'),
  'category' => __('Alvon', 'alvon'),
  'icon' => 'fas fa-dragon',
  'params' => array(

    array(
      "param_name" => "section_sub_title",
      "type" => "textfield",
      "heading" => __("Sub Title", "alvon"),
    ),
    array(
      "param_name" => "section_title",
      "type" => "textfield",
      "heading" => __("Title", "alvon"),
      'admin_label' => true,
    ),
    array(
      "param_name" => "section_title_underline",
      "type" => "textfield",
      "heading" => __("Underline Title", "alvon"),
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
      'param_name' => 'experience_team_img',
      'type' => 'param_group',
      'params' => array(

        array(
          "param_name" => "experience_img",
          "type" => "attach_image",
          "heading" => __("Experience man image", "alvon"),
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
      "heading" => __("Custom Class", "alvon"),
      'admin_label' => false,
    ),

  ),
));


/*  Pretty Icon Item Shortcode
/*-----------------------------------------------------------------------*/

add_shortcode( 'alvon_experience', 'alvon_experience_shortcode' );
function alvon_experience_shortcode($atts, $content = null) {
  extract( shortcode_atts(
    array(
      'section_sub_title'       => '',
      'section_title'           => '',
      'section_title_underline' => '',
      'btn1_text'               => '',
      'btn1_link'               => '',
      'btn2_text'               => '',
      'btn2_link'               => '',
      'experience_team_img'     => '',
      'custom_class'            => '',
      ), $atts )
  );
  ob_start();

  if (!empty($atts['experience_team_img'])) {
    $experience_team_img = vc_param_group_parse_atts($atts['experience_team_img']);
  } else {
    $experience_team_img = '';
  }

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

  <!-- experience-area -->
  <div class="exp-area p-relative exp-bg pt-80 pb-105">
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-xl-6 col-lg-8">
                  <div class="exp-content text-center">
                      <?php if (!empty($section_sub_title)) { ?>
                      <span><?php echo esc_html( $section_sub_title ); ?></span>
                      <?php } ?>
                      <h2> <?php echo esc_html( $section_title ); ?> <span><?php echo esc_html( $section_title_underline ); ?></span></h2>
                      <?php if (!empty($a_link)) { ?>
                      <a href="<?php echo esc_url( $a_link ); ?>" class="btn"><?php echo esc_html( $btn1_text ); ?></a>
                      <?php } if (!empty($a_link2)) { ?>
                      <a href="<?php echo esc_url( $a_link2 ); ?>" class="btn black-btn"><?php echo esc_html( $btn2_text ); ?></a>
                      <?php } ?>
                  </div>
              </div>
          </div>
      </div>
      <div class="exp-client <?php echo esc_attr( $custom_class ); ?>">
        <ul>
          <?php 
            if (is_array( $experience_team_img )) {
            foreach( $experience_team_img as $man_list) {

              if (!empty($man_list['custom_list_class'])) {
                $custom_list_class = $man_list['custom_list_class'];
              } else {
                $custom_list_class = '';
              }

              if (!empty($man_list['experience_img'])) {
                $experience_img = $man_list['experience_img'];
              } else {
                $experience_img = '';
              }               
              $experience_img = get_vc_image( $experience_img, 'full' );

          ?>
            <li class="experience-<?php echo esc_attr( $custom_list_class ); ?>"><img src="<?php echo esc_url( $experience_img ); ?>" alt="img"></li>
          <?php }} ?>
        </ul>
      </div>
  </div>
  <!-- experience-area-end -->

<?php
  return ob_get_clean();
}
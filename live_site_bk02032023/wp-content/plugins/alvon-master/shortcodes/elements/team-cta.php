<?php 
/*------------------------------------------------------------------------------------------------------------------*/
/*  Alvon Pretty Icon Item
/*------------------------------------------------------------------------------------------------------------------*/

vc_map(array(
  'base' => 'alvon_team_cta',
  'name' => __('Team CTA', 'alvon'),
  'category' => __('Alvon', 'alvon'),
  'icon' => 'fas fa-drafting-compass',
  'params' => array(

    array(
      "param_name" => "cta_bg_img",
      "type" => "attach_image",
      "heading" => __("Background Image", "alvon"),
    ),
    array(
      "param_name" => "title_text",
      "type" => "textfield",
      "heading" => __("Title", "alvon"),
    ),
    array(
      "param_name" => "underline_title",
      "type" => "textfield",
      "heading" => __("Under Line Title", "alvon"),
    ),
    array(
      "param_name" => "btn1_link",
      "type" => "vc_link",
      "heading" => __("Button 1 Link", "alvon"),
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

add_shortcode( 'alvon_team_cta', 'alvon_team_cta_shortcode' );
function alvon_team_cta_shortcode($atts, $content = null) {
  extract( shortcode_atts(
    array(
      'cta_bg_img'      => '',
      'title_text'      => '',
      'underline_title' => '',
      'btn1_link'       => '',
      'custom_class'    => '',
      ), $atts )
  );
  ob_start();

    $cta_bg_img = get_vc_image( $cta_bg_img, 'full' );

    if ($btn1_link) {
      $url = $btn1_link;
      $link = vc_build_link( $url );
      $link = ($link=='||') ? '' : $link;
      $a_link = $link['url'];
      $a_title = ($link['title'] == '') ? '' : $link['title'];
      $a_target = ($link['target'] == '') ? '' : 'target="'.$link['target'].'"';
    }
  ?>

  <div class="office-img office-img-overlay p-relative mb-30 <?php echo esc_attr( $custom_class ); ?>">
    <img src="<?php echo esc_url( $cta_bg_img ); ?>" alt="img">
    <div class="office-overlay">
      <h4><?php echo esc_html( $title_text ); ?> <span><?php echo esc_html( $underline_title ); ?></span></h4>
      <?php if (!empty($a_link)) { ?>
        <a href="<?php echo esc_url( $a_link ); ?>" class="btn"><?php echo esc_html( $a_title ); ?></a>
      <?php } ?>
    </div>
  </div>
 
<?php
  return ob_get_clean();
}
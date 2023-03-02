<?php 
/*------------------------------------------------------------------------------------------------------------------*/
/*  Alvon Icon List
/*------------------------------------------------------------------------------------------------------------------*/

vc_map(array(
  'base' => 'faq_list',
  'name' => __('Faq List', 'alvon'),
  'category' => __('Alvon', 'alvon'),
  'icon' => 'far fa-question-circle',
  'params' => array(

    array(
      'param_name' => 'faq_lists',
      'type' => 'param_group',
      'params' => array(
        /*List Title*/
        array(
          "param_name" => "faq_title",
          "type" => "textfield",
          "heading" => __("Faq Title", "alvon"),
        ),
        /*List Description*/
        array(
          "param_name" => "faq_text",
          "type" => "textarea",
          "heading" => __("Faq text", "alvon"),
        ),
        array(
          "param_name" => "custom_faq_class",
          "type" => "textfield",
          "heading" => __("Custom List Class", "alvon"),
        ),

      )
    ),
    array(
      'param_name' => 'faq_column',
      'type' => 'dropdown',
      'heading' => esc_html__( 'Faq columns',  "alvon" ),
      'std' => '6',
      'value' => array(
        esc_html__( 'Select your columns',  "alvon"  ) => ' ',
        esc_html__( 'Columns 2',  "alvon"  ) => '6',
        esc_html__( 'Columns 3',  "alvon"  ) => '4',
        esc_html__( 'Columns 4',  "alvon"  ) => '3',
      ),
    ),
    array(
      "param_name" => "custom_class",
      "type" => "textfield",
      "heading" => __("Custom List Class", "alvon"),
    ),

  ),
));


/*  Icon List Shortcode
/*-----------------------------------------------------------------------*/

add_shortcode( 'faq_list', 'faq_list_shortcode' );
function faq_list_shortcode($atts, $content = null) {
  extract( shortcode_atts(
    array(
      'faq_lists'    => '',
      'faq_column'   => '6',
      'custom_class' => '',
      ), $atts )
  );
  ob_start();

  if (!empty($atts['faq_lists'])) {
    $faq_lists = vc_param_group_parse_atts($atts['faq_lists']);
  } else {
    $faq_lists = '';
  }

?>

<!-- Icon List
============================================= -->
<div class="faq-wrap">
  <div class="row">
    <?php 
    if (is_array( $faq_lists )) {
      $i = 0;
      foreach( $faq_lists as $list) {
      $i++;
      if (!empty($list['faq_title'])) {
        $faq_title = $list['faq_title'];
      } else {
        $faq_title = '';
      }
      if (!empty($list['faq_text'])) {
        $faq_text = $list['faq_text'];
      } else {
        $faq_text = '';
      }
      
      if (!empty($list['custom_faq_class'])) {
        $custom_faq_class = $list['custom_faq_class'];
      } else {
        $custom_faq_class = '';
      }
      if ($i<10) {
        $i = '0'. $i; 
      } else {
        $i = $i;
      }
    ?>
    <div class="col-md-6">
      <div class="single-faq mb-30">
        <div class="faq-top">
          <div class="faq-count">
            <span><?php echo esc_html( $i ); ?></span>
          </div>
          <div class="faq-title">
            <h5><?php echo esc_html( $faq_title ); ?></h5>
          </div>
        </div>
        <div class="faq-content">
          <p><?php echo esc_html( $faq_text ); ?></p>
        </div>
      </div>
    </div>
    <?php } } ?>
  </div>
</div>
<!-- End Of Icon List
============================================= -->

<?php
  return ob_get_clean();
}
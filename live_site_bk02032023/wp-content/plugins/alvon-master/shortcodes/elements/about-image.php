<?php 
/*------------------------------------------------------------------------------------------------------------------*/
/*  Alvon Pretty Icon Item
/*------------------------------------------------------------------------------------------------------------------*/

vc_map(array(
  'base' => 'alvon_about_image',
  'name' => __('About Image', 'alvon'),
  'category' => __('Alvon', 'alvon'),
  'icon' => 'far fa-address-book',
  'params' => array(

    array(
      "param_name"  => "about_variation",
      "type"      => "dropdown",
        "heading"     => __("Variation Style", "alvon"),
        "value" => array(
          'About 1' => '1',
          'About 2' => '2',
        ),
      "description"   => __("Layout Variation", "alvon"),
      'admin_label' => true,
    ),

    array(
      "param_name" => "about_image1",
      "type" => "attach_image",
      "heading" => __("Image 1", "alvon"),
    ),
    array(
      "param_name" => "about_image2",
      "type" => "attach_image",
      "heading" => __("Image 2", "alvon"),
    ),
    array(
      "param_name" => "box_title",
      "type" => "textfield",
      "heading" => __("Box Title", "alvon"),
      'admin_label' => false,
      "dependency" => array(
        "element"=> "about_variation",
        "value"=> array( "1" ),
      ),
    ),
    array(
      "param_name" => "box_number",
      "type" => "textfield",
      "heading" => __("Box Number", "alvon"),
      'admin_label' => false,
      "dependency" => array(
        "element"=> "about_variation",
        "value"=> array( "1" ),
      ),
    ),
    array(
      "param_name" => "box_bg_color",
      "type" => "colorpicker",
      "heading" => __("Box Background Color", "alvon"),
      'admin_label' => false,
      "dependency" => array(
        "element"=> "about_variation",
        "value"=> array( "1" ),
      ),
      "group" => esc_html__( "Styling", 'novable'),
    ),
    array(
      "param_name" => "box_color",
      "type" => "colorpicker",
      "heading" => __("Box Font Color", "alvon"),
      'admin_label' => false,
      "dependency" => array(
        "element"=> "about_variation",
        "value"=> array( "1" ),
      ),
      "group" => esc_html__( "Styling", 'novable'),
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

add_shortcode( 'alvon_about_image', 'alvon_about_image_shortcode' );
function alvon_about_image_shortcode($atts, $content = null) {
  extract( shortcode_atts(
    array(
      'about_variation'  => '',
      'about_image1'     => '',
      'about_image2'     => '',
      'box_title'        => '',
      'box_number'       => '',
      'box_bg_color'     => '#00aeff',
      'box_color'        => '#fff',
      'custom_class'     => '',
      ), $atts )
  );
  ob_start();

    $image1 = get_vc_image( $about_image1, 'full' );
    $image2 = get_vc_image($about_image2, 'full');

    $e_uniqid     = uniqid();
    $inline_style = '';
    if ( $box_bg_color || $box_color ) {
      $inline_style .= '.ab-box-style'. $e_uniqid .'{';
      $inline_style .= ( $box_bg_color ) ? 'background-color:'. $box_bg_color  .' !important;' : '';
      $inline_style .= ( $box_color ) ? 'color:'. $box_color  .' !important;' : '';
      $inline_style .= '}';
    }
    add_inline_style( $inline_style );
    $styled_class  = 'ab-box-style'. $e_uniqid;

  ?>


  <script>
    jQuery(document).ready(function(){
      jQuery.fn.isInViewport = function() {
        var elementTop = jQuery(this).offset().top;
        var elementBottom = elementTop + jQuery(this).outerHeight();

        var viewportTop = jQuery(window).scrollTop();
        var viewportBottom = viewportTop + jQuery(window).height();

        return elementBottom > viewportTop && elementTop < viewportBottom;
      };

      jQuery(window).on('resize scroll', function() {
        jQuery('.odometer').each(function() {
          if (jQuery(this).isInViewport()) {
              
            setTimeout(function(){
              jQuery('.odometer').html(<?php echo esc_html( $box_number ); ?>);
            }, 0);
          } else {
          }
        });
      });

    });
  </script>

  <?php if ($about_variation == 1 ) { ?>

  <div class="about-image about-shape <?php echo esc_attr( $custom_class ); ?> p-relative">
    <img src="<?php echo esc_url( $image1 ); ?>" alt="<?php esc_attr_e( 'image', 'alvon' ); ?>">
    <img src="<?php echo esc_url( $image2 ); ?>" alt="<?php esc_attr_e( 'image', 'alvon' ); ?>" class="abottom-img">
    <div class="our-experience <?php echo esc_attr( $styled_class ); ?>">
      <h4><span class="odometer"><?php esc_html_e( '1', 'alvon' ); ?>1</span> <span><?php echo esc_html( $box_title ); ?></span></h4>
    </div>
  </div>
  <?php } elseif ($about_variation == 2 ) { ?>
  <div class="s-about-image <?php echo esc_attr( $custom_class ); ?> p-relative">
    <img src="<?php echo esc_url( $image1 ); ?>" alt="<?php esc_attr_e( 'image', 'alvon' ); ?>">
    <img src="<?php echo esc_url( $image2 ); ?>" alt="<?php esc_attr_e( 'image', 'alvon' ); ?>" class="s-about-shape rotateme">
  </div>
  <?php } else { ?>
  <div class="about-image about-shape <?php echo esc_attr( $custom_class ); ?> p-relative">
    <img src="<?php echo esc_url( $image1 ); ?>" alt="<?php esc_attr_e( 'image', 'alvon' ); ?>">
    <img src="<?php echo esc_url( $image2 ); ?>" alt="<?php esc_attr_e( 'image', 'alvon' ); ?>" class="abottom-img">
    <div class="our-experience <?php echo esc_attr( $styled_class ); ?>">
      <h4><span class="odometer"><?php esc_html_e( '1', 'alvon' ); ?>1</span> <span><?php echo esc_html( $box_title ); ?></span></h4>
    </div>
  </div>
<?php }
  return ob_get_clean();
}
?>
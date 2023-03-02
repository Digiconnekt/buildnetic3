<?php 
/*------------------------------------------------------------------------------------------------------------------*/
/*  Arrowtic Section Head
/*------------------------------------------------------------------------------------------------------------------*/

vc_map(array(
  'base' => 'alvon_service_post_grid',
  'name' => __('Service Post Grid', 'alvon'),
  'category' => __('Alvon', 'alvon'),
  'icon' => 'fa fa-briefcase',
  'params' => array(

    array(
      "param_name" => "posts_per_page",
      "type" => "textfield",
        "heading" => __("Posts Per Page", "alvon"),
    ),
    array(
      "param_name" => "posts_content_excerpt",
      "type" => "textfield",
        "heading" => __("Posts Content Length", "alvon"),
    ),
    array(
      'param_name' => 'posts_order',
      'type' => 'dropdown',
      'heading' => __( 'Select Post Order',  "alvon" ),
      'value' => array(
        __( 'Select Post Order',  "alvon"  ) => ' ',
        __( 'Ascending Order',  "alvon"  ) => 'ASC',
        __( 'Descending Order',  "alvon"  ) => 'DESC',
      ),
      "description" => __( "Select your post order ascending  or descending columns", "alvon" )
    ),
    array(
      'param_name' => 'grid_column',
      'type' => 'dropdown',
      'heading' => __( 'Please select Your Post Column',  "alvon" ),
      'value' => array(
        __( 'Select Your Column',  "alvon"  ) => ' ',
        __( 'Column 2',  "alvon"  ) => '6',
        __( 'Column 3',  "alvon"  ) => '4',
        __( 'Column 4',  "alvon"  ) => '3',
      ),
      "description" => __( "Please select your item columns", "alvon" )
    ),
    array(
      'param_name' => 'item_text_align',
      'type' => 'dropdown',
      'heading' => __( 'Please select your section text align',  "alvon" ),
      'value' => array(
        __( 'Select text align',  "alvon"  ) => ' ',
        __( 'Text Align Center',  "alvon"  ) => 'text-center',
        __( 'Text Align Left',  "alvon"  ) => 'text-left',
        __( 'Text Align Right',  "alvon"  ) => 'text-right',
      ),
      "description" => __( "There have more section head style. check all one by one for your need.", "alvon" )
    ),
    array(
      'param_name' => 'service_styles',
      'type' => 'dropdown',
      'heading' => __( 'Please select service style',  "alvon" ),
      'value' => array(
        __( 'Select service style',  "alvon"  ) => ' ',
        __( 'Style 1',  "alvon"  ) => '1',
        __( 'Style 2',  "alvon"  ) => '2',
        __( 'Style 3',  "alvon"  ) => '3',
      )
    ),
  ),
));


/*  Service post grid shortcode
/*-----------------------------------------------------------------------*/

add_shortcode( 'alvon_service_post_grid', 'alvon_service_post_grid_shortcode' );
function alvon_service_post_grid_shortcode($atts, $content = null) {
  extract( shortcode_atts(
    array(
      'posts_per_page'        => '',
      'posts_content_excerpt' => '20',
      'posts_order'           => 'ASC',
      'grid_column'           => '4',
      'item_text_align'       => '',
      'service_styles'        => '',
      ), $atts )
  );
  ob_start();

  if ($item_text_align == 'text-left') {
    $content_position = 'text-left';
  } elseif ($item_text_align == 'text-center') {
    $content_position = 'text-center';
  } elseif ( $item_text_align == 'text-right' ) {
    $content_position = 'text-right';
  } else {
    $content_position = 'text-center';
  }

?>

<!-- Service
============================================= -->
<div class="row">
  <?php 
    $the_query = new WP_Query( array(
      'post_type' => 'service',
      'posts_per_page' => $posts_per_page,
      'order' => $posts_order,
    ) );

    $i = 0;
    while ( $the_query->have_posts() ) : $the_query->the_post();
    $i++;
    if ($i<10) {
      $i = '0'.$i;
    } else {
      $i = $i;
    }
    $service_meta = get_post_meta(get_the_ID(), '_alvon_service', true);

    if (!empty($service_meta['service_icon_type'])) {
      $service_icon_type = $service_meta['service_icon_type'];
    } else {
      $service_icon_type = '';
    }

    if ($service_icon_type == 'icon') {
      if (!empty($service_meta['service_icon'])) {
        $service_icon = $service_meta['service_icon'];
      } else {
        $service_icon = '';
      }
    } elseif ($service_icon_type == 'image') {
      if (!empty($service_meta['service_icon_image'])) {
        $image_id = $service_meta['service_icon_image'];
        $attachment = wp_get_attachment_image_src( $image_id, 'full' );
        $service_icon = $attachment['0'];
      } else {
        $service_icon = '';
      }
    } else {
      $service_icon = '';
    }

    if (!empty($service_meta['service_icon_color'])) {
      $service_icon_color = $service_meta['service_icon_color'];
    } else {
      $service_icon_color = '';
    }

    if (!empty($service_meta['service_custom_class'])) {
      $service_custom_class = $service_meta['service_custom_class'];
    } else {
      $service_custom_class = '';
    }

    if ($service_styles == 1) {
  ?>
  <div class="col-lg-<?php echo esc_attr( $grid_column ); ?> col-md-6" >
    <div class="single-services <?php echo esc_attr( $content_position . ' ' . $service_custom_class ); ?> mb-50">
      <?php if ($service_icon_type == 'image') { ?>
        <div class="services-icon">
          <img src="<?php echo esc_url( $service_icon ); ?>" alt="<?php echo esc_attr( 'Icon Image', 'alvon' ); ?>" data-aos="zoom-in-down">
        </div>
      <?php } else if ($service_icon_type == 'icon') { ?>
        <div class="services-icon">
          <i class="<?php echo esc_attr( $service_icon . ' ' . $service_custom_class ); ?>" style="color: <?php echo esc_attr( $service_icon_color ); ?>"></i>
        </div>
      <?php } ?>
      <div class="services-content">
        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        <p><?php echo alvon_excerpt( $posts_content_excerpt ); ?></p>
      </div>
    </div>
  </div>
<?php } elseif ( $service_styles == 2 ) { ?>
  <div class="col-lg-<?php echo esc_attr($grid_column); ?> col-md-6">
    <div class="single-services <?php echo esc_attr( $content_position . ' ' . $service_custom_class ); ?> mb-60">
      <?php if ($service_icon_type == 'image') { ?>
        <div class="s-services-icon mb-45">
          <img src="<?php echo esc_url( $service_icon ); ?>" alt="<?php echo esc_attr( 'Icon Image', 'alvon' ); ?>">
        </div>
      <?php } else if ($service_icon_type == 'icon') { ?>
        <div class="s-services-icon mb-45">
          <i class="<?php echo esc_attr( $service_icon . ' ' . $service_custom_class ); ?>" style="color: <?php echo esc_attr( $service_icon_color ); ?>"></i>
        </div>
      <?php } ?>

      <div class="services-content s-services-content">
        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        <p><?php echo alvon_excerpt( $posts_content_excerpt ); ?></p>
      </div>
    </div>
  </div>
<?php } elseif ( $service_styles == 3 ) { ?>
  <div class="col-lg-<?php echo esc_attr($grid_column); ?> col-md-6">
    <div class="single-services <?php echo esc_attr( $content_position . ' ' . $service_custom_class ); ?> mb-60">
      <?php if ($service_icon_type == 'image') { ?>
        <div class="t-services-icon">
          <img src="<?php echo esc_url( $service_icon ); ?>" alt="<?php echo esc_attr( 'Icon Image', 'alvon' ); ?>">
        </div>
      <?php } else if ($service_icon_type == 'icon') { ?>
        <div class="t-services-icon">
          <i class="<?php echo esc_attr( $service_icon . ' ' . $service_custom_class ); ?>" style="color: <?php echo esc_attr( $service_icon_color ); ?>"></i>
        </div>
      <?php } ?>
        <div class="t-services-content fix">
          <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
          <p><?php echo alvon_excerpt( $posts_content_excerpt ); ?></p>
        </div>
    </div>
  </div>
<?php } else { ?>
  <div class="col-lg-<?php echo esc_attr( $grid_column ); ?> col-md-6" >
    <div class="single-services <?php echo esc_attr( $content_position . ' ' . $service_custom_class ); ?> mb-50">
      <?php if ($service_icon_type == 'image') { ?>
        <div class="services-icon">
          <img src="<?php echo esc_url( $service_icon ); ?>" alt="<?php echo esc_attr( 'Icon Image', 'alvon' ); ?>" data-aos="zoom-in-down">
        </div>
      <?php } else if ($service_icon_type == 'icon') { ?>
        <div class="services-icon">
          <i class="<?php echo esc_attr( $service_icon . ' ' . $service_custom_class ); ?>" style="color: <?php echo esc_attr( $service_icon_color ); ?>"></i>
        </div>
      <?php } ?>
      <div class="services-content">
          <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
          <p><?php echo alvon_excerpt( $posts_content_excerpt ); ?></p>
      </div>
    </div>
  </div>
  <?php } endwhile; wp_reset_postdata(); ?>
</div>
<!-- End Of Service
============================================= -->

<?php
  return ob_get_clean();
}
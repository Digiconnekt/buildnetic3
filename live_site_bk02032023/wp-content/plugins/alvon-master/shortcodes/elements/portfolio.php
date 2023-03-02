<?php 
/*------------------------------------------------------------------------------------------------------------------*/
/*  Alvon Section Head
/*------------------------------------------------------------------------------------------------------------------*/

vc_map(array(
  'base' => 'alvon_portfolio_post_grid',
  'name' => __('Portfolio Posts', 'alvon'),
  'category' => __('Alvon', 'alvon'),
  'icon' => 'fa fa-qrcode',
  'params' => array(

    array(
      "param_name" => "posts_per_page",
      "type" => "textfield",
      "heading" => __("Posts Per Page", "alvon"),
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
      "std" => __("4", "alvon"),
      'value' => array(
        __( 'Select Your Column',  "alvon"  ) => ' ',
        __( 'Column 2',  "alvon"  ) => '6',
        __( 'Column 3',  "alvon"  ) => '4',
        __( 'Column 4',  "alvon"  ) => '3',
      ),
      "description" => __( "Please select your item columns", "alvon" ),
    ),
    array(
      "param_name" => "no_gutters",
      "type" => "checkbox",
      "heading" => __( "No Gutters?", "alvon" ),
      "description" => __( "If you want to remove column gap please check the box", "alvon" )
    ),

  ),
));


/*  Portfolio post grid shortcode
/*-----------------------------------------------------------------------*/

add_shortcode( 'alvon_portfolio_post_grid', 'alvon_portfolio_post_grid_shortcode' );
function alvon_portfolio_post_grid_shortcode($atts, $content = null) {
  extract( shortcode_atts(
    array(
      'posts_per_page'         => '',
      'posts_order'            => 'ASC',
      'grid_column'            => '4',
      'no_gutters'             => '',
      ), $atts )
  );
  ob_start();

  if (empty($no_gutters)) {
    $gutters = '';
  } else {
    $gutters = 'no-gutters';
  }

  if ($gutters == 'no-gutters') {
    $bottom_margin = '';
  } else {
    $bottom_margin = 'mb-30';
  }

?>

<div class="row <?php echo esc_attr( $gutters ); ?>">
  
  <?php
    $the_query = new WP_Query( array(
      'post_type' => 'portfolio',
      'posts_per_page' => $posts_per_page,
      'taxonomy' => 'portfolio_category',
      'order' => $posts_order,
    ) );

    while ( $the_query->have_posts() ) :
      $the_query->the_post(); 

        if(has_post_thumbnail()) {
      ?>

    <div class="col-lg-<?php echo esc_attr( $grid_column ); ?> col-md-6">
      <div class="single-porject <?php echo esc_attr( $bottom_margin ); ?>">
        <div class="project-thumb">
          <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
        </div>
      </div>
    </div>
   
  <?php } endwhile; wp_reset_postdata(); ?>

</div>

<?php
  return ob_get_clean();
}
?>
<?php 
/*------------------------------------------------------------------------------------------------------------------*/
/*  Alvon Section Head
/*------------------------------------------------------------------------------------------------------------------*/

vc_map(array(
  'base' => 'alvon_team_post_grid',
  'name' => __('Team Post Grid', 'alvon'),
  'category' => __('Alvon', 'alvon'),
  'icon' => 'fa fa-users',
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
      "std"       => esc_html__("4", "alvon"),
      'value' => array(
        __( 'Select Your Column',  "alvon"  ) => ' ',
        __( 'Column 2',  "alvon"  ) => '6',
        __( 'Column 3',  "alvon"  ) => '4',
        __( 'Column 4',  "alvon"  ) => '3',
      ),
      "description" => __( "Please select your item columns", "alvon" )
    ),
  ),
));


/*  Service post grid shortcode
/*-----------------------------------------------------------------------*/

add_shortcode( 'alvon_team_post_grid', 'alvon_team_post_grid_shortcode' );
function alvon_team_post_grid_shortcode($atts, $content = null) {
  extract( shortcode_atts(
    array(
      'posts_per_page'        => '',
      'posts_order'           => 'ASC',
      'grid_column'           => '4',
      ), $atts )
  );
  ob_start();

?>

<!-- Service
============================================= -->
<div class="row">
  <?php 
    $the_query = new WP_Query( array(
      'post_type' => 'team',
      'posts_per_page' => $posts_per_page,
      'order' => $posts_order,
    ) );

    while ( $the_query->have_posts() ) : $the_query->the_post();
   
    $team_meta = get_post_meta(get_the_ID(), '_alvon_team', true);

    if (!empty($team_meta['team_designation'])) {
      $team_designation = $team_meta['team_designation'];
    } else {
      $team_designation = '';
    }

  ?>
  <div class="col-lg-<?php echo esc_attr($grid_column); ?> col-md-6" >

    <div class="single-team mb-30">
      <?php if(has_post_thumbnail()) { ?>
        <div class="team-thumb p-relative">
            <?php the_post_thumbnail(); ?>
            <div class="team-btn">
                <a href="<?php the_permalink(); ?>"><i class="far fa-plus"></i></a>
            </div>
        </div>
      <?php } ?>
        <div class="team-content text-center">
            <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
            <span><?php echo esc_html( $team_designation ); ?></span>
        </div>
    </div>

  </div>
  <?php endwhile; wp_reset_query(); ?>
</div>
<!-- End Of Service
============================================= -->

<?php
  return ob_get_clean();
}
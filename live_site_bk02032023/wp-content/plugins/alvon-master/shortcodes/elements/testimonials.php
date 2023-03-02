<?php 
/*------------------------------------------------------------------------------------------------------------------*/
/*  Alvon Testimonial Post
/*------------------------------------------------------------------------------------------------------------------*/

vc_map(array(
  'base' => 'alvon_testimonial_posts',
  'name' => __('Testimonial', 'alvon'),
  'category' => __('Alvon', 'alvon'),
  'icon' => 'fas fa-quote-left',
  'params' => array(

    array(
      "param_name" => "posts_per_page",
      "type" => "textfield",
      "heading" => __("Posts Per Page", "alvon"),
      'std' => esc_html__( '3',  "alvon" ),
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
      'param_name' => 'select_style',
      'type' => 'dropdown',
      'heading' => esc_html__( 'Select Style',  "alvon" ),
      'std' => esc_html__( '1',  "alvon" ),
      'value' => array(
        esc_html__( 'Style 1',  "alvon"  ) => '1',
        esc_html__( 'Style 2',  "alvon"  ) => '2',
      ),
      "description" => esc_html__( "There have more testimonial style", "alvon" )
    ),


    array(
      "param_name" => "slide_count",
      'heading' => esc_html__( "Slide Count",  "alvon" ),
      "type" => "textfield",
      "std" => esc_html__("4", "alvon"),
      "description" => esc_html__( "Display Testimonial in desktop device", "alvon" ),
    ),
    array(
      "param_name" => "desktop_count",
      'heading' => esc_html__( "Desktop Count",  "alvon" ),
      "type" => "textfield",
      "std" => esc_html__("3", "alvon"),
      "description" => esc_html__( "Display Testimonial in desktop device", "alvon" ),
    ),
    array(
      'heading' => esc_html__( "Tablet Count",  "alvon" ),
      "param_name" => "tablet_count",
      "type" => "textfield",
      "std" => esc_html__("2", "alvon"),
      "description" => esc_html__( "Display Testimonial in tablet device", "alvon" ),
    ),
    array(
      'heading' => esc_html__( "Mobile Count",  "alvon" ),
      "param_name" => "mobile_count",
      "type" => "textfield",
      "std" => esc_html__("1", "alvon"),
      "description" => esc_html__( "Display Testimonial in mobile device", "alvon" ),
    ),
    array(
      'param_name' => 'enable_navigation',
      'type' => 'dropdown',
      'heading' => __( 'Navigation?',  "alvon" ),
      "std" => esc_html__("false", "alvon"),
      'value' => array(
        __( 'Yes',  "alvon"  ) => 'true',
        __( 'No',  "alvon"  ) => 'false',
      ),
      "description" => __( "If you want to enable or disable slider navigation, please please select form box", "alvon" ),
    ),

    array(
      'param_name' => 'rating_switch',
      'type' => 'dropdown',
      'heading' => esc_html__( 'Rating Show',  "alvon" ),
      'std' => esc_html__( '1',  "alvon" ),
      'value' => array(
        esc_html__( 'Yes',  "alvon"  ) => '1',
        esc_html__( 'No',  "alvon"  ) => '2',
      ),
      "description" => esc_html__( "There have more testimonial style", "alvon" ),
      "group" => esc_html__( "Styling", 'novable'),
    ),
    array(
      "param_name" => "rating_color",
      'heading' => esc_html__( "Rating Color",  "alvon" ),
      "type" => "colorpicker",
      "description" => esc_html__( "Rating Star Color", "alvon" ),
      "group" => esc_html__( "Styling", 'novable'),
    ),
    array(
      'param_name' => 'testi_thumb_switch',
      'type' => 'dropdown',
      'heading' => esc_html__( 'Thumbnail Show',  "alvon" ),
      'std' => esc_html__( '1',  "alvon" ),
      'value' => array(
        esc_html__( 'Yes',  "alvon"  ) => '1',
        esc_html__( 'No',  "alvon"  ) => '2',
      ),
      "description" => esc_html__( "There have more testimonial style", "alvon" ),
      "group" => esc_html__( "Styling", 'novable'),
    ),
    
  ),
));


/*  Testimonial Element shortcode
/*-----------------------------------------------------------------------*/

add_shortcode( 'alvon_testimonial_posts', 'alvon_testimonial_posts_shortcode' );
function alvon_testimonial_posts_shortcode($atts, $content = null) {
  extract( shortcode_atts(
    array(
      'posts_per_page'        => '3',
      'posts_order'           => '',
      'select_style'          => '1',
      'slide_count'           => '4',
      'desktop_count'         => '3',
      'tablet_count'          => '2',
      'mobile_count'          => '1',
      'enable_navigation'     => 'false',
      'rating_switch'         => '1',
      'rating_color'          => '',
      'testi_thumb_switch'    => '1',
      ), $atts )
  );
  ob_start();

    $e_uniqid     = uniqid();
    $inline_style = '';
    if ( $rating_color ) {
      $inline_style .= '.star-style'. $e_uniqid .' i {';
      $inline_style .= ( $rating_color ) ? 'color:'. $rating_color  .' !important;' : '';
      $inline_style .= '}';
    }
    add_inline_style( $inline_style );
    $styled_class  = 'star-style'. $e_uniqid;
?>

  <script>
    jQuery(document).ready(function(){

      jQuery('.s-testimonial-active').slick({
        centerMode: true,
        centerPadding: '0',
        slidesToShow: <?php echo esc_attr( $slide_count ); ?>,
        arrows: <?php echo esc_attr( $enable_navigation ); ?>,
        prevArrow: '<button type="button" class="slick-prev"><i class="fal fa-arrow-left"></i></button>',
        nextArrow: '<button type="button" class="slick-next"><i class="fal fa-arrow-right"></i></button>',
        dots: false,
        responsive: [
          {
            breakpoint: 1200,
            settings: {
              arrows: false,
              centerMode: true,
              centerPadding: '0px',
              slidesToShow: <?php echo esc_attr( $desktop_count ); ?>
            }
          },
          {
            breakpoint: 992,
            settings: {
              arrows: false,
              centerMode: true,
              centerPadding: '0px',
              slidesToShow: <?php echo esc_attr( $tablet_count ); ?>
            }
          },
          {
            breakpoint: 767,
            settings: {
              arrows: false,
              centerMode: true,
              centerPadding: '0px',
              slidesToShow: <?php echo esc_attr( $mobile_count ); ?>
            }
          },
        ]
      });

    });
  </script>  

<?php if ($select_style == 1 ) { ?>
  <!-- testimonial-area -->
  <div class="container">
    <div class="s-testimonial-active tesimonial1">
      <?php 
        $the_query = new WP_Query( array(
          'post_type' => 'testimonial',
          'posts_per_page' => $posts_per_page,
          'order' => $posts_order,
        ) );

        $i = 0;
        while ( $the_query->have_posts() ) : $the_query->the_post();
        $i++;
        
        $testimonial_meta = get_post_meta(get_the_ID(), '_alvon_testimonial', true);

        if (!empty($testimonial_meta['testimonial_designation'])) {
          $testimonial_designation = $testimonial_meta['testimonial_designation'];
        } else {
          $testimonial_designation = '';
        }
        if (!empty($testimonial_meta['rewiew_setting'])) {
          $rewiew_setting = $testimonial_meta['rewiew_setting'];
        } else {
          $rewiew_setting = '';
        }
      ?>

        <div class="single-testimonial">
          <div class="row justify-content-center">
            <div class="col-xl-10">
              <div class="testimonial-wrap text-center">
                <?php if ($rating_switch == 1) { ?>
                  <div class="testi-rating mb-40 <?php echo esc_attr( $styled_class ); ?>">
                    <?php 
                      for ($i=0; $i <=4 ; $i++) {
                        if ($i < $rewiew_setting) {
                          $reviws = 'fas fa-star';
                        } else {
                          $reviws = 'far fa-star';
                        } ?>
                        <i class="<?php echo esc_attr( $reviws ); ?>" aria-hidden="true"></i>
                    <?php } ?>
                  </div>
                <?php } ?>
                <div class="testimonial-content mb-45">
                  <?php the_content(); ?>
                </div>
                <div class="testimonial-avatar">
                  <?php if ($testi_thumb_switch == 1) { ?>
                    <div class="ta-img mb-25">
                      <?php the_post_thumbnail(); ?>
                    </div>
                  <?php } ?>
                    <div class="ta-info">
                        <h5><?php the_title(); ?></h5>
                        <span><?php echo esc_html( $testimonial_designation ); ?></span>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      
      <?php endwhile; wp_reset_postdata(); ?>

    </div>
  </div>
  <!-- testimonial-area-end -->
<?php } elseif ($select_style == 2 ) { ?>

  <div class="container-fluid testimonial-p tesimonial2">
      <div class="row s-testimonial-active">
        <?php 
          $the_query = new WP_Query( array(
            'post_type' => 'testimonial',
            'posts_per_page' => $posts_per_page,
            'order' => $posts_order,
          ) );

          $i = 0;
          while ( $the_query->have_posts() ) : $the_query->the_post();
          $i++;
          $testimonial_meta = get_post_meta(get_the_ID(), '_alvon_testimonial', true);

          if (!empty($testimonial_meta['testimonial_designation'])) {
            $testimonial_designation = $testimonial_meta['testimonial_designation'];
          } else {
            $testimonial_designation = '';
          }
          if (!empty($testimonial_meta['rewiew_setting'])) {
            $rewiew_setting = $testimonial_meta['rewiew_setting'];
          } else {
            $rewiew_setting = '';
          }
        ?>

        <div class="col-xl-4">
            <div class="s-single-testimonial p-relative">
              <?php if ($rating_switch == 1) { ?>
                <div class="testi-rating mb-30 <?php echo esc_attr( $styled_class ); ?>">
                  <?php 
                    for ($i=0; $i <=4 ; $i++) {
                      if ($i < $rewiew_setting) {
                        $reviws = 'fas fa-star';
                      } else {
                        $reviws = 'far fa-star';
                      } ?>
                      <i class="<?php echo esc_attr( $reviws ); ?>" aria-hidden="true"></i>
                  <?php } ?>
                </div>
              <?php } ?>
                <div class="s-testimonial-content mb-25">
                  <?php the_content(); ?>
                </div>
                <div class="testimonial-avatar st-avatar">
                  <?php 
                    if ($testi_thumb_switch == 1) {
                      if(has_post_thumbnail()) { 
                  ?>
                    <div class="ta-img">
                      <?php the_post_thumbnail(); ?>
                    </div>
                  <?php } } ?>
                  <div class="ta-info">
                    <h5><?php the_title(); ?></h5>
                    <span><?php echo esc_html( $testimonial_designation ); ?></span>
                  </div>
                </div>
            </div>
        </div>

        <?php endwhile; wp_reset_postdata(); ?>
      </div>
  </div>

<?php } else { ?>

  <!-- testimonial-area -->
  <div class="container">
    <div class="s-testimonial-active">
      <?php 
        $the_query = new WP_Query( array(
          'post_type' => 'testimonial',
          'posts_per_page' => $posts_per_page,
          'order' => $posts_order,
        ) );

        $i = 0;
        while ( $the_query->have_posts() ) : $the_query->the_post();
        $i++;
        $testimonial_meta = get_post_meta(get_the_ID(), '_alvon_testimonial', true);

        if (!empty($testimonial_meta['testimonial_designation'])) {
          $testimonial_designation = $testimonial_meta['testimonial_designation'];
        } else {
          $testimonial_designation = '';
        }
        if (!empty($testimonial_meta['rewiew_setting'])) {
          $rewiew_setting = $testimonial_meta['rewiew_setting'];
        } else {
          $rewiew_setting = '';
        }
      ?>

        <div class="single-testimonial">
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <div class="testimonial-wrap text-center">
                      <?php if ($rating_switch == 1) { ?>
                        <div class="testi-rating mb-40 <?php echo esc_attr( $styled_class ); ?>">
                          <?php 
                            for ($i=0; $i <=4 ; $i++) {
                              if ($i < $rewiew_setting) {
                                $reviws = 'fas fa-star';
                              } else {
                                $reviws = 'far fa-star';
                              } ?>
                              <i class="<?php echo esc_attr( $reviws ); ?>" aria-hidden="true"></i>
                          <?php } ?>
                        </div>
                      <?php } ?>
                        <div class="testimonial-content mb-45">
                          <?php the_content(); ?>
                        </div>
                        <div class="testimonial-avatar">
                          <?php if ($testi_thumb_switch == 1) { ?>
                            <div class="ta-img mb-25">
                              <?php the_post_thumbnail(); ?>
                            </div>
                          <?php } ?>
                            <div class="ta-info">
                                <h5><?php the_title(); ?></h5>
                                <span><?php echo esc_html( $testimonial_designation ); ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      
      <?php endwhile; wp_reset_postdata(); ?>

    </div>
  </div>
  <!-- testimonial-area-end -->

<?php } 
  return ob_get_clean();
}

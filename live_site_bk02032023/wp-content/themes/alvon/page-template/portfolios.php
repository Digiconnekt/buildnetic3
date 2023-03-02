<?php
/**
  * Template Name: Portfolios
  *
  * @package alvon
  */

  get_header(); 
?>

<!-- main-area -->
<?php 

do_action('alvon_breadcrum');

if( function_exists( 'alvon_framework_init' ) ) {
  $columns_layout = alvon_get_option('project_page_columns');
  if (!empty($columns_layout)) {
      $cl = $columns_layout;
  } else {
     $cl = '4'; 
  }
  $posts_per_page = alvon_get_option('alvon_project_page_posts_per_page');
  $project_page_layout = alvon_get_option('portfolio_page_layout');

} else {
  $cl = '4';
  $posts_per_page = '6';
  $project_page_layout = '';
}

?>
  

<!-- portfolio-area -->
<div class="portfolio-area pt-120 pb-90">
  <?php if ($project_page_layout !== 'full-width') { ?>
    <div class="container">
  <?php } ?>
    <div class="row">
      <?php 
          if ( is_active_sidebar( 'portfolio-sidebar') ) {
            if( function_exists( 'alvon_framework_init' ) ) {
                $portfolio_page_layout = alvon_get_option('portfolio_page_layout');
                if ( $portfolio_page_layout == 'left-sidebar' ) {
                    $col   = '8';
                    $class = 'order-12';
                } elseif ( $portfolio_page_layout == 'right-sidebar' ) {
                    $col   = '8';
                    $class = '';
                 } elseif ( $portfolio_page_layout == 'full-width' ) {
                    $class = '';
                    $col   = '12';
                } else {
                    $class = '';
                    $col   = '8';
                }
            } else {
                $col   = '8';
                $class = '';
            }
          } else {
            $col   = '12';
            $class = '';
          }
      ?>
    <div class="col-lg-<?php echo esc_attr( $col . ' ' . $class ); ?>">
      <div class="row portfolio-load"> 
        <?php
          $paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1; 
          $the_query = new WP_Query( array(
            'post_type' => 'portfolio',
            'paged' => $paged,
            'posts_per_page' => $posts_per_page,
            'taxonomy' => 'portfolio_category'
          ) );

          while ( $the_query->have_posts() ) :
            $the_query->the_post(); 
        ?> 
        <div class="col-xl-<?php echo esc_attr( $cl ); ?> col-lg-4 col-sm-6">
          <div <?php post_class(); ?>>
            <div class="single-porject mb-30">
                <div class="project-thumb">
                  <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('alvon-370-455'); ?></a>
                </div>
            </div>
          </div>
        </div>       
        <?php endwhile; wp_reset_postdata(); ?> 
      </div>

      <div class="row">
        <div class="col-12">
          <?php echo alvon_portfolio_paging_nav(); ?>
        </div>
      </div>
    </div>
    
     <?php 
          if ( is_active_sidebar( 'portfolio-sidebar') ) {
              if( function_exists( 'alvon_framework_init' ) ) {
                  $portfolio_page_layout = alvon_get_option('portfolio_page_layout');
                  if ( $portfolio_page_layout == 'left-sidebar' ||  $portfolio_page_layout == 'right-sidebar' ) { ?>
                      <div class="col-lg-4"><?php  get_sidebar('portfolio'); ?> </div>
                <?php } elseif ($portfolio_page_layout == 'full-width') {
                      
                  } else { ?>
                    <div class="col-lg-4"><?php get_sidebar('portfolio'); ?> </div>
                <?php  }
              } else { ?>
                <div class="col-lg-4"><?php get_sidebar('portfolio'); ?> </div>
            <?php }
          }
      ?>
    </div>
  <?php if ($project_page_layout !== 'full-width') { ?>
    </div>
  <?php } ?>
</div>
<!-- portfolio-area-end -->


<?php get_footer(); ?>
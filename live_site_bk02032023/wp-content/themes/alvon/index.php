<?php
/**
 * The main template file
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package alvon
 */

    get_header(); 

    do_action('alvon_breadcrum'); 
?>

<!-- Blog Posts
================================================== -->

<div class="inner-area-wrap dark-gray">
    <!-- blog-area -->
    <div class="iner-blog-area pt-120 pb-90">
        <div class="container">
            <div class="row">
                <?php 
                    if ( is_active_sidebar( 'right-sidebar') ) {
                        if( function_exists( 'alvon_framework_init' ) ) {
                            $blog_layout = alvon_get_option('blog_layout');
                            if ( $blog_layout == 'left-sidebar' ) {
                                $col   = '8';
                                $class = 'order-12';
                            } elseif ( $blog_layout == 'right-sidebar' ) {
                                $col   = '8';
                                $class = '';
                             } elseif ( $blog_layout == 'full-width' ) {
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
                    <!-- Letest Blog Btn -->
                    <div class="row">
        				<!-- ========== blog - start ========== -->
        				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        					
        				<?php get_template_part( 'template-parts/content', get_post_format() ); ?>

                        <?php endwhile; ?>

                        <?php echo alvon_paging_nav(); ?>

                        <?php else : ?>

                            <?php get_template_part( 'template-parts/content', 'none' ); ?>
                            
                        <?php endif; wp_reset_query(); ?>
        				<!-- ========== blog - end ========== -->
                    </div>
                </div>
                <?php 
                    if ( is_active_sidebar( 'right-sidebar') ) {
                        if( function_exists( 'alvon_framework_init' ) ) {
                            $blog_layout = alvon_get_option('blog_layout');
                            if ( $blog_layout == 'left-sidebar' ||  $blog_layout == 'right-sidebar' ) {
                                get_sidebar('right');
                            } elseif ($blog_layout == 'full-width') {
                                
                            } else {
                                get_sidebar('right');
                            }
                        } else {
                           get_sidebar('right');
                        }
                    }
                ?>
    		</div><!-- row -->
    	</div><!-- container -->
    </div>
</div>
<!-- blog-section - End
================================================== -->

<?php get_footer(); ?>
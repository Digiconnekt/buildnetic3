<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package alvon
 */
    get_header(); 
    global $post;
    $page_slug = $post->post_name;
?>
<?php do_action('alvon_breadcrum'); ?>

<!-- blog-grid -->
<div class="inner-area-wrap dark-gray <?php echo esc_attr( $page_slug.'-page' ); ?>">
    <!-- blog-area -->
    <section class="iner-blog-area pt-120 pb-90">
        <div class="container">
            <div class="row">
                <?php 
                    if ( is_active_sidebar( 'right-sidebar') ) {
                        if( function_exists( 'alvon_framework_init' ) ) {
                            $blog_single_layout = alvon_get_option('blog_single_layout');
                            if ( $blog_single_layout == 'left-sidebar' ) {
                                $col   = '8';
                                $class = 'order-12';
                            } elseif ( $blog_single_layout == 'right-sidebar' ) {
                                $col   = '8';
                                $class = '';
                             } elseif ( $blog_single_layout == 'full-width' ) {
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
                <div class="col-lg-<?php echo esc_attr( $col . ' blog-post-content ' . $class ); ?>">
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                    <?php get_template_part( 'template-parts/content', 'page' ); ?>
                            
                    <?php endwhile; ?>

                    <?php else : ?>

                        <?php get_template_part( 'template-parts/content', 'none' ); ?>

                    <?php endif; ?>
                </div>
                <?php 
                    if ( is_active_sidebar( 'right-sidebar') ) {
                        if( function_exists( 'alvon_framework_init' ) ) {
                            $blog_single_layout = alvon_get_option('blog_single_layout');
                            if ( $blog_single_layout == 'left-sidebar' ||  $blog_single_layout == 'right-sidebar' ) {
                                get_sidebar();
                            } elseif ($blog_single_layout == 'full-width') {
                                
                            } else {
                                get_sidebar();
                            }
                        } else {
                           get_sidebar();
                        }
                    }
                ?>
            </div>
        </div>
    </section>
</div>
<!-- blog-grid-end -->


<?php get_footer(); ?>
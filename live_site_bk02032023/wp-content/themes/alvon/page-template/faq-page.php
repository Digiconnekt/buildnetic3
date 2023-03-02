<?php
/**
 * The template for displaying home page content.
 * Template Name: Faq page
 * @package alvon
 */
get_header(); 

do_action('alvon_breadcrum');

?>
<section class="faq-area pt-120 pb-60">
    <div class="container">
        <div class="row">
        	<?php 
                if ( is_active_sidebar( 'faq-sidebar') ) {
                    if( function_exists( 'alvon_framework_init' ) ) {
                        $faq_page_layout = alvon_get_option('faq_page_layout');
                        if ( $faq_page_layout == 'left-sidebar' ) {
                            $col   = '8';
                            $class = 'order-12';
                        } elseif ( $faq_page_layout == 'right-sidebar' ) {
                            $col   = '8';
                            $class = '';
                         } elseif ( $faq_page_layout == 'full-width' ) {
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
                <?php while(have_posts()) : the_post(); ?> 
					<?php the_content(); ?>
				<?php endwhile; ?>
            </div>
            <?php 
	        	if ( is_active_sidebar( 'faq-sidebar') ) {
	            	if( function_exists( 'alvon_framework_init' ) ) {
	                  $faq_page_layout = alvon_get_option('faq_page_layout');
	                  if ( $faq_page_layout == 'left-sidebar' ||  $faq_page_layout == 'right-sidebar' ) { ?>
	                    <?php  get_sidebar('faq'); ?>
	                <?php } elseif ($faq_page_layout == 'full-width') {
	                      
	                } else { ?>
	                    <?php get_sidebar('faq'); ?>
	                <?php }
	              	} else { ?>
	                	<?php get_sidebar('faq'); ?>
	            	<?php }
	        	}
	      	?>
        </div>
    </div>
</section>
<!-- faq-area-end -->

<?php get_footer(); ?>
<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package alvon
 */

if ( ! is_active_sidebar( 'right-sidebar' ) ) {
	return;
} 
if( function_exists( 'alvon_framework_init' ) ) {

    if ( is_home() || is_front_page() ) {
        $blog_layout = alvon_get_option('blog_layout');
    } elseif ( is_single() ) {
        $blog_layout = alvon_get_option('blog_single_layout');
    } else {
       $blog_layout = alvon_get_option('blog_layout'); 
    }

    if ( $blog_layout == 'left-sidebar' ) {
        $sidebar_class = 'sidebar-left';
    } elseif ( $blog_layout == 'right-sidebar' ) {
        $sidebar_class = 'sidebar-right';
     } elseif ( $blog_layout == 'full-width' ) {
        $sidebar_class = 'sidebar-default';
    } else {
        $sidebar_class = 'sidebar-default';
    }
} else {
    $sidebar_class = 'sidebar-default';
}
?>

<!-- End Blog Sidebar -->
<div class="col-lg-4">
    <aside class="sidebar-blog <?php echo esc_attr( $sidebar_class ); ?>">
        <?php dynamic_sidebar( 'right-sidebar' ); ?>
    </aside>
</div>
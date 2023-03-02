<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package alvon
 */

if ( ! is_active_sidebar( 'faq-sidebar' ) ) {
	return;
} 
if( function_exists( 'alvon_framework_init' ) ) {
    $blog_layout = alvon_get_option('faq_page_layout');
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
<div class="col-lg-4 faq-pl">
    <div class="sidebar-blog <?php echo esc_attr( $sidebar_class ); ?> faq-sidebar">
        <?php dynamic_sidebar( 'faq-sidebar' ); ?>
    </div>
</div>
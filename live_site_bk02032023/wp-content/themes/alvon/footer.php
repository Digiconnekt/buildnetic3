<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Alvon
 */
?>

</main>

<!-- footer-section - start
================================================== -->
<?php do_action( 'alvon_footer_style' ); ?> 
<!-- footer-section - end
================================================== -->  

<?php 
    if( function_exists( 'alvon_framework_init' ) ) {
        $scrollup = alvon_get_option('alvon_scroll_top');
        if (!empty($scrollup)) {
            do_action( 'alvon_scrollup' );
        } 
    } 
?>

<?php wp_footer();?>

</body>
</html>
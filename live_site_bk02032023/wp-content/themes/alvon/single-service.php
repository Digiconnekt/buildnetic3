<?php
/**
 * The template for displaying all single posts.
 *
 * @package alvon
 */

get_header();

if ( has_header_image() ) {
    $bg_img = get_header_image();
    $shape_img = '';
} elseif(function_exists( 'alvon_framework_init' ) ) {

    $bg_img_id = alvon_get_option('breatcrumb_bg_img');
    $attachment = wp_get_attachment_image_src( $bg_img_id, 'full' );
    $bg_img    = ($attachment) ? $attachment[0] : $bg_img_id;

    $shape_img_id = alvon_get_option('breatcrumb_bg_shape_img');
    $shape_attachment = wp_get_attachment_image_src( $shape_img_id, 'full' );
    $shape_img    = ($shape_attachment) ? $shape_attachment[0] : $shape_img_id;

} else {
    $bg_img = '';
    $shape_img = '';
}

if (!empty($bg_img)) {
    $image_overlay = 'image-overlay';
    $breadcrumb_bg = '';
} else {
    $image_overlay = '';
    $breadcrumb_bg = 'breadcrumb-img-none';
}

if( function_exists( 'alvon_framework_init' ) ) {
    $alvon_service_single_breadcrumb_title = alvon_get_option('alvon_service_single_breadcrumb_title');
    $alvon_breadcrumb_switch = alvon_get_option('alvon_breadcrumb_switch');
} else {
    $alvon_service_single_breadcrumb_title = 'Service Details';
    $alvon_breadcrumb_switch = '';
}

if( function_exists( 'alvon_framework_init' ) ) {

    if ($alvon_breadcrumb_switch == true) {
        $breadcrumb_height = 'breadcrumb_height';
    } else {
        $breadcrumb_height = 'breadcrumb_menu_height';
    }

} else {
    $breadcrumb_height = '';
}

?>

<!-- breadcrumb-area -->
<section class="breadcrumb-area breadcrumb-bg d-flex align-items-center <?php echo esc_attr( $image_overlay . ' ' . $breadcrumb_bg . ' ' . $breadcrumb_height ); ?>" style="background-image: url(<?php echo esc_url($bg_img); ?>);">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-wrap text-center">
                    <h2><?php echo esc_html( $alvon_service_single_breadcrumb_title ); ?></h2>
                    <nav aria-label="breadcrumb">
                        <?php alvon_meta_breadcrumbs(); ?>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb-area-end -->

<!-- services-details-area -->
<div class="services-details pt-120">
    <div class="container">
       <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
            the_content();
            endwhile; 
            else :
            get_template_part( 'template-parts/content', 'none' );
            endif; 
        ?>
    </div>
</div>
<!-- services-details-area-end -->

<?php get_footer(); ?>
<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package alvon
 */

get_header(); 

do_action('alvon_breadcrum'); ?>


<!-- blog-details-section - start
================================================== -->
<?php if( function_exists( 'alvon_framework_init' ) ) { ?>

<!-- error-section - start
================================================== -->
<?php 
    $img_id             = alvon_get_option('alvon_404_img');
    $attachment1        = wp_get_attachment_image_src( $img_id, 'full' );
    $alvon_404_img      = ($attachment1) ? $attachment1[0] : $img_id;
?>

<!-- error-area -->
<section class="error-area pt-120 pb-90">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 text-center offset-xl-2">
                <div class="error-img mb-10">
                    <img src="<?php echo esc_url($alvon_404_img); ?>" alt="<?php esc_attr_e( '404 error image', 'alvon' ); ?>">
                </div>
                <div class="error-content">
                    <h1 class="alvon404"><?php echo esc_html( alvon_get_option( 'no_title' ) ); ?></h1>
                    <h2><?php echo esc_html( alvon_get_option( '404_title' ) ); ?></h2>
                    <p><?php echo esc_html( alvon_get_option( '404_desc' ) ); ?></p>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn"><?php echo esc_html( alvon_get_option( 'alvon_404_btn_txt' ) ); ?></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- error-area-end -->

<?php } else { 
  $alvon_404_img = ALVON_IMG . '404.png';
?>

<!-- error-area -->
<section class="error-area pt-120 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 text-center offset-xl-2">
                <div class="error-img mb-10">
                    <img src="<?php echo esc_url($alvon_404_img); ?>" alt="<?php esc_attr_e( '404 error image', 'alvon' ); ?>">
                </div>
                <div class="error-content">
                    <h1 class="alvon404"><?php esc_html_e( '404', 'alvon' ); ?></h1>
                    <h2><?php esc_html_e( 'Sorry, Page Not Found', 'alvon' ); ?></h2>
                    <p><?php esc_html_e( 'The page you are looking for was removed or might never existed.', 'alvon' ); ?></p>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn"><?php esc_html_e( 'Back Home', 'alvon' ); ?></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- error-area-end -->

<?php } 

get_footer(); ?>
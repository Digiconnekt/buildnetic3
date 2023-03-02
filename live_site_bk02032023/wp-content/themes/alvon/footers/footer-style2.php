  <?php 
   if( function_exists( 'alvon_framework_init' ) ) {
        $copyright_footer_switch = alvon_get_option('copyright_footer_switch');
        $footer2_cta_switch = alvon_get_option('footer2_cta_switch');
        $footer2_cta_img = alvon_get_option('footer2_cta_img');
        $footer2_cta_sub_title = alvon_get_option('footer2_cta_sub_title');
        $footer2_cta_title = alvon_get_option('footer2_cta_title');
        $footer2_cta_btn_text = alvon_get_option('footer2_cta_btn_text');
        $footer2_cta_btn_link = alvon_get_option('footer2_cta_btn_link');
        
        $cta_attachment = wp_get_attachment_image_src( $footer2_cta_img, 'full' );
        $cta_img    = ($cta_attachment) ? $cta_attachment[0] : $footer2_cta_img;
    } else {
        $footer2_cta_switch = '';
        $footer2_cta_img = '';
        $footer2_cta_sub_title = '';
        $footer2_cta_title = '';
        $footer2_cta_btn_text = '';
        $footer2_cta_btn_link = '';
        $copyright_footer_switch = '1';
    }
    if ( is_active_sidebar( 'footer-widgets2' )) {
        $footer_widget_activated = 'footer-widget-activated';
    } else {
        $footer_widget_activated = 'footer-widget-not-activated';
    }

    if (!empty($footer2_cta_switch)) {
        $footer_cta = 'footer-cta';
    } else {
        $footer_cta = '';
    }

    if (!empty($footer2_cta_switch)) {
?>


<!-- cta-area -->
<section class="cta-area">
    <div class="container-p p-relative">
        <div class="cta-circle" data-aos="zoom-in"></div>
        <div class="cta-bg" data-background="<?php echo esc_url( $cta_img ); ?>">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <div class="cta-content">
                        <span><?php echo esc_html( $footer2_cta_sub_title ); ?></span>
                        <h2><?php echo esc_html( $footer2_cta_title ); ?></h2>
                    </div>
                </div>
                <?php if (!empty($footer2_cta_btn_link)) { ?>
                <div class="col-lg-4">
                    <div class="cta-btn text-right">
                        <a href="<?php echo esc_url( $footer2_cta_btn_link ); ?>" class="btn"><i class="fal fa-envelope"></i> <?php echo esc_html( $footer2_cta_btn_text ); ?> </a>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>
<!-- cta-area-end -->
<?php } ?>
<!-- footer -->
<footer class="footer-bg theme-bg p-relative footer2 <?php echo esc_attr( $footer_widget_activated . ' ' . $footer_cta ); ?>">
    <?php if ( is_active_sidebar( 'footer-widgets2' )) { ?>
    <div class="container">
        <div class="row justify-content-between footer-widgets-area">
            <?php dynamic_sidebar( 'footer-widgets2' ); ?>
        </div>
    </div>
    <?php } if (!empty($copyright_footer_switch)) { ?>
    <div class="container">
        <p class="copyright text-center">
            <?php if ( function_exists( 'alvon_framework_init' )) { ?>
                <?php echo wp_kses_stripslashes( alvon_get_option('copyright_text') ); ?>
            <?php } else { ?>
                <?php esc_html_e( '&copy; Copyright 2021 by - Alvon', 'alvon' ); ?>
            <?php } ?>
        </p>
    </div>
    <?php } ?>
</footer>
<!-- footer-end -->
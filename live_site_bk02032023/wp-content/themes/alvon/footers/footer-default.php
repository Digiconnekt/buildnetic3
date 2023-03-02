  <?php 
   if( function_exists( 'alvon_framework_init' ) ) {
        $copyright_footer_switch = alvon_get_option('copyright_footer_switch');
        $bg_img_id = alvon_get_option('footer_bg');
        $attachment = wp_get_attachment_image_src( $bg_img_id, 'full' );
        $bg_img    = ($attachment) ? $attachment[0] : $bg_img_id;
        if (!empty($bg_img)) {
            $bg_img = $bg_img;
            $footer_bg_img = 'footer-padding footer-bg-img';
        } else {
            $bg_img = '';
            $footer_bg_img = 'footer-bg-img-none';
        }

        $footer1_anim_img_id = alvon_get_option('footer1_anim_img');
        $anim_attachment = wp_get_attachment_image_src( $footer1_anim_img_id, 'full' );
        $anim_img    = ($anim_attachment) ? $anim_attachment[0] : $footer1_anim_img_id;
    } else {
        $bg_img = '';
        $anim_img = '';
        $footer_bg_img = 'footer-bg-img-none';
        $copyright_footer_switch = '1';
    }

    if ( is_active_sidebar( 'footer-widgets1' )) {
        $footer_widget_activated = 'footer-widget-activated';
    } else {
        $footer_widget_activated = 'footer-widget-not-activated';
    }

?>

<!-- footer -->
<footer class="footer-bg fix p-relative footer1 <?php echo esc_attr( $footer_bg_img . ' ' . $footer_widget_activated ); ?>" data-background="<?php echo esc_url( $bg_img ); ?>">

    <?php if ( is_active_sidebar( 'footer-widgets1' )) { ?>
        <div class="footer-shape" data-aos="fade-up-left" data-aos-easing="linear" data-aos-duration="1000"><img src="<?php echo esc_url( $anim_img ); ?>" alt="<?php esc_attr_e( 'shape','alvon'); ?> "></div>
        <div class="container">
            <div class="row justify-content-between footer-widgets-area ">
                <?php dynamic_sidebar( 'footer-widgets1' ); ?>
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
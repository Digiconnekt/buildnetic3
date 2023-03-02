<?php 
   if( function_exists( 'alvon_framework_init' ) ) {
        $copyright_footer_switch = alvon_get_option('copyright_footer_switch');
        $footer3_desc = alvon_get_option('footer3_desc');
        $footer3_social_buttons = alvon_get_option('footer3_social_buttons');

        $bd_img_id  = alvon_get_option('footer_bg3');
        $attachment = wp_get_attachment_image_src( $bd_img_id, 'full' );
        $bg_img     = ($attachment) ? $attachment[0] : $bd_img_id;

        $footer3_logo    = alvon_get_option('footer3_logo');
        $logo_attachment = wp_get_attachment_image_src( $footer3_logo, 'full' );
        $logo_img        = ($logo_attachment) ? $logo_attachment[0] : $footer3_logo;
    } else {
        $bg_img = '';
        $logo_img = '';
        $footer3_desc = '';
        $footer3_social_buttons = '';
        $copyright_footer_switch = '1';
    }
?>

<!-- footer -->
<footer class="footer-bg pt-120 pb-115 footer3" data-background="<?php echo esc_url( $bg_img ); ?>">
    <?php if ( function_exists( 'alvon_framework_init' )) { ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-10">
                <div class="t-footer text-center">
                    <?php if ( !empty( $logo_img )) { ?>
                    <div class="logo mb-35">
                        <a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo esc_url( $footer3_logo ); ?>" alt="<?php esc_attr_e( 'Logo', 'alvon' ); ?>"></a>
                    </div>
                    <?php } ?>
                    <div class="t-footer-text">
                        <p><?php echo esc_html( $footer3_desc ); ?></p>
                    </div>
                    <?php if (is_array($footer3_social_buttons)) { ?>
                    <div class="t-footer-social mt-35">
                    <?php foreach ($footer3_social_buttons as $key => $value) { ?>
                        <a href="<?php echo esc_url( $value['profile_link'] ); ?>"><i class="<?php echo esc_attr( $value['social_icon'] ); ?>"></i></a>
                    <?php } ?>
                    </div>
                    <?php } ?>
                </div>
            </div>
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
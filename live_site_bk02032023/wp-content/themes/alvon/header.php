<?php
/**
 * The header for our theme.
 *
 * @package alvon
 */
?>
<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <meta charset="<?php bloginfo('charset');?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <?php if ( ! ( function_exists( 'has_site_icon' ) && has_site_icon() ) ) {
    if( function_exists( 'alvon_framework_init' ) ) { 
        $site_icon = alvon_get_option('alvon_site_icon');
        $attachment = wp_get_attachment_image_src( $site_icon, 'full' );
        $site_fav_icon    = ($attachment) ? $attachment[0] : $site_icon;
    ?>
    <link rel="shortcut icon" type="image/png" href="<?php echo esc_url( $site_fav_icon );?>">
    <?php } else { ?>
    <link rel="shortcut icon" type="image/png" href="<?php echo esc_url( ALVON_IMG . 'favicon.ico' ); ?>">
    <?php } 
    } wp_head();
    ?>
</head>

<body <?php body_class();?>>

    <?php 
        if( function_exists( 'alvon_framework_init' ) ) {
            $preloader = alvon_get_option('alvon_preloader_enable');
            if (!empty($preloader)) {
                do_action( 'alvon_preloading' );
            } 
        } 
    ?>

    <!-- Start of Header 
    ============================================= -->
    <?php do_action( 'alvon_header_style' ); ?> 
    <!-- End of  Header 
    ============================================= -->
    <main>
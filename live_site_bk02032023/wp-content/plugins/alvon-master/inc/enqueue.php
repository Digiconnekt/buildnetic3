<?php
/*------------------------------------------------------------------------------------------------------------------*/
/*  Conditional Register Script
/*------------------------------------------------------------------------------------------------------------------*/

function alvon_master_frontend_scripts() {
    wp_enqueue_style('font-awesome', ALVON_PLG_URL . 'framework/assets/css/font-awesome.min.css', array(), '' );
    wp_enqueue_style('odometer-theme-car', ALVON_PLG_URL . 'assets/css/odometer-theme-car.css' , array(), '' );
    wp_enqueue_style('alvon-wpb-style', ALVON_PLG_URL . 'assets/css/alvon-wpb-style.css' , array(), '' );
    wp_enqueue_style('alvon-master', ALVON_PLG_URL . 'assets/css/alvon-master.css' , array(), '' );
    if(function_exists( 'alvon_framework_init' ) ) {
        wp_enqueue_script('viewport', ALVON_PLG_URL . 'assets/js/viewport-min.js', array('jquery'), '', true);
        wp_enqueue_script('odometer', ALVON_PLG_URL . 'assets/js/odometer.min.js', array('jquery'), '', true);
        wp_enqueue_script('easypiechart-min', ALVON_PLG_URL . 'assets/js/jquery.easypiechart.min.js', array('jquery'), '', true);
        wp_enqueue_script('alvon-master', ALVON_PLG_URL . 'assets/js/alvon-master.js', array('jquery'), '', true);
    }
}
add_action('wp_enqueue_scripts', 'alvon_master_frontend_scripts');


/* Visual composer addons style
=====================================================*/
add_action( 'admin_enqueue_scripts', 'alvon_master_backend_scripts' );
function alvon_master_backend_scripts() {
    wp_enqueue_style('alvon-admin-style', ALVON_PLG_URL . 'assets/admin/alvon-admin-style.css' , array(), '' );
    wp_enqueue_style('alvon-wpb-style', ALVON_PLG_URL . 'assets/css/alvon-wpb-style.css' , array(), '' );
    wp_enqueue_style('font-awesome', get_stylesheet_directory_uri() . '/assets/css/fontawesome-all.min.css');
}
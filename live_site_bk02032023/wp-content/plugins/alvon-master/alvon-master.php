<?php 
/*
Plugin Name: Alvon Master
Plugin URI: http://pluginspoint.com/alvon/
Author: Johanspond
Description: After install the Alvon Theme, you must need to install "Alvon Master" plugin first to get all features.
Author URI: http://pluginspoint.com/
Version: 1.0.6
Text Domain: Alvon
Domain Path: /languages
*/

if ( ! defined( 'ABSPATH' ) ) exit;


//define
define( 'ALVON_PLG_URL', plugin_dir_url( __FILE__ ) );
define( 'ALVON_PLG_DIR', dirname( __FILE__ ) );
define( 'ALVON_PLG_DEMO_PATH', dirname( __FILE__ ) . '/demo-importer/' );
define( 'ALVON_PLG_DEMO_URL', plugin_dir_url( __FILE__ ) . 'demo-importer/' );


/*------------------------------------------------------------------------------------------------------------------*/
/*  Plugin required file include.
/*------------------------------------------------------------------------------------------------------------------*/

require_once ALVON_PLG_DIR . '/inc/helper.php';
require_once ALVON_PLG_DIR . '/inc/enqueue.php';
require_once ALVON_PLG_DIR . '/inc/custom-style.php';
require_once ALVON_PLG_DIR . '/inc/custom-widgets.php';
require_once ALVON_PLG_DIR . '/inc/custom-posttype.php';



/*------------------------------------------------------------------------------------------------------------------*/
/*  Theme option framework.
/*------------------------------------------------------------------------------------------------------------------*/
require_once ALVON_PLG_DIR . '/framework/alvon-framework.php';

/**  WPBakery Shortcode.
--------------------------------------------------------------------------------------------------- */
require_once ALVON_PLG_DIR . '/shortcodes/xtl-shortcode-action.php';


/*------------------------------------------------------------------------------------------------------------------*/
/*  Alvon Socials Share Buttons
/*------------------------------------------------------------------------------------------------------------------*/ 
add_action('alvon_social_share_media', 'alvon_social_share_media_btns');
function alvon_social_share_media_btns() {
?>
<!-- Socials Share Button
============================================= -->
<div class="post-share">
    <h5><?php esc_html_e( 'Social Share', 'alvon' ) ?></h5>
    <ul>
        <li><a href="http://twitter.com/home?status=Reading: <?php the_permalink(); ?>" title="Share this post on Twitter!" target="_blank"><i class="fab fa-twitter"></i></a></li>
        <li><a data-pin-do="buttonPin" href="https://www.pinterest.com/pin/create/button/?url=<?php the_permalink();?>" data-pin-custom="true" target="_blank"><i class="fab fa-pinterest-p"></i></a></li>
        <li><a href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&amp;t=<?php the_title(); ?>" title="Share this post on Facebook!" onclick="window.open(this.href); return false;"><i class="fab fa-facebook-f"></i></a></li>
        <li><a href="javascript:void(0)" onclick="window.open( 'https://www.linkedin.com/share?url=<?php the_permalink(); ?>', 'sharer', 'toolbar=0, status=0, width=626, height=436');return false;" title="Linkdin"><span class="character"><i class="fab fa-linkedin-in"></i></span></a></li>
    </ul>
</div>

<?php }



/*------------------------------------------------------------------------------------------------------------------*/
/*  Portfolio Socials Share Buttons
/*------------------------------------------------------------------------------------------------------------------*/ 
add_action('alvon_portfolio_social_share_media', 'alvon_portfolio_social_share_media_btns');
function alvon_portfolio_social_share_media_btns() {
?>
<!-- Socials Share Button
============================================= -->
<a href="http://twitter.com/home?status=Reading: <?php the_permalink(); ?>" title="Share this post on Twitter!" target="_blank"><i class="fab fa-twitter"></i></a>
<a data-pin-do="buttonPin" href="https://www.pinterest.com/pin/create/button/?url=<?php the_permalink();?>" data-pin-custom="true" target="_blank"><i class="fab fa-pinterest-p"></i></a>
<a href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&amp;t=<?php the_title(); ?>" title="Share this post on Facebook!" onclick="window.open(this.href); return false;"><i class="fab fa-facebook-f"></i></a>
<a href="javascript:void(0)" onclick="window.open( 'https://www.linkedin.com/share?url=<?php the_permalink(); ?>', 'sharer', 'toolbar=0, status=0, width=626, height=436');return false;" title="Linkdin"><i class="fab fa-linkedin-in"></i></a>

<?php }


/*------------------------------------------------------------------------------------------------------------------*/
/*  W3C validator passing code
/*------------------------------------------------------------------------------------------------------------------*/
add_action( 'template_redirect', function(){
    ob_start( function( $buffer ){
        $buffer = str_replace( array( '<script type="text/javascript">', "<script type='text/javascript'>" ), '<script>', $buffer );
        return $buffer;
    });
});
add_action( 'template_redirect', function(){
    ob_start( function( $buffer2 ){
        $buffer2 = str_replace( array( "<script type='text/javascript' src" ), '<script src', $buffer2 );
        return $buffer2;
    });
});
add_action( 'template_redirect', function(){
    ob_start( function( $buffer3 ){
        $buffer3 = str_replace( array( 'type="text/css"', "type='text/css'", 'type="text/css"', ), '', $buffer3 );
        return $buffer3;
    });
});


/*------------------------------------------------------------------------------------------------------------------*/
/* Remove VC animate css file
/*------------------------------------------------------------------------------------------------------------------*/ 
add_action( 'wp_enqueue_scripts', 'remove_default_stylesheet', 20 );
function remove_default_stylesheet() {
    wp_deregister_style( 'animate-css' );
}


/*------------------------------------------------------------------------------------------------------------------*/
/* Manage admin post column
/*------------------------------------------------------------------------------------------------------------------*/ 


// Service Post Manage Options
add_filter('manage_service_posts_columns', 'custom_service_columns', 90);  
add_action('manage_service_posts_custom_column', 'custom_service_columns_thumb', 90, 3);  

function custom_service_columns($columns) {         
    $columns = array(
        'cb'        => '<input type="checkbox" />',
        'title'     => 'Title',
        'thumbnail' => __('Thumbnails'),
        'categories'=> 'Categories', // not showing
        'date'      => __( 'Date' )
    );
    return $columns;
}  

function custom_service_columns_thumb($column_name, $id){ 
    global $post;
    $width = (int) 80;
    $height = (int) 80;

    if($column_name === 'thumbnail') {
        if ( has_post_thumbnail($id)) {
            $thumbnail_id = get_post_meta( $id, '_thumbnail_id', true );
            $thumb = wp_get_attachment_image( $thumbnail_id, array($width, $height), true );
            echo $thumb;
        }
    }
}


// Team Post Manage Options
add_filter('manage_team_posts_columns', 'custom_team_columns', 90);  
add_action('manage_team_posts_custom_column', 'custom_team_columns_thumb', 90, 3);  

function custom_team_columns($columns) {         
    $columns = array(
        'cb'            => '<input type="checkbox" />',
        'title'         => 'Title',
        'thumbnail'     => __('Thumbnails'),
        'date'          => __( 'Date' )
    );
    return $columns;
}  

function custom_team_columns_thumb($column_name, $id){  
    global $post;
    $width = (int) 80;
    $height = (int) 80;

    if($column_name === 'thumbnail') {
        if ( has_post_thumbnail($id)) {
            $thumbnail_id = get_post_meta( $id, '_thumbnail_id', true );
            $thumb = wp_get_attachment_image( $thumbnail_id, array($width, $height), true );
            echo $thumb;
        }
    } 
}


// Testimonial Post Manage Options
add_filter('manage_testimonial_posts_columns', 'custom_testimonial_columns', 90);  
add_action('manage_testimonial_posts_custom_column', 'custom_testimonial_columns_thumb', 90, 3);  

function custom_testimonial_columns($columns) {         
    $columns = array(
        'cb'            => '<input type="checkbox" />',
        'title'         => 'Title',
        'thumbnail'     => __('Thumbnails'),
        'date'          => __( 'Date' )
    );
    return $columns;
}

function custom_testimonial_columns_thumb($column_testimonials, $id){  
    global $post;
    $width = (int) 80;
    $height = (int) 80;

    if($column_testimonials === 'thumbnail') {
        if ( has_post_thumbnail($id)) {
            $thumbnail_id = get_post_meta( $id, '_thumbnail_id', true );
            $thumb = wp_get_attachment_image( $thumbnail_id, array($width, $height), true );
            echo $thumb;
        }
    } 
}



/*------------------------------------------------------------------------------------------------------------------*/
/*  Inline Style code
/*------------------------------------------------------------------------------------------------------------------*/
global $all_inline_styles;
$all_inline_styles = array();
if( ! function_exists( 'add_inline_style' ) ) {
  function add_inline_style( $style ) {
    global $all_inline_styles;
    array_push( $all_inline_styles, $style );
  }
}

/* Enqueue Inline Styles */
if ( ! function_exists( 'alvon_enqueue_inline_styles' ) ) {
  function alvon_enqueue_inline_styles() {

    global $all_inline_styles;

    if ( ! empty( $all_inline_styles ) ) {
      echo '<style id="alvon-inline-style">'. join( '', $all_inline_styles ) .'</style>';
    }

  }
  add_action( 'wp_footer', 'alvon_enqueue_inline_styles' );
}


/*------------------------------------------------------------------------------------------------------------------*/
/* Dustrial Demo Import
/*------------------------------------------------------------------------------------------------------------------*/ 

require_once ALVON_PLG_DIR . '/demo-importer/demo-import.php';
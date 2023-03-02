<?php
/*------------------------------------------------------------------------------------------------------------------*/
/*  Scroll to top
/*------------------------------------------------------------------------------------------------------------------*/ 
function alvon_scroll_to_top() {  ?>
<!-- scroll-to-top -->
<div id="scroller">
    <i class="fa fa-level-up" aria-hidden="true"></i>
</div>
<?php 
}
add_action('alvon_scrollup', 'alvon_scroll_to_top');



/*------------------------------------------------------------------------------------------------------------------*/
/*  Custom shortode
/*------------------------------------------------------------------------------------------------------------------*/
function reg_slideer_btn_shortcode1($atts, $content=null) {
    extract(shortcode_atts( array(
        'style' => '1',
        'url'   => '#', 
        'url2'  => '#', 
        'text'  => 'Get Started',
        'text2' => 'Read More',
    ), $atts));

    $html='';

    
    if($style == 1){
        $html.='<div class="slider-btn mt-20">';
            $html.='<a href="'.esc_url($url).'" class="btn" data-animation="fadeInUp" data-delay=".4s">'.esc_html($text).'<i class="far fa-arrow-right"></i></a>';
            $html.='<a href="'.esc_url($url2).'" class="btn transparent-btn popup-video" data-animation="fadeInUp" data-delay=".6s">'.esc_html($text2).'<i class="far fa-play"></i></a>';
        $html.='</div>';
    } else {
        $html.='<div class="t-slider-btn" data-animation="fadeInUp" data-delay=".6s">';
            $html.='<a href="'.esc_url($url).'" class="btn">'.esc_html($text).'<i class="far fa-arrow-right"></i></a>';
            $html.='<a href="'.esc_url($url2).'" class="btn black-btn">'.esc_html($text2).'<i class="far fa-play"></i></a>';
        $html.='</div>';
    }

    return $html;

}
add_shortcode('sliderbtn1', 'reg_slideer_btn_shortcode1');


/*------------------------------------------------------------------------------------------------------------------*/
/*  Shortcode for language
/*------------------------------------------------------------------------------------------------------------------*/
function multi_lingual_shortcodecode($atts, $content=null) {
    extract(shortcode_atts( array(
        'lan' => '',
    ), $atts));

    $html='';

    $html.='<select name="name" class="selected">
        <option value="eng">'.esc_html__( 'Eng', 'alvon' ).'</option>
        <option value="spn">'.esc_html__( 'Spn', 'alvon' ).'</option>
        <option value="ger">'.esc_html__( 'Gar', 'alvon' ).'</option>
        <option value="aui">'.esc_html__( 'Aui', 'alvon' ).'</option>
    </select>';

    return $html;

}
add_shortcode('alvonlng', 'multi_lingual_shortcodecode');
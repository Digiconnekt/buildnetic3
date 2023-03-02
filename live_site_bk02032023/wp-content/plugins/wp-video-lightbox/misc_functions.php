<?php
add_shortcode('video_lightbox_vimeo5', 'wp_vid_lightbox_vimeo5_handler');
add_shortcode('video_lightbox_youtube', 'wp_vid_lightbox_youtube_handler');
add_shortcode('video_lightbox_fb_vimeo', 'wp_vid_lightbox_fb_vimeo_handler');
add_shortcode('video_lightbox_fb_youtube', 'wp_vid_lightbox_fb_youtube_handler');

function wp_vid_lightbox_vimeo5_handler($atts)
{
    $atts = shortcode_atts(array(
            'video_id' => '',
            'p_hash' => '',
            'width' => '',
            'height' => '',
            'description' => '',
            'anchor' => '',
            'alt' => '',
            'auto_thumb' => '',
    ), $atts);
    $atts = array_map('sanitize_text_field', $atts);
    extract($atts);
    if(empty($video_id) || empty($width) || empty($height)){
            return '<p>'.__('Error! You must specify a value for the Video ID, Width, Height and Anchor parameters to use this shortcode!', 'wp-video-lightbox').'</p>';
    }
    if(empty($auto_thumb) && empty($anchor)){
    	return '<p>'.__('Error! You must specify an anchor parameter if you are not using the auto_thumb option.', 'wp-video-lightbox').'</p>';
    }

    $atts['vid_type'] = "vimeo";
    if (preg_match("/http/", $anchor)){ // Use the image as the anchor
        $anchor_replacement = '<img src="'.esc_url($anchor).'" class="video_lightbox_anchor_image" alt="'.wp_vid_lightbox_sanitize_alt_text($alt).'" />';
    }
    else if($auto_thumb == "1")
    {
        $anchor_replacement = wp_vid_lightbox_get_auto_thumb($atts);
    }
    else    {
    	$anchor_replacement = esc_html($anchor);
    }
    $href_content = 'https://vimeo.com/'.$video_id;
    if(!empty($p_hash)){
        $href_content = add_query_arg( array(
            'p_hash' => $p_hash
        ), $href_content);
    }
    $href_content = add_query_arg( array(
        'width' => $width,
        'height' => $height
    ), $href_content);
    $id = uniqid();
    $aspect_ratio = $height/$width;
    $output = "";
    $output .= '<a id="'.$id.'" rel="'.WPVL_PRETTYPHOTO_REL.'" href="'.esc_url($href_content).'" title="'.wp_vid_lightbox_sanitize_text($description).'">'.$anchor_replacement.'</a>';
    $output .= <<<EOT
    <script>
    /* <![CDATA[ */
    jQuery(document).ready(function($){
        $(function(){
            var width = $(window).innerWidth();
            var setwidth = $width;
            var ratio = $aspect_ratio;
            var height = $height;
            var link = '$href_content';
            if(width < setwidth)
            {
                height = Math.floor(width * $aspect_ratio);
                //console.log("device width "+width+", set width "+$width+", ratio "+$aspect_ratio+", new height "+ height);
                var new_url = wpvl_paramReplace('width', link, width);
                var new_url = wpvl_paramReplace('height', new_url, height);
                $("a#$id").attr('href', new_url);
                //console.log(new_url);
            }
        });
    });
    /* ]]> */
    </script>
EOT;
    return $output;
}

function wp_vid_lightbox_youtube_handler($atts)
{
    $atts = shortcode_atts(array(
            'video_id' => '',
            'width' => '',
            'height' => '',
            'description' => '',
            'anchor' => '',
            'alt' => '',
            'auto_thumb' => '',
    ), $atts);
    $atts = array_map('sanitize_text_field', $atts);
    extract($atts);
    if(empty($video_id) || empty($width) || empty($height)){
            return '<p>'.__('Error! You must specify a value for the Video ID, Width, Height parameters to use this shortcode!', 'wp-video-lightbox').'</p>';
    }
    if(empty($auto_thumb) && empty($anchor)){
    	return '<p>'.__('Error! You must specify an anchor parameter if you are not using the auto_thumb option.', 'wp-video-lightbox').'</p>';
    }

    $atts['vid_type'] = "youtube";
    if(preg_match("/http/", $anchor)){ // Use the image as the anchor
        $anchor_replacement = '<img src="'.esc_url($anchor).'" class="video_lightbox_anchor_image" alt="'.wp_vid_lightbox_sanitize_alt_text($alt).'" />';
    }
    else if($auto_thumb == "1")
    {
        $anchor_replacement = wp_vid_lightbox_get_auto_thumb($atts);
    }
    else{
    	$anchor_replacement = esc_html($anchor);
    }
    $href_content = 'https://www.youtube.com/watch?v='.$video_id.'&width='.$width.'&height='.$height;
    $id = uniqid();
    $aspect_ratio = $height/$width;
    $output = '<a id="'.$id.'" rel="'.WPVL_PRETTYPHOTO_REL.'" href="'.esc_url($href_content).'" title="'.wp_vid_lightbox_sanitize_text($description).'">'.$anchor_replacement.'</a>';
    $output .= <<<EOT
    <script>
    /* <![CDATA[ */
    jQuery(document).ready(function($){
        $(function(){
            var width = $(window).innerWidth();
            var setwidth = $width;
            var ratio = $aspect_ratio;
            var height = $height;
            var link = '$href_content';
            if(width < setwidth)
            {
                height = Math.floor(width * $aspect_ratio);
                //console.log("device width "+width+", set width "+$width+", ratio "+$aspect_ratio+", new height "+ height);
                var new_url = wpvl_paramReplace('width', link, width);
                var new_url = wpvl_paramReplace('height', new_url, height);
                $("a#$id").attr('href', new_url);
                //console.log(new_url);
            }
        });
    });
    /* ]]> */
    </script>
EOT;
    return $output;
}

function wp_vid_lightbox_fb_vimeo_handler($atts)
{
    $atts = shortcode_atts(array(
            'video_id' => '',
            'width' => '',
            'height' => '',
            'caption' => '',
            'anchor' => '',
            'alt' => '',
            'auto_thumb' => '',
    ), $atts);
    $atts = array_map('sanitize_text_field', $atts);
    extract($atts);
    $enable_fancyBox = get_option('wpvl_enable_fancyBox');
    if(!isset($enable_fancyBox) || empty($enable_fancyBox)){
            return '<p>'.__('Error! You need to enable the fancyBox library in the settings!', 'wp-video-lightbox').'</p>';
    }
    if(empty($video_id) || empty($width) || empty($height)){
            return '<p>'.__('Error! You must specify a value for the Video ID, Width, Height and Anchor parameters to use this shortcode!', 'wp-video-lightbox').'</p>';
    }
    if(empty($auto_thumb) && empty($anchor)){
    	return '<p>'.__('Error! You must specify an anchor parameter if you are not using the auto_thumb option.', 'wp-video-lightbox').'</p>';
    }

    $atts['vid_type'] = "vimeo";
    if (preg_match("/http/", $anchor)){ // Use the image as the anchor
        $anchor_replacement = '<img src="'.esc_url($anchor).'" class="video_lightbox_anchor_image" alt="'.wp_vid_lightbox_sanitize_alt_text($alt).'" />';
    }
    else if($auto_thumb == "1")
    {
        $anchor_replacement = wp_vid_lightbox_get_auto_thumb($atts);
    }
    else    {
    	$anchor_replacement = esc_html($anchor);
    }
    $args = array();
    $id = uniqid();
    $args['id'] = $id;
    $args['width'] = $width;
    $args['height'] = $height;
    $href_content = 'https://vimeo.com/'.$video_id;
    $output = "";
    $output .= '<a href="'.esc_url($href_content).'" data-fancybox="'.$id.'" data-caption="'.esc_attr($caption).'">'.$anchor_replacement.'</a>';
    $video_popup_code = wp_vid_lightbox_get_video_popup_code($args);
    $output .= $video_popup_code;
    return $output;
}

function wp_vid_lightbox_fb_youtube_handler($atts)
{
    $atts = shortcode_atts(array(
            'video_id' => '',
            'width' => '',
            'height' => '',
            'caption' => '',
            'anchor' => '',
            'alt' => '',
            'auto_thumb' => '',
    ), $atts);
    $atts = array_map('sanitize_text_field', $atts);
    extract($atts);
    $enable_fancyBox = get_option('wpvl_enable_fancyBox');
    if(!isset($enable_fancyBox) || empty($enable_fancyBox)){
            return '<p>'.__('Error! You need to enable the fancyBox library in the settings!', 'wp-video-lightbox').'</p>';
    }
    if(empty($video_id) || empty($width) || empty($height)){
            return '<p>'.__('Error! You must specify a value for the Video ID, Width, Height parameters to use this shortcode!', 'wp-video-lightbox').'</p>';
    }
    if(empty($auto_thumb) && empty($anchor)){
    	return '<p>'.__('Error! You must specify an anchor parameter if you are not using the auto_thumb option.', 'wp-video-lightbox').'</p>';
    }

    $atts['vid_type'] = "youtube";
    if(preg_match("/http/", $anchor)){ // Use the image as the anchor
        $anchor_replacement = '<img src="'.esc_url($anchor).'" class="video_lightbox_anchor_image" alt="'.wp_vid_lightbox_sanitize_alt_text($alt).'" />';
    }
    else if($auto_thumb == "1")
    {
        $anchor_replacement = wp_vid_lightbox_get_auto_thumb($atts);
    }
    else{
    	$anchor_replacement = esc_html($anchor);
    }
    $args = array();
    $id = uniqid();
    $args['id'] = $id;
    $args['width'] = $width;
    $args['height'] = $height;
    $href_content = 'https://www.youtube.com/watch?v='.$video_id;
    $output = "";
    $output .= '<a href="'.esc_url($href_content).'" data-fancybox="'.$id.'" data-caption="'.esc_attr($caption).'">'.$anchor_replacement.'</a>';
    $video_popup_code = wp_vid_lightbox_get_video_popup_code($args);
    $output .= $video_popup_code;
    return $output;
}

function wp_vid_lightbox_get_video_popup_code($args)
{
    $width = $args['width'];
    $height = $args['height'];
    $content = '$content';
    $aspect_ratio = $height/$width;
    $output = <<<EOT
    <script>
    /* <![CDATA[ */
        jQuery(document).ready(function($){
            $(function(){
                $('[data-fancybox="{$args['id']}"]').fancybox({
                        afterLoad : function( instance, current ) {
                            // Remove scrollbars and change background
                           current.$content.css({
                           width   : '$width',
                           height  : '$height',
                           overflow: 'visible',
                           background : '#000'
                        });
                    },
                    onUpdate : function( instance, current ) {
                        var width = $(window).innerWidth(),
                            height = $height,
                            setwidth = $width,
                            ratio = $aspect_ratio,
                            video = current.$content;

                        if ( video && width < setwidth) {
                          video.hide();
                          height = Math.floor(width * $aspect_ratio);
                          //console.log("width: "+width+", height:"+height);

                          video.css({
                            width  : width,
                            height : height
                          }).show();

                        }
                    }
                })
            });
        });
        /* ]]> */
    </script>
EOT;

   return $output;
}

function wp_vid_lightbox_get_auto_thumb($atts)
{
    $video_id = $atts['video_id'];
    $pieces = explode("&", $video_id);
    $video_id = $pieces[0];
    $alt = '';
    if(isset($atts['alt']) && !empty($atts['alt'])){
        $alt = $atts['alt'];
    }
    $anchor_replacement = "";
    if($atts['vid_type']=="youtube")
    {
        $img_src = 'https://img.youtube.com/vi/'.$video_id.'/0.jpg';
        $anchor_replacement = '<div class="wpvl_auto_thumb_box_wrapper"><div class="wpvl_auto_thumb_box">';
        $anchor_replacement .= '<img src="'.esc_url($img_src).'" class="video_lightbox_auto_anchor_image" alt="'.wp_vid_lightbox_sanitize_alt_text($alt).'" />';
        $anchor_replacement .= '<div class="wpvl_auto_thumb_play"><img src="'.WP_VID_LIGHTBOX_URL.'/images/play.png" class="wpvl_playbutton" /></div>';
        $anchor_replacement .= '</div></div>';
    }
    else if($atts['vid_type']=="vimeo")
    {
        $VideoInfo = wp_vid_lightbox_getVimeoInfo($atts);
        $thumb = $VideoInfo['thumbnail_url'];
        //$thumb = $VideoInfo['thumbnail_medium'];
        //print_r($VideoInfo);
        $anchor_replacement = '<div class="wpvl_auto_thumb_box_wrapper"><div class="wpvl_auto_thumb_box">';
        $anchor_replacement .= '<img src="'.esc_url($thumb).'" class="video_lightbox_auto_anchor_image" alt="'.wp_vid_lightbox_sanitize_alt_text($alt).'" />';
        $anchor_replacement .= '<div class="wpvl_auto_thumb_play"><img src="'.WP_VID_LIGHTBOX_URL.'/images/play.png" class="wpvl_playbutton" /></div>';
        $anchor_replacement .= '</div></div>';
    }
    else
    {
        wp_die("<p>no video type specified</p>");
    }
    return $anchor_replacement;
}

function wp_vid_lightbox_getVimeoInfo($atts)
{
    $video_id = $atts['video_id'];
    $pieces = explode("&", $video_id);
    $video_id = $pieces[0];
    if(isset($atts['p_hash']) && !empty($atts['p_hash'])){
        $video_id .= "/".$atts['p_hash'];
    }
    $request = wp_remote_get('https://vimeo.com/api/oembed.json?url=https://vimeo.com/'.$video_id);
    $response = wp_remote_retrieve_body($request);
    $video_data = json_decode($response, true);
    return $video_data;
    /*
    if (!function_exists('curl_init')) die('CURL is not installed!');
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://vimeo.com/api/v2/video/$video_id.php");
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);
    $output = unserialize(curl_exec($ch));
    $output = $output[0];
    curl_close($ch);
    return $output;
    */
}

function wp_vid_lightbox_enqueue_script()
{
    if(get_option('wpvl_enable_jquery')=='1')
    {
        wp_enqueue_script('jquery');
    }
    if(get_option('wpvl_enable_prettyPhoto')=='1')
    {
        $wpvl_prettyPhoto = WP_Video_Lightbox_prettyPhoto::get_instance();
        wp_register_script('jquery.prettyphoto', WP_VID_LIGHTBOX_URL.'/js/jquery.prettyPhoto.js', array('jquery'), WPVL_PRETTYPHOTO_VERSION);
        wp_enqueue_script('jquery.prettyphoto');
        wp_register_script('video-lightbox', WP_VID_LIGHTBOX_URL.'/js/video-lightbox.js', array('jquery'), WPVL_PRETTYPHOTO_VERSION);
        wp_enqueue_script('video-lightbox');
        wp_register_style('jquery.prettyphoto', WP_VID_LIGHTBOX_URL.'/css/prettyPhoto.css');
        wp_enqueue_style('jquery.prettyphoto');
        wp_register_style('video-lightbox', WP_VID_LIGHTBOX_URL.'/wp-video-lightbox.css');
        wp_enqueue_style('video-lightbox');

        wp_localize_script('video-lightbox', 'vlpp_vars', array(
                'prettyPhoto_rel' => WPVL_PRETTYPHOTO_REL,
                'animation_speed' => $wpvl_prettyPhoto->animation_speed,
                'slideshow' => $wpvl_prettyPhoto->slideshow,
                'autoplay_slideshow' => $wpvl_prettyPhoto->autoplay_slideshow,
                'opacity' => $wpvl_prettyPhoto->opacity,
                'show_title' => $wpvl_prettyPhoto->show_title,
                'allow_resize' => $wpvl_prettyPhoto->allow_resize,
                'allow_expand' => $wpvl_prettyPhoto->allow_expand,
                'default_width' => $wpvl_prettyPhoto->default_width,
                'default_height' => $wpvl_prettyPhoto->default_height,
                'counter_separator_label' => $wpvl_prettyPhoto->counter_separator_label,
                'theme' => $wpvl_prettyPhoto->theme,
                'horizontal_padding' => $wpvl_prettyPhoto->horizontal_padding,
                'hideflash' => $wpvl_prettyPhoto->hideflash,
                'wmode' => $wpvl_prettyPhoto->wmode,
                'autoplay' => $wpvl_prettyPhoto->autoplay,
                'modal' => $wpvl_prettyPhoto->modal,
                'deeplinking' => $wpvl_prettyPhoto->deeplinking,
                'overlay_gallery' => $wpvl_prettyPhoto->overlay_gallery,
                'overlay_gallery_max' => $wpvl_prettyPhoto->overlay_gallery_max,
                'keyboard_shortcuts' => $wpvl_prettyPhoto->keyboard_shortcuts,
                'ie6_fallback' => $wpvl_prettyPhoto->ie6_fallback
            )
        );
    }
    if(get_option('wpvl_enable_fancyBox')=='1')
    {
        wp_register_script('jquery.fancybox', WP_VID_LIGHTBOX_URL.'/js/jquery.fancybox.min.js', array('jquery'), WPVL_FANCYBOX_VERSION);
        wp_enqueue_script('jquery.fancybox');
        wp_register_style('jquery.fancybox', WP_VID_LIGHTBOX_URL.'/css/jquery.fancybox.min.css');
        wp_enqueue_style('jquery.fancybox');
    }
}

function wp_vid_lightbox_sanitize_alt_text($alt){
    $alt = htmlspecialchars($alt);
    $alt = strip_tags($alt);
    $alt = sanitize_text_field($alt);
    $alt = esc_attr($alt);
    return $alt;
}

function wp_vid_lightbox_sanitize_text($text){
    $text = htmlspecialchars($text);
    $text = strip_tags($text);
    $text = sanitize_text_field($text);
    $text = esc_attr($text);
    return $text;
}
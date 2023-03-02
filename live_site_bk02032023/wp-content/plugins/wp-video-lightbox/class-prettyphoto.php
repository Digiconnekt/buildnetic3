<?php
class WP_Video_Lightbox_prettyPhoto
{
    var $animation_speed;
    var $slideshow;
    var $autoplay_slideshow;
    var $opacity;
    var $show_title;
    var $allow_resize;
    var $allow_expand;
    var $default_width;
    var $default_height;
    var $counter_separator_label;
    var $theme;
    var $horizontal_padding;
    var $hideflash;
    var $wmode;
    var $autoplay;
    var $modal;
    var $deeplinking;
    var $overlay_gallery;
    var $overlay_gallery_max;
    var $keyboard_shortcuts;
    var $ie6_fallback;
    
    function __construct()
    {
        $this->animation_speed = 'fast';
        $this->slideshow = '5000';
        $this->autoplay_slideshow = 'false';
        $this->opacity = '0.80';
        $this->show_title = 'true';
        $this->allow_resize = 'true';
        $this->allow_expand = 'true';
        $this->default_width = '640';
        $this->default_height = '480';
        $this->counter_separator_label = '/';
        $this->theme = 'pp_default';
        $this->horizontal_padding = '20';
        $this->hideflash = 'false';
        $this->wmode = 'opaque';
        $this->autoplay = 'false';
        $this->modal = 'false';
        $this->deeplinking = 'false';
        $this->overlay_gallery = 'true';
        $this->overlay_gallery_max = '30';
        $this->keyboard_shortcuts = 'true';
        $this->ie6_fallback = 'true';
    }
       
    static function save_object($obj_to_save)
    {
        update_option('wpvl_prettyphoto_options', $obj_to_save);
    }
    
    static function get_instance()
    {
        $obj = get_option('wpvl_prettyphoto_options');
        if($obj){
            return $obj;
        }else{
            return new WP_Video_Lightbox_prettyPhoto();
        }
    }
}

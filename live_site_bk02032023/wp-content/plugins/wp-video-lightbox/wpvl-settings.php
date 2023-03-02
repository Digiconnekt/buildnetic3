<?php
class Video_Lightbox_Settings_Page 
{	
    
    function __construct() {
        //add_action( 'init', array( &$this, 'load_settings' ) );
        add_action( 'admin_menu', array( &$this, 'add_options_menu' ) );
    }

    function add_options_menu(){
        add_options_page(__('Video Lightbox Settings', 'wp-video-lightbox'), __('Video Lightbox', 'wp-video-lightbox'), 'manage_options', 'wp_video_lightbox', array($this, 'display_settings_page'));
    }
    
    function display_settings_page() 
    {
        $wpvl_plugin_tabs = array(
            'wp_video_lightbox' => __('General', 'wp-video-lightbox'),
            'wp_video_lightbox&action=prettyPhoto' => __('prettyPhoto', 'wp-video-lightbox'),
            //'wp_video_lightbox&action=fancyBox' => __('fancyBox', 'wp-video-lightbox')
        );
        echo '<div class="wrap"><h1>WP Video Lightbox v'.WP_VIDEO_LIGHTBOX_VERSION.'</h1>';    
        echo '<div id="poststuff"><div id="post-body">';  

        if(isset($_GET['page'])){
            $current = $_GET['page'];
            if(isset($_GET['action'])){
                $current .= "&action=".$_GET['action'];
            }
        }
        $content = '';
        $content .= '<h2 class="nav-tab-wrapper">';
        foreach($wpvl_plugin_tabs as $location => $tabname)
        {
            if($current == $location){
                $class = ' nav-tab-active';
            } else{
                $class = '';    
            }
            $content .= '<a class="nav-tab'.$class.'" href="?page='.$location.'">'.$tabname.'</a>';
        }
        $content .= '</h2>';
        echo $content;

        if(isset($_GET['action']))
        { 
            switch ($_GET['action'])
            {
               case 'prettyPhoto':
                   $this->prettyPhoto_settings_section();
                   break;
               case 'fancyBox':
                   $this->fancyBox_settings_section();
                   break;
            }
        }
        else
        {
            $this->general_settings_section();
        }

        echo '</div></div>';
        echo '</div>';
    }
    
    function general_settings_section() 
    {	
        if (isset($_POST['wpvl_general_settings_update']))
        {
            $nonce = $_REQUEST['_wpnonce'];
            if ( !wp_verify_nonce($nonce, 'wpvl_general_settings')){
                    wp_die('Error! Nonce Security Check Failed! Go back to general menu and save the settings again.');
            }
            
            update_option('wpvl_enable_jquery', (isset($_POST["enable_jquery"]))?'1':'');
            
            echo '<div id="message" class="updated fade"><p><strong>';
            echo __('prettyPhoto Settings Updated!', 'wp-video-lightbox');
            echo '</strong></p></div>';
        }
        ?>

        <div style="background: none repeat scroll 0 0 #FFF6D5;border: 1px solid #D1B655;color: #3F2502;margin: 10px 0;padding: 5px 5px 5px 10px;text-shadow: 1px 1px #FFFFFF;">	
        <p><?php _e("For more information, updates, detailed documentation and video tutorial, please visit:", "wp-video-lightbox"); ?><br />
        <a href="https://www.tipsandtricks-hq.com/wordpress-video-lightbox-plugin-display-videos-in-a-fancy-lightbox-overlay-2700" target="_blank"><?php _e("WP Video Lightbox Homepage", "wp-video-lightbox"); ?></a></p>
        </div>

        <form method="post" action="<?php echo $_SERVER["REQUEST_URI"]; ?>">
        <?php wp_nonce_field('wpvl_general_settings'); ?>

        <table class="form-table">
            
        <tbody>
        
        <tr valign="top">
        <th scope="row"><?php _e('Enable jQuery', 'wp-video-lightbox')?></th>
        <td> <fieldset><legend class="screen-reader-text"><span><?php _e('Enable jQuery', 'wp-video-lightbox')?></span></legend><label for="enable_jquery">
        <input name="enable_jquery" type="checkbox" id="enable_jquery" <?php if(get_option('wpvl_enable_jquery')== '1') echo ' checked="checked"';?> value="1">
        <?php _e('Check this option if you want to enable jQuery library', 'wp-video-lightbox')?></label>
        </fieldset></td>
        </tr>
        
        </tbody>
        
        </table>

        <p class="submit"><input type="submit" name="wpvl_general_settings_update" id="wpvl_general_settings_update" class="button button-primary" value="<?php _e('Save Changes', 'wp-video-lightbox')?>"></p></form>
 
        <?php
    }
    
    function prettyPhoto_settings_section()
    {
        if (isset($_POST['wpvl_prettyPhoto_update_settings']))
        {
            $nonce = $_REQUEST['_wpnonce'];
            if ( !wp_verify_nonce($nonce, 'wpvl_prettyPhoto_settings')){
                    wp_die('Error! Nonce Security Check Failed! Go back to prettyPhoto menu and save the settings again.');
            }            
            $wpvl_prettyPhoto = WP_Video_Lightbox_prettyPhoto::get_instance();
            update_option('wpvl_enable_prettyPhoto', (isset($_POST["enable_prettyPhoto"]))?'1':'');
            $wpvl_prettyPhoto->animation_speed = trim($_POST["animation_speed"]);
            $wpvl_prettyPhoto->slideshow = trim($_POST["slideshow"]);
            $wpvl_prettyPhoto->autoplay_slideshow = (isset($_POST["autoplay_slideshow"]))?'true':'false';
            $wpvl_prettyPhoto->opacity = trim($_POST["opacity"]);
            $wpvl_prettyPhoto->show_title = (isset($_POST["show_title"]))?'true':'false';
            $wpvl_prettyPhoto->allow_resize = (isset($_POST["allow_resize"]))?'true':'false';
            $wpvl_prettyPhoto->allow_expand = (isset($_POST["allow_expand"]))?'true':'false';
            $wpvl_prettyPhoto->default_width = trim($_POST["default_width"]);
            $wpvl_prettyPhoto->default_height = trim($_POST["default_height"]);
            $wpvl_prettyPhoto->counter_separator_label = trim($_POST["counter_separator_label"]);
            $wpvl_prettyPhoto->theme = trim($_POST["theme"]);
            $wpvl_prettyPhoto->horizontal_padding = trim($_POST["horizontal_padding"]);
            $wpvl_prettyPhoto->hideflash = (isset($_POST["hideflash"]))?'true':'false';
            $wpvl_prettyPhoto->wmode = trim($_POST["wmode"]);
            $wpvl_prettyPhoto->autoplay = (isset($_POST["autoplay"]))?'true':'false';
            $wpvl_prettyPhoto->modal = (isset($_POST["modal"]))?'true':'false';
            $wpvl_prettyPhoto->deeplinking = (isset($_POST["deeplinking"]))?'true':'false';
            /*
            $wpvl_prettyPhoto->overlay_gallery = (isset($_POST["overlay_gallery"]))?'true':'false';
            $wpvl_prettyPhoto->overlay_gallery_max = trim($_POST["overlay_gallery_max"]);
            */
            $wpvl_prettyPhoto->keyboard_shortcuts = (isset($_POST["keyboard_shortcuts"]))?'true':'false';
            $wpvl_prettyPhoto->ie6_fallback = (isset($_POST["ie6_fallback"]))?'true':'false';
            
            WP_Video_Lightbox_prettyPhoto::save_object($wpvl_prettyPhoto);
            
            echo '<div id="message" class="updated fade"><p><strong>';
            echo 'prettyPhoto Settings Updated!';
            echo '</strong></p></div>';
        }
        $wpvl_prettyPhoto = WP_Video_Lightbox_prettyPhoto::get_instance();
        ?>

        <div style="background: none repeat scroll 0 0 #FFF6D5;border: 1px solid #D1B655;color: #3F2502;margin: 10px 0;padding: 5px 5px 5px 10px;text-shadow: 1px 1px #FFFFFF;">	
        <p><?php _e("For more information, updates, detailed documentation and video tutorial, please visit:", "wp-video-lightbox"); ?><br />
        <a href="https://www.tipsandtricks-hq.com/wordpress-video-lightbox-plugin-display-videos-in-a-fancy-lightbox-overlay-2700" target="_blank"><?php _e("WP Video Lightbox Homepage", "wp-video-lightbox"); ?></a></p>
        </div>

        <form method="post" action="<?php echo $_SERVER["REQUEST_URI"]; ?>">
        <?php wp_nonce_field('wpvl_prettyPhoto_settings'); ?>

        <table class="form-table">
            
        <tbody>
        
        <tr valign="top">
        <th scope="row"><?php _e('Enable prettyPhoto', 'wp-video-lightbox')?></th>
        <td> <fieldset><legend class="screen-reader-text"><span><?php _e('Enable prettyPhoto', 'wp-video-lightbox')?></span></legend><label for="enable_prettyPhoto">
        <input name="enable_prettyPhoto" type="checkbox" id="enable_prettyPhoto" <?php if(get_option('wpvl_enable_prettyPhoto')=='1') echo ' checked="checked"';?> value="1">
        <?php _e('Check this option if you want to enable prettyPhoto library', 'wp-video-lightbox')?></label>
        </fieldset></td>
        </tr>    
            
        <tr valign="top">
        <th scope="row"><label for="animation_speed"><?php _e('Animation speed', 'wp-video-lightbox')?></label></th>
        <td>
        <select name="animation_speed" id="animation_speed">
            <option <?php echo ($wpvl_prettyPhoto->animation_speed==='fast')?'selected="selected"':'';?> value="fast"><?php _e('Fast', 'wp-video-lightbox')?></option>
            <option <?php echo ($wpvl_prettyPhoto->animation_speed==='slow')?'selected="selected"':'';?> value="slow"><?php _e('Slow', 'wp-video-lightbox')?></option>
            <option <?php echo ($wpvl_prettyPhoto->animation_speed==='normal')?'selected="selected"':'';?> value="normal"><?php _e('Normal', 'wp-video-lightbox')?></option>
        </select>
        <!-- <span id="utc-time"><abbr title="Coordinated Universal Time">UTC</abbr> time is <code>2013-11-01 3:56:07</code></span> -->
        <p class="description"><?php _e('fast / slow / normal [default: fast]', 'wp-video-lightbox')?></p>
        </td>
        </tr>    
            
        <tr valign="top">
        <th scope="row"><label for="slideshow"><?php _e('Slideshow', 'wp-video-lightbox')?></label></th>
        <td><input name="slideshow" type="text" id="slideshow" value="<?php echo $wpvl_prettyPhoto->slideshow; ?>" class="regular-text">
        <p class="description"><?php echo sprintf(__('%s OR interval time in ms [default: %s]', 'wp-video-lightbox'), 'false', '5000')?></p></td>
        </tr>
        
        <tr valign="top">
        <th scope="row"><?php _e('Autoplay slideshow', 'wp-video-lightbox')?></th>
        <td> <fieldset><legend class="screen-reader-text"><span><?php _e('Autoplay slideshow', 'wp-video-lightbox')?></span></legend><label for="autoplay_slideshow">
        <input name="autoplay_slideshow" type="checkbox" id="autoplay_slideshow" <?php if($wpvl_prettyPhoto->autoplay_slideshow == 'true') echo ' checked="checked"';?> value="1">
        <?php _e('true / false [default: false]', 'wp-video-lightbox')?></label>
        </fieldset></td>
        </tr>
        
        <tr valign="top">
        <th scope="row"><label for="opacity"><?php _e('Opacity', 'wp-video-lightbox')?></label></th>
        <td><input name="opacity" type="text" id="opacity" value="<?php echo $wpvl_prettyPhoto->opacity; ?>" class="regular-text">
        <p class="description"><?php echo sprintf(__('Value between %s and %s [default: %s]', 'wp-video-lightbox'), '0', '1', '0.8')?></p></td>
        </tr>
        
        <tr valign="top">
        <th scope="row"><?php _e('Show title', 'wp-video-lightbox')?></th>
        <td> <fieldset><legend class="screen-reader-text"><span><?php _e('Show title', 'wp-video-lightbox')?></span></legend><label for="show_title">
        <input name="show_title" type="checkbox" id="show_title" <?php if($wpvl_prettyPhoto->show_title == 'true') echo ' checked="checked"';?> value="1">
        <?php _e('true / false [default: true]', 'wp-video-lightbox')?></label>
        </fieldset></td>
        </tr>
        
        <tr valign="top">
        <th scope="row"><?php _e('Allow resize', 'wp-video-lightbox')?></th>
        <td> <fieldset><legend class="screen-reader-text"><span><?php _e('Allow resize', 'wp-video-lightbox')?></span></legend><label for="allow_resize">
        <input name="allow_resize" type="checkbox" id="allow_resize" <?php if($wpvl_prettyPhoto->allow_resize == 'true') echo ' checked="checked"';?> value="1">
        <?php _e('Resize the photos bigger than viewport. true / false [default: true]', 'wp-video-lightbox')?></label>
        </fieldset></td>
        </tr>
        
        <tr valign="top">
        <th scope="row"><?php _e('Allow expand', 'wp-video-lightbox')?></th>
        <td> <fieldset><legend class="screen-reader-text"><span><?php _e('Allow expand', 'wp-video-lightbox')?></span></legend><label for="allow_expand">
        <input name="allow_expand" type="checkbox" id="allow_expand" <?php if($wpvl_prettyPhoto->allow_resize == 'true') echo ' checked="checked"';?> value="1">
        <?php _e('Allow the user to expand a resized image. true / false [default: true]', 'wp-video-lightbox')?></label>
        </fieldset></td>
        </tr>
        
        <tr valign="top">
        <th scope="row"><label for="opacity"><?php _e('Default width', 'wp-video-lightbox')?></label></th>
        <td><input name="default_width" type="text" id="default_width" value="<?php echo $wpvl_prettyPhoto->default_width; ?>" class="regular-text">
        <p class="description"><?php echo sprintf(__('[default: %s]', 'wp-video-lightbox'), '640')?></p></td>
        </tr>
        
        <tr valign="top">
        <th scope="row"><label for="opacity"><?php _e('Default height', 'wp-video-lightbox')?></label></th>
        <td><input name="default_height" type="text" id="default_height" value="<?php echo $wpvl_prettyPhoto->default_height; ?>" class="regular-text">
        <p class="description"><?php echo sprintf(__('[default: %s]', 'wp-video-lightbox'), '480')?></p></td>
        </tr>
        
        <tr valign="top">
        <th scope="row"><label for="opacity"><?php _e('Counter separator label', 'wp-video-lightbox')?></label></th>
        <td><input name="counter_separator_label" type="text" id="counter_separator_label" value="<?php echo $wpvl_prettyPhoto->counter_separator_label; ?>" class="regular-text">
        <p class="description"><?php echo sprintf(__('The separator for the gallery counter 1 "of" 2 [default: %s]', 'wp-video-lightbox'), '/')?></p></td>
        </tr>
        
        <tr valign="top">
        <th scope="row"><label for="theme"><?php _e('Theme', 'wp-video-lightbox')?></label></th>
        <td>
        <select name="theme" id="theme">
            <option selected="selected" value="pp_default"><?php _e('Default', 'wp-video-lightbox')?></option>
            <option <?php echo ($wpvl_prettyPhoto->theme==='light_rounded')?'selected="selected"':'';?> value="light_rounded"><?php _e('Light Rounded', 'wp-video-lightbox')?></option>
            <option <?php echo ($wpvl_prettyPhoto->theme==='dark_rounded')?'selected="selected"':'';?> value="dark_rounded"><?php _e('Dark Rounded', 'wp-video-lightbox')?></option>
            <option <?php echo ($wpvl_prettyPhoto->theme==='light_square')?'selected="selected"':'';?> value="light_square"><?php _e('Light Square', 'wp-video-lightbox')?></option>
            <option <?php echo ($wpvl_prettyPhoto->theme==='dark_square')?'selected="selected"':'';?> value="dark_square"><?php _e('Dark Square', 'wp-video-lightbox')?></option>
            <option <?php echo ($wpvl_prettyPhoto->theme==='facebook')?'selected="selected"':'';?> value="facebook"><?php _e('Facebook', 'wp-video-lightbox')?></option>
        </select>
        <!-- <span id="utc-time"><abbr title="Coordinated Universal Time">UTC</abbr> time is <code>2013-11-01 3:56:07</code></span> -->
        <p class="description"><?php _e('Select a theme for the lightbox window', 'wp-video-lightbox')?></p>
        </td>
        </tr>
        
        <tr valign="top">
        <th scope="row"><label for="opacity"><?php _e('Horizontal padding', 'wp-video-lightbox')?></label></th>
        <td><input name="horizontal_padding" type="text" id="horizontal_padding" value="<?php echo $wpvl_prettyPhoto->horizontal_padding; ?>" class="regular-text">
        <p class="description"><?php echo sprintf(__('The padding on each side of the picture [default: %s]', 'wp-video-lightbox'), '20')?> </p></td>
        </tr>
        
        <tr valign="top">
        <th scope="row">Hide Flash</th>
        <td> <fieldset><legend class="screen-reader-text"><span>Hide Flash</span></legend><label for="hideflash">
        <input name="hideflash" type="checkbox" id="hideflash" <?php if($wpvl_prettyPhoto->hideflash == 'true') echo ' checked="checked"';?> value="1">
        <?php _e('Hides all the flash objects on a page, set to TRUE if flash appears over prettyPhoto [default: false]', 'wp-video-lightbox')?></label>
        </fieldset></td>
        </tr>
        
        <tr valign="top">
        <th scope="row"><label for="animation_speed"><?php _e('wmode', 'wp-video-lightbox')?></label></th>
        <td>
        <select name="wmode" id="wmode">
            <option selected="selected" value="opaque"><?php _e('opaque', 'wp-video-lightbox')?></option>
        </select>
        <p class="description"><?php _e('Set the flash wmode attribute [default: opaque]', 'wp-video-lightbox')?></p>
        </td>
        </tr>
        
        <tr valign="top">
        <th scope="row"><?php _e('Autoplay', 'wp-video-lightbox')?></th>
        <td> <fieldset><legend class="screen-reader-text"><span><?php _e('Autoplay', 'wp-video-lightbox')?></span></legend><label for="autoplay">
        <input name="autoplay" type="checkbox" id="autoplay" <?php if($wpvl_prettyPhoto->autoplay == 'true') echo ' checked="checked"';?> value="1">
        <?php _e('Automatically start videos: true / false [default: true]', 'wp-video-lightbox')?></label>
        </fieldset></td>
        </tr>
        
        <tr valign="top">
        <th scope="row"><?php _e('Modal', 'wp-video-lightbox')?></th>
        <td> <fieldset><legend class="screen-reader-text"><span><?php _e('Modal', 'wp-video-lightbox')?></span></legend><label for="modal">
        <input name="modal" type="checkbox" id="modal" <?php if($wpvl_prettyPhoto->modal == 'true') echo ' checked="checked"';?> value="1">
        <?php _e('If set to true, only the close button will close the window [default: false]', 'wp-video-lightbox')?></label>
        </fieldset></td>
        </tr>
        
        <tr valign="top">
        <th scope="row"><?php _e('Deeplinking', 'wp-video-lightbox')?></th>
        <td> <fieldset><legend class="screen-reader-text"><span><?php _e('Deeplinking', 'wp-video-lightbox')?></span></legend><label for="deeplinking">
        <input name="deeplinking" type="checkbox" id="deeplinking" <?php if($wpvl_prettyPhoto->deeplinking == 'true') echo ' checked="checked"';?> value="1">
        <?php _e('Allow prettyPhoto to update the url to enable deeplinking. [default: true]', 'wp-video-lightbox')?></label>
        </fieldset></td>
        </tr>
        <!--
        <tr valign="top">
        <th scope="row"><?php _e('Overlay gallery', 'wp-video-lightbox')?></th>
        <td> <fieldset><legend class="screen-reader-text"><span><?php _e('Overlay gallery', 'wp-video-lightbox')?></span></legend><label for="overlay_gallery">
        <input name="overlay_gallery" type="checkbox" id="overlay_gallery" <?php if($wpvl_prettyPhoto->overlay_gallery == 'true') echo ' checked="checked"';?> value="1">
        <?php _e('If set to true, a gallery will overlay the fullscreen image on mouse over [default: true]', 'wp-video-lightbox')?></label>
        </fieldset></td>
        </tr>
        
        <tr valign="top">
        <th scope="row"><label for="opacity"><?php _e('Overlay gallery max', 'wp-video-lightbox')?></label></th>
        <td><input name="overlay_gallery_max" type="text" id="overlay_gallery_max" value="<?php echo $wpvl_prettyPhoto->overlay_gallery_max; ?>" class="regular-text">
        <p class="description"><?php echo sprintf(__('Maximum number of pictures in the overlay gallery [default: %s]', 'wp-video-lightbox'), '30')?></p></td>
        </tr>
        -->
        <tr valign="top">
        <th scope="row"><?php _e('Keyboard shortcuts', 'wp-video-lightbox')?></th>
        <td> <fieldset><legend class="screen-reader-text"><span><?php _e('Keyboard shortcuts', 'wp-video-lightbox')?></span></legend><label for="keyboard_shortcuts">
        <input name="keyboard_shortcuts" type="checkbox" id="keyboard_shortcuts" <?php if($wpvl_prettyPhoto->keyboard_shortcuts == 'true') echo ' checked="checked"';?> value="1">
        <?php _e('Set to false if you open forms inside prettyPhoto [default: true]', 'wp-video-lightbox')?></label>
        </fieldset></td>
        </tr>
        
        <tr valign="top">
        <th scope="row"><?php _e('IE6 fallback', 'wp-video-lightbox')?></th>
        <td> <fieldset><legend class="screen-reader-text"><span><?php _e('IE6 fallback', 'wp-video-lightbox')?></span></legend><label for="ie6_fallback">
        <input name="ie6_fallback" type="checkbox" id="ie6_fallback" <?php if($wpvl_prettyPhoto->ie6_fallback == 'true') echo ' checked="checked"';?> value="1">
        <?php _e('compatibility fallback for IE6 [default: true]', 'wp-video-lightbox')?></label>
        </fieldset></td>
        </tr>
        
        </tbody>
        
        </table>

        <p class="submit"><input type="submit" name="wpvl_prettyPhoto_update_settings" id="wpvl_prettyPhoto_update_settings" class="button button-primary" value="<?php _e('Save Changes', 'wp-video-lightbox')?>"></p></form>
 
        <?php
    }
    
    function fancyBox_settings_section()
    {        
        if (isset($_POST['wpvl_fancyBox_update_settings']))
        {
            $nonce = $_REQUEST['_wpnonce'];
            if ( !wp_verify_nonce($nonce, 'wpvl_fancyBox_settings')){
                    wp_die('Error! Nonce Security Check Failed! Go back to fancyBox menu and save the settings again.');
            }
            
            update_option('wpvl_enable_fancyBox', ($_POST["enable_fancyBox"]=='1')?'1':'');           
            
            echo '<div id="message" class="updated fade"><p><strong>';
            _e('fancyBox Settings Updated!', 'wp-video-lightbox');
            echo '</strong></p></div>';
        }

        ?>

        <div style="background: none repeat scroll 0 0 #FFF6D5;border: 1px solid #D1B655;color: #3F2502;margin: 10px 0;padding: 5px 5px 5px 10px;text-shadow: 1px 1px #FFFFFF;">	
        <p><?php _e("For more information, updates, detailed documentation and video tutorial, please visit:", "wp-video-lightbox"); ?><br />
        <a href="https://www.tipsandtricks-hq.com/wordpress-video-lightbox-plugin-display-videos-in-a-fancy-lightbox-overlay-2700" target="_blank"><?php _e("WP Video Lightbox Homepage", "wp-video-lightbox"); ?></a></p>
        </div>

        <form method="post" action="<?php echo $_SERVER["REQUEST_URI"]; ?>">
        <?php wp_nonce_field('wpvl_fancyBox_settings'); ?>

        <table class="form-table">
            
        <tbody>
        
        <tr valign="top">
        <th scope="row"><?php _e('Enable fancyBox', 'wp-video-lightbox')?></th>
        <td> <fieldset><legend class="screen-reader-text"><span><?php _e('Enable fancyBox', 'wp-video-lightbox')?></span></legend><label for="enable_fancyBox">
        <input name="enable_fancyBox" type="checkbox" id="enable_fancyBox" <?php if(get_option('wpvl_enable_fancyBox')=='1') echo ' checked="checked"';?> value="1">
        <?php _e('Check this option if you want to enable fancyBox library', 'wp-video-lightbox')?></label>
        </fieldset></td>
        </tr>
        
        </tbody>
        
        </table>

        <p class="submit"><input type="submit" name="wpvl_fancyBox_update_settings" id="wpvl_fancyBox_update_settings" class="button button-primary" value="<?php _e('Save Changes', 'wp-video-lightbox')?>"></p></form>
 
        <?php
    }

    function current_tab() {
            $tab = isset( $_GET['tab'] ) ? $_GET['tab'] : $this->plugin_settings_page_key;
            return $tab;
    }

    /*
     * Renders our tabs in the plugin options page,
     * walks through the object's tabs array and prints
     * them one by one. Provides the heading for the
     * plugin_options_page method.
     */
    function plugin_options_tabs() 
    {
        $current_tab = isset( $_GET['tab'] ) ? $_GET['tab'] : $this->plugin_settings_page_key;
        echo '<h2 class="nav-tab-wrapper">';
        foreach ( $this->plugin_settings_tabs as $tab_key => $tab_caption ) 
        {
            $active = $current_tab == $tab_key ? 'nav-tab-active' : '';
            echo '<a class="nav-tab ' . $active . '" href="?page=' . $this->plugin_options_key . '&tab=' . $tab_key . '">' . $tab_caption . '</a>';	
        }
        echo '</h2>';
    }
} //end class

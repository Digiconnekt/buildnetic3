<?php
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

add_action( 'admin_init', 'devvn_ihp_register_mysettings' );
function devvn_ihp_register_mysettings() {
    register_setting( 'ihp-options-group','ihp_options' );
}

add_action( 'admin_menu', 'devvn_ihp_admin_menu' );
function devvn_ihp_admin_menu() {
    add_submenu_page(
        'edit.php?post_type=points_image',
        __( 'Image Hotspot settings', 'devvn-image-hotspot' ),
        __( 'Settings', 'devvn-image-hotspot' ),
        'manage_options',
        'devvn-image-hotspot',
        'devvn_ihp_callback'
    );
}

function devvn_ihp_callback(){
    $popup_type = devvn_get_ihp_options('popup_type');
    ?>
    <div class="wrap">
        <h1><?php _e('Image Hotspot settings', 'devvn-image-hotspot');?></h1>
        <form method="post" action="options.php" novalidate="novalidate">
            <?php settings_fields( 'ihp-options-group' );?>
            <table class="form-table">
                <tbody>
                <tr>
                    <th scope="row"><label><?php _e('Popup type on mobile', 'devvn-image-hotspot')?></label></th>
                    <td>
                        <div class="tet_style_radio tet_style_radio_banner">
                            <label style="margin-right: 10px;">
                                <input type="radio" name="ihp_options[popup_type]" value="2" <?php checked('2', $popup_type, true);?>> Full Screen
                            </label>
                            <label>
                                <input type="radio" name="ihp_options[popup_type]" value="1" <?php checked('1', $popup_type, true);?>> Normal - Tooltip
                            </label>
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
            <?php do_settings_sections('ihp-options-group', 'default'); ?>

            <?php submit_button();?>
        </form>
        <p><strong>Buy me a Coffee to keep me awake :)</strong></p>
        <?php echo devvn_ihotspot_donate_shortcode_callback();?>
    </div>
<?php
}

function devvn_ihp_action_links( $links, $file ) {
    if ( strpos( $file, 'devvn-image-hotspot.php' ) !== false ) {
        $settings_link = '<a href="' . admin_url( 'edit.php?post_type=points_image&page=devvn-image-hotspot' ) . '" title="'.__('Settings').'">' . __( 'Settings' ) . '</a>';
        array_unshift( $links, $settings_link );
    }
    return $links;
}
add_filter( 'plugin_action_links_' . DEVVN_IHOTSPOT_BASENAME, 'devvn_ihp_action_links', 10, 2 );

function devvn_get_ihp_options($name = ''){
    $options = wp_parse_args(get_option('ihp_options'),array(
        'popup_type' => 1,
    ));
    if($name){
        return (isset($options[$name]) && $options[$name]) ? $options[$name] : '';
    }
    return $options;
}

add_filter( 'body_class', 'custom_class' );
function custom_class( $classes ) {
    $popup_type = devvn_get_ihp_options('popup_type');
    if ( $popup_type == 2 ) {
        $classes[] = 'ihp_popup_full';
    }
    return $classes;
}
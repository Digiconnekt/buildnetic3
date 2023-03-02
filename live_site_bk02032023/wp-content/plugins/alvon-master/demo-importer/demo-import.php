<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}


class AlvonDemoimport {

    public function __construct(){
        // Action Hook
        add_action( 'pt-ocdi/after_content_import_execution', array( $this, 'johanspond_theme_options_import' ), 3, 99 );
        add_action( 'pt-ocdi/after_import', array( $this, 'johanspond_import_menu_setup' ) );
        add_action( 'pt-ocdi/after_import', array( $this, 'johanspond_import_page_setup' ) );
        add_action( 'pt-ocdi/after_import', array( $this, 'johanspond_import_page_setup' ) );
        add_action( 'pt-ocdi/after_import', array( $this, 'johanspond_rev_slider_import_setup' ) );
        // Filter Hook
        add_filter( 'pt-ocdi/import_files', array( $this, 'johanspond_import_files' ) );
        add_filter( 'pt-ocdi/plugin_page_setup', array( $this, 'johanspond_oneclick_admin_page' ) );
        add_filter( 'pt-ocdi/plugin_intro_text', array( $this, 'johanspond_ocdi_plugin_intro_text' ) );
        add_filter( 'pt-ocdi/disable_pt_branding', '__return_true' );
        add_filter( 'pt-ocdi/confirmation_dialog_options', array( $this, 'geoport_ocdi_confirmation_dialog_options' ), 10, 1 );
    }


    /**
    * Demo containes file loading methos
    */
    public function johanspond_import_files() {
        return array(
            //Home 1 Setup
            array(
                'import_file_name'             => 'Import Demo',
                'categories'                   => array( 'Import Demo', 'Import Demo' ),
                'local_import_file'            => trailingslashit( ALVON_PLG_DEMO_PATH ) . 'demo/demo-content.xml',
                'local_import_widget_file'     => trailingslashit( ALVON_PLG_DEMO_PATH ) . 'demo/widgets.wie',
                'local_import_customizer_file' => trailingslashit( ALVON_PLG_DEMO_PATH ) . 'demo/customizer.dat',
                'local_import_csf'             => array(
                    array(
                        'file_path'   => trailingslashit( ALVON_PLG_DEMO_PATH ) . 'demo/options.txt',
                        'option_name' => '_alvon_options',
                    ),
                ),
                'import_notice'                => __( 'Import Demo Data. No need to setup the theme options and revolution slider separately', 'alvon' ),
            ),
        );
    }


    /**
    * Assign CodeStar Framework import data
    */
    public function johanspond_theme_options_import( $selected_import_files, $import_files, $selected_index ) {

        if ( !class_exists( 'ALVONFramework' ) ) {
            return;
        }

        function cs_decode_string( $string ) {
            return unserialize( $string );
        }

        $downloader = new OCDI\Downloader();

        if( ! empty( $import_files[$selected_index]['local_import_csf'] ) ) {

            foreach( $import_files[$selected_index]['local_import_csf'] as $index => $import ) {
                $file_path = $import['file_path'];
                $file_raw  = OCDI\Helpers::data_from_file( $file_path );
                update_option( $import['option_name'], cs_decode_string( $file_raw, true ) );
            }
        }
        // Put info to log file.
        $ocdi       = OCDI\OneClickDemoImport::get_instance();
        $log_path   = $ocdi->get_log_file_path();

        OCDI\Helpers::append_to_file( 'Codestar Framework files loaded.'. $logs, $log_path );
    }


    /**
    * Assign menus to their locations.
    */
    public function johanspond_import_menu_setup( $selected_import ) {
        $main_menu = get_term_by( 'name', 'Main Menu', 'nav_menu' );

        set_theme_mod( 'nav_menu_locations', array(
                'primary' => $main_menu->term_id,
            )
        );
    }


    /**
    * Assign front page and posts page (blog page).
    */
    public function johanspond_import_page_setup( $selected_import ) {

        // Assign front page and posts page (blog page).

        $front_page_id = get_page_by_title( 'Home 1' );

        update_option( 'show_on_front', 'page' );
        update_option( 'page_on_front', $front_page_id->ID );

        $blog_page_id  = get_page_by_title( 'Blog' );
        update_option( 'page_for_posts', $blog_page_id->ID );

    }


    /**
    * Assign Revolution Slider Import.
    */
    public function johanspond_rev_slider_import_setup( $selected_import ) {
        $slider_files = array(
            trailingslashit( ALVON_PLG_DEMO_PATH ) . 'demo/banner1.zip',
            trailingslashit( ALVON_PLG_DEMO_PATH ) . 'demo/banner2.zip'
        );
        if ( class_exists( 'RevSlider' ) && count( $slider_files ) > 0 ) {
            $slider = new RevSlider();
            foreach( $slider_files as $slider_file ){
                $slider->importSliderFromPost( true, true, $slider_file );
            }
        }
    }



    /**
    * Install Demos Menu - Menu Edited
    */
    public function johanspond_oneclick_admin_page( $default_settings ) {
        $default_settings['parent_slug'] = 'themes.php';
        $default_settings['page_title']  = esc_html__( 'Import Demos', 'alvon' );
        $default_settings['menu_title']  = esc_html__( 'Import Demos', 'alvon' );
        $default_settings['capability']  = 'import';
        $default_settings['menu_slug']   = 'install_demos';
        return $default_settings;
    }


    // Model Popup - Width Increased
    public function geoport_ocdi_confirmation_dialog_options ( $options ) {
      return array_merge( $options, array(
        'width'       => 600,
        'dialogClass' => 'wp-dialog',
        'resizable'   => false,
        'height'      => 'auto',
        'modal'       => true,
      ) );
    }


    public function johanspond_ocdi_plugin_intro_text( $default_text ) {
        $auto_install = admin_url('themes.php?page=install_demos');
        $manual_install = admin_url('themes.php?page=install_demos&import-mode=manual');
        $default_text .= '<h1>Install Demos</h1>
        <div class="geoport-core_intro-text vtdemo-one-click">
        <div id="poststuff">

        <div class="postbox important-notes">
        <h3><span style="margin-left: 25px">Important notes:</span></h3>
        <div class="inside">
        <ol>
        <li>Please note, this import process will take time. So, please be patient.</li>
        <li>Please make sure you\'ve installed recommended plugins before you import this content.</li>
        <li>All images are demo purposes only. So, images may repeat in your site content.</li>
        </ol>
        </div>
        </div>

        <div class="nav-tab-wrapper vt-nav-tab">
        <a href="'. $auto_install .'" class="nav-tab vt-mode-switch vt-auto-mode nav-tab-active">Auto Import</a>
        <a href="'. $manual_install .'" class="nav-tab vt-mode-switch vt-manual-mode">Manual Import</a>
        </div>

        </div>
        </div>';

        return $default_text;
    }

} //End Of Class

function alvon_demo_importer_init(){
    $johanspond_init = new AlvonDemoimport(); //Initialization of class
}
add_action('plugins_loaded', 'alvon_demo_importer_init');
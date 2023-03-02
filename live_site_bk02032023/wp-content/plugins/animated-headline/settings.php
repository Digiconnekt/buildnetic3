<?php
if(!class_exists('animated_headlines_settings'))
{
	class animated_headlines_settings
	{
		/* Construct the plugin object */
		public function __construct()
		{
			// register actions
         add_action('admin_menu', array(&$this, 'add_menu'));
         add_action('init', array($this, 'localize_plugin'));

         // Add style and script
         add_action('wp_print_styles', array($this, 'ah_styles'));
         add_action('wp_print_scripts', array($this, 'ah_scripts'));

         // Create shortcode
         add_shortcode('animated-headline', array($this, 'render_shortcode'));
         
         // activate shortcode in text widgets
         add_filter('widget_text', 'shortcode_unautop');
         add_filter('widget_text', 'do_shortcode');
		} // END public function __construct
		
      /* register scripts and style */
      function localize_plugin(){
         // register scripts
         wp_register_script('mainjs', AH_URL . 'js/main.js', array('jquery'), '1.0.0', true);
         
         // register styles
         wp_register_style('plugin_css', AH_URL . 'css/style.css', null, AH_VERSION);
      }// END public function localize_plugin()

      /* Calling Script*/
      function ah_scripts() {
         wp_enqueue_script('mainjs');
      }// END public function ah_scripts()

      /* Calling Style */
      function ah_styles() {
         wp_enqueue_style('plugin_css');
      }// END public function ah_styles()
     
      /* add a menu */		
      public function add_menu(){
         // Add a page to manage this plugin's settings
         add_options_page('Animated Headline Detail', 'Animated Headline', 'manage_options', 'animated-headlines', array(&$this, 'plugin_detail_page') );
      } // END public function add_menu()
      
      /* Menu Callback */		
      public function plugin_detail_page()
      {
     	   if(!current_user_can('manage_options'))
        	{
        		wp_die(__('You do not have sufficient permissions to access this page.'));
        	}

        	// Render the settings template
        	include(sprintf("%s/inc/settings.php", dirname(__FILE__)));
      } // END public function plugin_detail_page()


      // Add Shortcode code
      function render_shortcode($atts){
         // Attributes
         extract( shortcode_atts(
            array(
               'title' => '',
               'animation' => 'rotate-1',
               'animated_text' => '',
            ), $atts )
         );

         $title_text = $title;
         $animation_class = $animation;
         $animat_text  = $this->cleanse_shortcode_input($animated_text);

         // add letters class in $animation_class variable.
         if(($animation_class=="rotate-2")||($animation_class=="rotate-3")||($animation_class=="type")||($animation_class=="scale")){
            $animation_class .= " letters";
         }
         
         $out = '<h1 class="cd-headline '.$animation_class.'"><span> '. $title_text .' </span> ';
         $out .= '<span class="cd-words-wrapper">';
         $out .= $this->animat_text_filter($animat_text);
         $out .= '</span></h1>';

         return $out;
      }

      // convert Animation Text string input into array, force integer values, return serialized
      function cleanse_shortcode_input($input) {
         $input = explode(',', $input);
         return $input;
      }

      
      function animat_text_filter($animat_text){
         $texts = $animat_text;
         $arrlength = count($texts);
         for($x = 0; $x < $arrlength; $x++) {
            if($x==0){ $addclass = "is-visible";}else{$addclass = "";}
            $out .= '<b class="'.$addclass.'">'.$texts[$x].'</b>'."\n";
         }
         return $out;
      }
   } // END class animated_headlines_settings
} // END if(!class_exists('animated_headlines_settings'))


<?php
/*
Plugin Name: Animated Headline
Plugin URI: https://wordpress.org/plugins/animated-headline/
Description: A simple wordpress plugin for animated headlines using shortcode. [animated-headline title="Hello my friend" animated_text="Anshul,Harshali,Asha,Rahul" animation="rotate-1"]
Version: 4.0
Author: Anshul Labs
Author URI: http://www.anshullabs.xyz
License: GPL2
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/
/*
Copyright 2012  Anshul Labs  (email : hello@anshullabs.xyz)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License, version 2, as
published by the Free Software Foundation.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/


define('AH_VERSION', '4.0');
define('AH_FILE', basename(__FILE__));
define('AH_NAME', str_replace('.php', '', AH_FILE));
define('AH_PATH', plugin_dir_path(__FILE__));
define('AH_URL', plugin_dir_url(__FILE__));
define('AH_HOMEPAGE', 'https://wordpress.org/plugins/animated-headline/');

if(!class_exists('animated_headlines'))
{
	class animated_headlines
	{
		/* Construct the plugin object */
		public function __construct()
		{
			// Initialize Settings
			require_once(sprintf("%s/settings.php", dirname(__FILE__)));
			$animated_headlines_settings = new animated_headlines_settings();

			//Add the settings link to the plugins page.
			$plugin = plugin_basename(__FILE__);
			add_filter("plugin_action_links_$plugin", array( $this, 'plugin_detail_link' ));
		} // END public function __construct

		/* Activate the plugin */
		public static function activate()
		{
			// Do nothing
		} // END public static function activate

		/* Deactivate the plugin */
		public static function deactivate()
		{
			// Do nothing
		} // END public static function deactivate

		// Add the settings link to the plugins page
		function plugin_detail_link($links)
		{
			$detail_link = '<a href="options-general.php?page=animated-headlines">Detail</a>';
			array_unshift($links, $detail_link);
			$detail_link1 = '<a href="http://www.paypal.me/anshulgangrade" rel="nofollow">Donate Me</a>';
			array_unshift($links, $detail_link1);
			return $links;
		}
	} // END class animated_headlines
} // END if(!class_exists('animated_headlines'))

if(class_exists('animated_headlines'))
{
	// Installation and uninstallation hooks
	register_activation_hook(__FILE__, array('animated_headlines', 'activate'));
	register_deactivation_hook(__FILE__, array('animated_headlines', 'deactivate'));

	// instantiate the plugin class
	$animated_headlines = new animated_headlines();
}

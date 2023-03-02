<?php
/*
Plugin Name: Fixed Widget
Plugin URI: https://wpadvancedads.com/fixed-widget-wordpress/
Description: Use the fixed widget plugin to create sticky widgets that stay in the visible screen area when the page is scrolled up or down and boost your conversions.
Text Domain: q2w3-fixed-widget
Author: Thomas Maier, Max Bond
Version: 6.0.7
Author URI: https://wpadvancedads.com/fixed-widget-wordpress/
*/

add_action( 'init', array( 'q2w3_fixed_widget', 'init' ) ); // Main Hook

if ( class_exists( 'q2w3_fixed_widget', false ) ) {
	return; // if class is already loaded return control to the main script
}

/**
 * Class q2w3_fixed_widget
 */
class q2w3_fixed_widget {
	// Plugin class

	const ID = 'q2w3_fixed_widget';

	const VERSION = '6.0.7';

	protected static $sidebars_widgets;

	protected static $fixed_widgets;

	protected static $settings_page_hook;

	/**
	 * Load hooks
	 */
	public static function init() {
		$options = self::load_options();

		if ( $options['logged_in_req'] && ! is_user_logged_in() ) {
			return;
		}

		add_filter( 'plugin_action_links_' . plugin_basename( __FILE__ ), array( __CLASS__, 'add_plugin_links' ) );
		add_action( 'in_widget_form', array( __CLASS__, 'add_widget_option' ), 10, 3 );
		add_filter( 'widget_update_callback', array( __CLASS__, 'update_widget_option' ), 10, 3 );
		add_action( 'admin_init', array( __CLASS__, 'register_settings' ) );
		add_action( 'admin_menu', array( __CLASS__, 'admin_menu' ), 5 );
		add_action( 'admin_enqueue_scripts', array( __CLASS__, 'settings_page_js' ) );

		// add stylesheets for the plugin's backend
		add_action( 'admin_enqueue_scripts', array( __CLASS__, 'load_custom_be_styles' ) );
		self::sidebar_plugin_register();
		add_action( 'enqueue_block_editor_assets', array( __CLASS__, 'sidebar_plugin_script_enqueue' ));

		if ( ! is_admin() ) {
			if ( $options['fix-widget-id'] ) {
				self::registered_sidebars_filter();
			}

			add_action( 'wp_enqueue_scripts', array( __CLASS__, 'enqueue_scripts' ) );
			add_filter( 'widget_display_callback', array( __CLASS__, 'display_fixed_widget' ), 99, 3 );
		}
	}

	public static function sidebar_plugin_script_enqueue() {
		wp_enqueue_script('js/backend.min.js');
	}

	public static function sidebar_plugin_register() {
		$asset_file = include( plugin_dir_path( __FILE__ ) . 'js/backend.asset.php' );
		wp_register_script(
			'js/backend.min.js',
			plugins_url( 'js/backend.min.js', __FILE__ ),
			$asset_file['dependencies'],
			$asset_file['version']
		);
		wp_set_script_translations('js/backend.min.js', 'q2w3_fixed_widget');
	}

	/**
	 * Load backend styles
	 */
	public static function load_custom_be_styles() {
		wp_register_style( 'fixedWidgetBEStyles', plugin_dir_url( __FILE__ ) . 'css/backend.css', false, '0.0.1' );
		wp_enqueue_style( 'fixedWidgetBEStyles' );
	}

	/**
	 * Add frontend scripts
	 */
	public static function enqueue_scripts() {
		if ( self::is_amp() ) {
			return;
		}

		self::custom_ids();
		self::fixed_wigets();

		wp_enqueue_script( self::ID, plugin_dir_url( __FILE__ ) . 'js/frontend.min.js', array(), self::VERSION, true );

		self::wp_localize_script();
	}

	/**
	 * Load JavaScript-based variables into the frontend
	 */
	protected static function wp_localize_script() {
		$options = self::load_options();

		$sidebar_options = array();
		$use_sticky_position = isset( $options['use_sticky_position'] ) && $options['use_sticky_position'];
		if ( is_array( self::$fixed_widgets ) && ! empty( self::$fixed_widgets ) ) {
			$i               = 0;

			self::$fixed_widgets = apply_filters( 'q2w3-fixed-widgets', self::$fixed_widgets ); // this filter was requested by users

			foreach ( self::$fixed_widgets as $sidebar => $widgets ) {
				$sidebar_options[ $i ] = array(
					'sidebar'           => $sidebar,
					'use_sticky_position' => $use_sticky_position,
					'margin_top'        => $options['margin-top'],
					'margin_bottom'     => $options['margin-bottom'],
					'stop_elements_selectors' => isset($options['stop-id']) && $options['stop-id'] != '' && (!isset($options['stop_elements_selectors']) || $options['stop_elements_selectors'] == '') ? $options['stop-id']: $options['stop_elements_selectors'],
					'screen_max_width'  => $options['screen-max-width'],
					'screen_max_height' => $options['screen-max-height'],
					'widgets'           => array_values( $widgets ),
				);

				$i++;
			}

			$sidebar_options = apply_filters( 'q2w3-fixed-widget-sidebar-options', $sidebar_options );

		} else {
			$sidebar_options[ 0 ] = array(
				'use_sticky_position' => $use_sticky_position,
				'margin_top'        => $options['margin-top'],
				'margin_bottom'     => $options['margin-bottom'],
				'stop_elements_selectors' => isset($options['stop-id']) && $options['stop-id'] != '' && (!isset($options['stop_elements_selectors']) || $options['stop_elements_selectors'] == '') ? $options['stop-id']: $options['stop_elements_selectors'],
				'screen_max_width'  => $options['screen-max-width'],
				'screen_max_height' => $options['screen-max-height'],
				'widgets'           => array(),
			);
		}
		wp_localize_script( self::ID, 'q2w3_sidebar_options', $sidebar_options );
	}

	/**
	 * Gather fixed widgets
	 */
	protected static function fixed_wigets() {
		$sidebars = wp_get_sidebars_widgets();

		if ( $sidebars && is_array( $sidebars ) ) {
			foreach ( $sidebars as $sidebar_id => $sidebar_widgets ) {
				if ( ! ( stristr( $sidebar_id, 'orphaned_widgets' ) !== false || $sidebar_id === 'wp_inactive_widgets' ) ) {
					if ( $sidebar_widgets && is_array( $sidebar_widgets ) ) {
						foreach ( $sidebar_widgets as $widget ) {
												$widget_id = substr( strrchr( $widget, '-' ), 1 );

												$widget_type = stristr( $widget, '-' . $widget_id, true );

												$widget_options = get_option( 'widget_' . $widget_type );

							if ( isset( $widget_options[ $widget_id ]['q2w3_fixed_widget'] ) && $widget_options[ $widget_id ]['q2w3_fixed_widget'] ) {
								self::$fixed_widgets[ $sidebar_id ][ $widget ] = "#".$widget;
							}
						}
					}
				}
			}
		}
	}

	/**
	 * Prepare fixed widget output
	 *
	 * @param array     $instance widget instance.
	 * @param WP_Widget $widget specific widget object.
	 * @param array     $args additional widget arguments.
	 *
	 * @return array
	 */
	public static function display_fixed_widget( $instance, $widget, $args ) {
		if ( self::is_amp() ) {
			return $instance;
		}

		if ( isset( $instance['q2w3_fixed_widget'] ) && $instance['q2w3_fixed_widget'] && isset( $args['id'] ) && ! isset( self::$fixed_widgets[ $args['id'] ][ $widget->id ] ) ) {
			self::$fixed_widgets[ $args['id'] ][ $widget->id ] = $widget->id;
			self::wp_localize_script();
		}

		return $instance;
	}

	/**
	 * Fix elements which IDs are given in the Custom ID option in the Fixed Widget settings
	 * technically, they are not widgets, though FW can handle any element
	 */
	protected static function custom_ids() {
		$options = self::load_options();

		if ( isset( $options['custom-ids'] ) && $options['custom-ids'] ) {
			$ids = explode( PHP_EOL, $options['custom-ids'] );

			foreach ( $ids as $id ) {
				$id = trim( $id );

				if ( $id ) {
					self::$fixed_widgets[ self::get_widget_sidebar( $id ) ][ $id ] = $id;
				}
			}
		}
	}

	/**
	 * Return the sidebar that hosts a widget.
	 *
	 * @param string $widget_id Widget ID
	 *
	 * @return int|string
	 */
	protected static function get_widget_sidebar( $widget_id ) {
		if ( ! self::$sidebars_widgets ) {
			self::$sidebars_widgets = wp_get_sidebars_widgets();

			unset( self::$sidebars_widgets['wp_inactive_widgets'] );
		}

		if ( is_array( self::$sidebars_widgets ) ) {
			foreach ( self::$sidebars_widgets as $sidebar => $widgets ) {
				$key = array_search( $widget_id, $widgets );

				if ( $key !== false ) {
					return $sidebar;
				}
			}
		}

		return 'q2w3-default-sidebar';
	}

	/**
	 * Render the option field displayed in the widget form
	 *
	 * @param WP_Widget $widget Widget object.
	 * @param string    $return unused.
	 * @param array     $instance Widget instance.
	 */
	public static function add_widget_option( $widget, $return, $instance ) {
		if ( isset( $instance['q2w3_fixed_widget'] ) ) {
			$iqfw = $instance['q2w3_fixed_widget'];
		} else {
			$iqfw = 0;
		}

		echo '<p>' . PHP_EOL;

		echo '<input type="checkbox" name="' . esc_attr( $widget->get_field_name( 'q2w3_fixed_widget' ) ) . '" value="1" ' . checked( $iqfw, 1, false ) . '/>' . PHP_EOL;

		echo '<label for="' . esc_attr( $widget->get_field_id( 'q2w3_fixed_widget' ) ) . '">' . esc_html__( 'Fixed widget', 'q2w3-fixed-widget' ) . '</label>' . PHP_EOL;

		echo '</p>' . PHP_EOL;
	}

	/**
	 * Save widget options
	 *
	 * @param array $instance Widget instance.
	 * @param array $new_instance old widget properties.
	 * @param array $old_instance new widget properties.
	 *
	 * @return array
	 */
	public static function update_widget_option( $instance, $new_instance, $old_instance ) {
		if ( isset( $new_instance['q2w3_fixed_widget'] ) && $new_instance['q2w3_fixed_widget'] ) {
			$instance['q2w3_fixed_widget'] = 1;
		} else {
			$instance['q2w3_fixed_widget'] = false;
		}

		return $instance;
	}

	/**
	 * Load Fixed Widget settings page
	 */
	public static function admin_menu() {
		remove_action( 'admin_menu', array( 'q2w3_fixed_widget', 'admin_menu' ) ); // Remove free version plugin

		self::$settings_page_hook = add_submenu_page( 'themes.php', esc_html__( 'Fixed Widget Options', 'q2w3-fixed-widget' ), esc_html__( 'Fixed Widget Options', 'q2w3-fixed-widget' ), 'activate_plugins', self::ID, array( __CLASS__, 'settings_page' ) );
	}

	/**
	 * Return default settings values
	 *
	 * @return array
	 */
	protected static function defaults() {
		$d['use_sticky_position'] = false;
		$d['margin-top']          = 0;
		$d['margin-bottom']       = 0;
		$d['stop_elements_selectors'] = '';
		$d['screen-max-width']    = 0;
		$d['screen-max-height']   = 0;
		$d['fix-widget-id']       = 'yes';
		$d['logged_in_req']       = false;

		return $d;
	}

	/**
	 * Load Fixed Widget settings
	 *
	 * @return array
	 */
	protected static function load_options() {
		$options     = get_option( self::ID );
		$options_old = get_option( 'q2w3_fixed_widget' );

		return array_merge( self::defaults(), (array) $options_old, (array) $options );
	}

	/**
	 * Register Fixed Widget settings
	 */
	public static function register_settings() {
		register_setting( self::ID, self::ID, array( __CLASS__, 'save_options_filter' ) );
	}

	/**
	 * Callback to sanitize options
	 *
	 * @param array $input options.
	 *
	 * @return mixed
	 */
	public static function save_options_filter( $input ) {
		// Sanitize user input
		$input['margin-top']        = (int) $input['margin-top'];
		$input['margin-bottom']     = (int) $input['margin-bottom'];
		$input['screen-max-width']  = (int) $input['screen-max-width'];
		$input['screen-max-height'] = (int) $input['screen-max-height'];
		$input['custom-ids']        = trim( wp_strip_all_tags( $input['custom-ids'] ) );
		$input['stop_elements_selectors'] = trim( wp_strip_all_tags( $input['stop_elements_selectors'] ) );

		if ( ! isset( $input['fix-widget-id'] ) ) {
			$input['fix-widget-id'] = false;
		}

		if ( ! isset( $input['logged_in_req'] ) ) {
			$input['logged_in_req'] = false;
		}

		if ( ! isset( $input['use_sticky_position'] ) ) {
			$input['use_sticky_position'] = false;
		}

		return $input;
	}

	/**
	 * Load JavaScript on the settings page
	 *
	 * @param string $hook settings page hook.
	 */
	public static function settings_page_js( $hook ) {
		if ( self::$settings_page_hook !== $hook ) {
			return;
		}

		wp_enqueue_script( 'postbox' );
	}

	/**
	 * Render content of the settings page
	 */
	public static function settings_page() {
		$screen = get_current_screen();

		add_meta_box( self::ID . '-general', esc_html__( 'General Options', 'q2w3-fixed-widget' ), array( __CLASS__, 'settings_page_general_box' ), $screen, 'normal' );
		add_meta_box( self::ID . '-stop_element', esc_html__( 'Stop Elements', 'q2w3-fixed-widget' ), array( __CLASS__, 'settings_page_stop_element' ), $screen, 'normal' );
		add_meta_box( self::ID . '-custom-ids', esc_html__( 'Custom Fixed Elements', 'q2w3-fixed-widget' ), array( __CLASS__, 'settings_page_custom_ids_box' ), $screen, 'normal' );
		add_meta_box( self::ID . '-recommend', esc_html__( 'Recommended Integration', 'q2w3-fixed-widget' ), array( __CLASS__, 'settings_page_recommend_box' ), $screen, 'side', 'high' );
		add_meta_box( self::ID . '-help', esc_html__( 'Documentation and Support', 'q2w3-fixed-widget' ), array( __CLASS__, 'settings_page_help_box' ), $screen, 'side' );

		$options = self::load_options();

		echo '<div class="wrap"><div id="icon-themes" class="icon32"><br /></div><h2>' . esc_html__( 'Fixed Widget Options', 'q2w3-fixed-widget' ) . '</h2>' . PHP_EOL;

		if ( isset( $_GET['settings-updated'] ) && $_GET['settings-updated'] == 'true' ) {
			echo '<div id="message" class="updated"><p>' . esc_html__( 'Settings saved.', 'q2w3-fixed-widget' ) . '</p></div>' . PHP_EOL;
		}

		echo '<form method="post" action="options.php">' . PHP_EOL;

		settings_fields( self::ID );

		wp_nonce_field( 'meta-box-order', 'meta-box-order-nonce', false );
		wp_nonce_field( 'closedpostboxes', 'closedpostboxesnonce', false );

		echo '<div id="poststuff" class="metabox-holder has-right-sidebar">' . PHP_EOL;
		echo '<div class="inner-sidebar" id="side-info-column">' . PHP_EOL;

		do_meta_boxes( $screen, 'side', $options );

		echo '</div>' . PHP_EOL;
		echo '<div id="post-body-content">' . PHP_EOL;

		do_meta_boxes( $screen, 'normal', $options );

		echo '</div>' . PHP_EOL;
		echo '<p><em>' . esc_html__( ' Note for users of caching plugins. Please, don’t forget to clear the cache after changing options.', 'q2w3-fixed-widget' ) . '</em></p>' . PHP_EOL;

		echo '<p class="submit"><input type="submit" class="button-primary" value="' . esc_html__( 'Save Changes', 'q2w3-fixed-widget' ) . '" /></p>' . PHP_EOL;
		echo '</div><!-- #poststuff -->' . PHP_EOL;
		echo '</form>' . PHP_EOL;
		echo '<script>window.addEventListener("load", function(){ postboxes.add_postbox_toggles(pagenow); });</script>' . PHP_EOL;
		echo '</div><!-- .wrap -->' . PHP_EOL;
	}

	/**
	 * Render General settings
	 *
	 * @param array $options plugin settings.
	 */
	public static function settings_page_general_box( $options ) {
		echo '<p>
			<span style="display: inline-block; width: 150px;">' . esc_html__( 'Test new version', 'q2w3-fixed-widget' ) . '</span>
			<input type="checkbox" name="' . esc_attr( self::ID ) . '[use_sticky_position]" value="yes" ' . checked( 'yes', $options['use_sticky_position'], false ) . ' /> </p>' . PHP_EOL;
		echo '<p style="font-weight: bold;">';
		esc_html_e( 'Use our completely updated script which takes care of common issues and a bad Web Vitals score caused by layout shifts. This version is rolled out to all users in the near future.', 'q2w3-fixed-widget' );
		echo '<br/>';
		printf(
			wp_kses(
				// translators: %1$s is an opening a tag, %2ds is a closing one
				__( 'If you discover any issues then please report them %1$shere%2$s', 'q2w3-fixed-widget' ),
				array(
					'a' => array(
						'rel' => array(),
						'target' => array(),
					),
				)
			),
			'<a href="https://wordpress.org/support/plugin/q2w3-fixed-widget/#new-post" rel="noopener noreferrer" target="_blank">',
			'</a>'
		);
		echo '</p>';
		echo '<p><span style="display: inline-block; width: 150px;">' . esc_html__( 'Minimum Screen Width', 'q2w3-fixed-widget' ) . '</span><input type="text" name="' . esc_attr( self::ID ) . '[screen-max-width]" value="' . esc_attr( $options['screen-max-width'] ) . '" style="width: 50px; text-align: center;" />&nbsp;' . esc_html__( 'px', 'q2w3-fixed-widget' ) . ' / ' . esc_html__( 'Disable the plugin on small devices. When the browser screen width is less than the specified value, Fixed Widget will not make any elements sticky.', 'q2w3-fixed-widget' ) . '</p>' . PHP_EOL;
		echo '<p><span style="display: inline-block; width: 150px;">' . esc_html__( 'Minimum Screen Height', 'q2w3-fixed-widget' ) . '</span><input type="text" name="' . esc_attr( self::ID ) . '[screen-max-height]" value="' . esc_attr( $options['screen-max-height'] ) . '" style="width: 50px; text-align: center;" />&nbsp;' . esc_html__( 'px', 'q2w3-fixed-widget' ) . ' / ' . esc_html__( ' Works like the Minimum Width option.', 'q2w3-fixed-widget' ) . '</p>' . PHP_EOL;
	}

	/**
	 * Render Custom ID setting
	 *
	 * @param array $options plugin settings.
	 */
	public static function settings_page_custom_ids_box( $options ) {
		$custom_ids = isset( $options['custom-ids'] ) ? $options['custom-ids'] : '';
		echo '<p><span >' . esc_html__( 'Add HTML element selectors that should be fixed.', 'q2w3-fixed-widget' ) . ' ' . esc_html__( 'Accepts IDs, Class, and Type selectors.', 'q2w3-fixed-widget' ) . ' ' . esc_html__( 'One entry per line.', 'q2w3-fixed-widget' ) . '</span><br/><br/><textarea name="' . esc_attr( self::ID ) . '[custom-ids]" style="width: 320px; height: 120px;" placeholder="' .
			 "#main-navigation\n.custom-fixed-element"
			 .'">' . esc_html( $custom_ids ) . '</textarea>' . PHP_EOL;
	}

	/**
	 * Render Stop Element settings
	 *
	 * @param array $options plugin settings.
	 */
	public static function settings_page_stop_element( $options ) {
		$stop_selectors =
			isset($options['stop-id']) && $options['stop-id'] != '' && (!isset($options['stop_elements_selectors']) || $options['stop_elements_selectors'] == '')
				? '#' . $options['stop-id'] : $options['stop_elements_selectors'];

		echo '<p><span style="display: inline-block; width: 150px;">' . esc_html__( 'Margin Top', 'q2w3-fixed-widget' ) . '</span><input type="text" name="' . esc_attr( self::ID ) . '[margin-top]" value="' . esc_attr( $options['margin-top'] ) . '" style="width: 50px; text-align: center;" />&nbsp;' . esc_html__( 'px', 'q2w3-fixed-widget' ) . ' / ' . esc_html__( 'The distance fixed elements will keep from the top of the window.', 'q2w3-fixed-widget' ) . '</p>' . PHP_EOL;
		echo '<p><span style="display: inline-block; width: 150px;">' . esc_html__( 'Margin Bottom', 'q2w3-fixed-widget' ) . '</span><input type="text" name="' . esc_attr( self::ID ) . '[margin-bottom]" value="' . esc_attr( $options['margin-bottom'] ) . '" style="width: 50px; text-align: center;" />&nbsp;' . esc_html__( 'px', 'q2w3-fixed-widget' ) . ' / ' . esc_html__( 'The distance fixed elements will keep from the bottom of the window.', 'q2w3-fixed-widget' ) . '</p>' . PHP_EOL;
		echo '<div style="display:flex"><p><span style="display: inline-block; width: 150px;">' . esc_html__( 'Stop Elements', 'q2w3-fixed-widget' ) . '</span></p><textarea name="' . esc_attr( self::ID ) . '[stop_elements_selectors]" style="width: 150px;" placeholder="'. "#footer\nfooter" .'">' . esc_html( $stop_selectors ) . '</textarea> <div style="padding:5px">' . esc_html__( 'The stop elements will push sticky elements up as soon as they reach them while scrolling.', 'q2w3-fixed-widget' )
			 . '<br/>' . esc_html__( 'Accepts IDs, Class, and Type selectors.', 'q2w3-fixed-widget' ) . ' ' . esc_html__( 'One entry per line.', 'q2w3-fixed-widget' ) . '</div></div>' . PHP_EOL;
	}

	/**
	 * Render Recommendation box.
	 */
	public static function settings_page_recommend_box() {
		echo '<p>';
		echo '<a href="https://wpadvancedads.com/#utm_source=fixed-widget&utm_medium=link&utm_campaign=settings" target="_blank"><b>Advanced Ads</b></a> ';
		echo esc_html__( 'provides many features to manage and optimize your ads and to boost your conversions. It works perfectly with the Fixed Widget plugin.', 'q2w3-fixed-widget' );
		echo '</p>';
		echo '<div class="review">';
		echo '<h5>"Perfect plugin"</h5>';
		echo '<p class="content">"The plugin contains everything I need for the ads management and publishing. Fair price, stable and functional."</p>';
		echo '<p class="subline">from David H. on wordpress.org</p>';
		echo '</div>';
		echo '' . PHP_EOL;

		if ( ! defined( 'ADVADS_VERSION' ) ) {
			// check whether is's installed
			$plugins = get_plugins();
			if ( isset( $plugins['advanced-ads/advanced-ads.php'] ) ) {
				// advanced-ads is deactivated
				$link = '<a class="button-var1" href="' . wp_nonce_url( 'plugins.php?action=activate&amp;plugin=advanced-ads/advanced-ads.php&amp', 'activate-plugin_advanced-ads/advanced-ads.php' ) . '">' . esc_html__( 'Activate Now', 'q2w3-fixed-widget' ) . '</a>';
			} else {
				// advanced-ads is not installed
				$link = '<a class="button-var1" href="' . wp_nonce_url( self_admin_url( 'update.php?action=install-plugin&plugin=' . 'advanced-ads' ), 'install-plugin_' . 'advanced-ads' ) . '">' . esc_html__( 'Install Now', 'q2w3-fixed-widget' ) . '</a>';
			}
			echo '<div style="margin-top:20px; text-align:center;">' . $link . '</div>';
		}
	}

	/**
	 * Render Documentation box.
	 */
	public static function settings_page_help_box() {
		echo '<ul>';
		echo '<li><a href="https://wpadvancedads.com/fixed-widget-wordpress/?utm_source=fixed-widget&utm_medium=link&utm_campaign=BackendSidebar" target="_blank">FAQ</a></li>';
		echo '<li><a href="https://wordpress.org/support/plugin/q2w3-fixed-widget/" target="_blank">Support</a></li>';
		echo '</ul>';
		echo '' . PHP_EOL;
	}

	/**
	 * Add relevant links to the plugin page
	 *
	 * @param array $links existing links.
	 *
	 * @return array
	 */
	public static function add_plugin_links( $links ) {
		if ( ! is_array( $links ) ) {
			return $links;
		}
		// add link to the settings
		$extend_link = '<a href="' . get_site_url() . '/wp-admin/themes.php?page=' . self::ID . '">' . esc_html__( 'Settings', 'q2w3-fixed-widget' ) . '</a>';
		array_unshift( $links, $extend_link );
		return $links;
	}

	/**
	 * Prepare sidebar output in the frontend
	 */
	public static function registered_sidebars_filter() {
		global $wp_registered_sidebars;

		if ( ! is_array( $wp_registered_sidebars ) ) {
			return;
		}

		foreach ( $wp_registered_sidebars as $id => $sidebar ) {
			if ( strpos( $sidebar['before_widget'], 'id="%1$s"' ) === false && strpos( $sidebar['before_widget'], 'id=\'%1$s\'' ) === false ) {
				if ( $sidebar['before_widget'] == '' || $sidebar['before_widget'] == ' ' ) {
					$wp_registered_sidebars[ $id ]['before_widget'] = '<div id="%1$s">';

					$wp_registered_sidebars[ $id ]['after_widget'] = '</div>';
				} elseif ( strpos( $sidebar['before_widget'], 'id=' ) === false ) {
					$tag_end_pos = strpos( $sidebar['before_widget'], '>' );

					if ( $tag_end_pos !== false ) {
						$wp_registered_sidebars[ $id ]['before_widget'] = substr_replace( $sidebar['before_widget'], ' id="%1$s"', $tag_end_pos, 0 );
					}
				} else {
					$str_array = explode( ' ', $sidebar['before_widget'] );

					if ( is_array( $str_array ) ) {
						foreach ( $str_array as $str_part_id => $str_part ) {
							if ( strpos( $str_part, 'id="' ) !== false ) {
								$p1 = strpos( $str_part, 'id="' );

								$p2 = strpos( $str_part, '"', $p1 + 4 );

								$str_array[ $str_part_id ] = substr_replace( $str_part, 'id="%1$s"', $p1, $p2 + 1 );
							} elseif ( strpos( $str_part, 'id=\'' ) !== false ) {
								$p1 = strpos( $str_part, 'id=\'' );

								$p2 = strpos( $str_part, "'", $p1 + 4 );

								$str_array[ $str_part_id ] = substr_replace( $str_part, 'id=\'%1$s\'', $p1, $p2 );
							}
						}

						$wp_registered_sidebars[ $id ]['before_widget'] = implode( ' ', $str_array );
					}
				}
			} // if id is wrong
		} // foreach
	} // registered_sidebars_filter()

	/**
	 * Check if the current page is on AMP
	 * needs to run using the `wp` hook or later in order to get access to WP_Query
	 *
	 * @return bool
	 */
	private static function is_amp() {
		// bail if the site uses the AMP technology in version 2.0 and higher of https://wordpress.org/plugins/amp/
		// or https://wordpress.org/plugins/ads-for-wp/
		return ( function_exists( 'amp_is_request' ) && amp_is_request() )
			 || ( function_exists( 'ampforwp_is_amp_endpoint' ) && ampforwp_is_amp_endpoint() );
	}

} // q2w3_fixed_widget_pro class

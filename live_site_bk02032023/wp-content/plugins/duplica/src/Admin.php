<?php
/**
 * All admin facing functions
 */
namespace Codexpert\Duplica;
use Codexpert\Plugin\Base;
use Codexpert\Plugin\Metabox;

/**
 * if accessed directly, exit.
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * @package Plugin
 * @subpackage Admin
 * @author Codexpert <hi@codexpert.io>
 */
class Admin extends Base {

	public $plugin;

	/**
	 * Constructor function
	 */
	public function __construct( $plugin ) {
		$this->plugin	= $plugin;
		$this->slug		= $this->plugin['TextDomain'];
		$this->name		= $this->plugin['Name'];
		$this->server	= $this->plugin['server'];
		$this->version	= $this->plugin['Version'];
	}

	/**
	 * Internationalization
	 */
	public function i18n() {
		load_plugin_textdomain( 'duplica', false, DUPLICA_DIR . '/languages/' );
	}

	/**
	 * Installer. Runs once when the plugin in activated.
	 *
	 * @since 1.0
	 */
	public function install() {

		if( ! get_option( 'duplica_version' ) ){
			update_option( 'duplica_version', $this->version );
		}
		
		if( ! get_option( 'duplica_install_time' ) ){
			update_option( 'duplica_install_time', time() );
		}
	}
	
	/**
	 * Enqueue JavaScripts and stylesheets
	 */
	public function enqueue_scripts() {
		$min = defined( 'DUPLICA_DEBUG' ) && DUPLICA_DEBUG ? '' : '.min';
		
		wp_enqueue_style( $this->slug, plugins_url( "/assets/css/admin{$min}.css", DUPLICA ), '', $this->version, 'all' );

		wp_enqueue_script( $this->slug, plugins_url( "/assets/js/admin{$min}.js", DUPLICA ), [ 'jquery' ], $this->version, true );

		$localized = [
			'ajaxurl'	=> admin_url( 'admin-ajax.php' ),
			'_wpnonce'	=> wp_create_nonce(),
		];

		wp_localize_script( $this->slug, 'DUPLICA', apply_filters( "{$this->slug}-localized", $localized ) );
	}

	public function post_duplicate_menu( $actions, $post ) {
		if( ! array_key_exists( $post->post_type, ( $enabled_items = duplica_enabled_post_types() ) ) ) {
			return $actions;
		}

		$duplica = '<div class="duplica-duplicate">';
		$duplica .= "<a class='ab-item' href='#{$post->post_type}'>Duplicate</a>";

		if( Helper::get_option( 'duplica_basic', 'allow_convert', false ) && count( $enabled_items ) > 1 ) { // consider the current cpt
			$duplica .= '<ul>';
			foreach ( $enabled_items as $type => $label ) {
				if ( false !== $post->post_type ) {
					$duplica .= "<li><a class='ab-item' href='#{$type}'>As {$label}</a></li>";
				}
			}
			$duplica .= '</ul>';
		}

		$duplica .= '</div>';

		$actions['duplica'] = $duplica;

		return $actions;
	}

	public function user_duplicate_menu( $actions, $user ) {
		$duplicate_url = wp_nonce_url( add_query_arg( [ 'action' => 'duplica-duplicate-user', 'user' => $user->ID ], admin_url( 'admin-ajax.php' ) ) );
		$actions['duplicate'] = '<a class="duplicate" href="' . $duplicate_url . '">' . __( 'Duplicate' ) . '</a>';

		return $actions;
	}

	public function action_links( $links ) {
		$this->admin_url = admin_url( 'admin.php' );

		$new_links = [
			'settings'	=> sprintf( '<a href="%1$s">' . __( 'Settings', 'duplica' ) . '</a>', add_query_arg( 'page', $this->slug, $this->admin_url ) )
		];
		
		return array_merge( $new_links, $links );
	}

	public function plugin_row_meta( $plugin_meta, $plugin_file ) {
		
		if ( $this->plugin['basename'] === $plugin_file ) {
			$plugin_meta['help'] = '<a href="https://help.codexpert.io/" target="_blank" class="cx-help">' . __( 'Help', 'duplica' ) . '</a>';
		}

		return $plugin_meta;
	}

	public function footer_text( $text ) {
		if( get_current_screen()->parent_base != $this->slug ) return $text;

		return sprintf( __( 'If you like <strong>%1$s</strong>, please <a href="%2$s" target="_blank">leave us a %3$s rating</a> on WordPress.org! It\'d motivate and inspire us to make the plugin even better!', 'duplica' ), $this->name, "https://wordpress.org/support/plugin/{$this->slug}/reviews/?filter=5#new-post", '⭐⭐⭐⭐⭐' );
	}

	public function modal() {
		echo '
		<div id="duplica-modal" style="display: none">
			<img id="duplica-modal-loader" src="'. esc_attr( DUPLICA_ASSET . '/img/loader.gif' ) .'" />
		</div>';
	}
}
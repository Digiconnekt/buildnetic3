<?php
/**
 * All public facing functions
 */
namespace Codexpert\Duplica;
use Codexpert\Plugin\Base;

/**
 * if accessed directly, exit.
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * @package Plugin
 * @subpackage Front
 * @author Codexpert <hi@codexpert.io>
 */
class Front extends Base {

	public $plugin;

	/**
	 * Constructor function
	 */
	public function __construct( $plugin ) {
		$this->plugin	= $plugin;
		$this->slug		= $this->plugin['TextDomain'];
		$this->name		= $this->plugin['Name'];
		$this->version	= $this->plugin['Version'];
	}

	public function add_admin_bar( $admin_bar ) {
		if( ! current_user_can( 'manage_options' ) ) return;

		$enabled_items = duplica_enabled_post_types();

		$duplicate_as = false;
		foreach ( $enabled_items as $type => $label ) {
			if( array_key_exists( $type, $enabled_items ) && is_singular( $type ) ) {
				$duplicate_as = $type;
				$admin_bar->add_menu( [
					'id'    	=> "duplica-duplicate-{$type}",
					'title' 	=> sprintf( __( 'Duplicate %s', 'duplica' ), $label ),
					'href'  	=> "#{$type}",
					'meta'		=> [
						'class'	=> 'menupop duplica-duplicate'
					]
				] );
			}
		}

		if( Helper::get_option( 'duplica_basic', 'allow_convert', false ) ) {
			foreach ( $enabled_items as $type => $label ) {
				if ( false !== $duplicate_as ) {
					$admin_bar->add_menu( [
						'id'    	=> "duplica-as-{$type}",
						'parent'	=> "duplica-duplicate-{$duplicate_as}",
						'title' 	=> sprintf( __( 'As %s', 'duplica' ), $label ),
						'href'  	=> "#{$type}",
						'meta'		=> [
							'class'	=> 'duplica-duplicate'
						]
					] );
				}
			}
		}
	}
	
	/**
	 * Enqueue JavaScripts and stylesheets
	 */
	public function enqueue_scripts() {
		$min = defined( 'DUPLICA_DEBUG' ) && DUPLICA_DEBUG ? '' : '.min';

		wp_enqueue_style( $this->slug, plugins_url( "/assets/css/front{$min}.css", DUPLICA ), '', $this->version, 'all' );

		wp_enqueue_script( $this->slug, plugins_url( "/assets/js/front{$min}.js", DUPLICA ), [ 'jquery' ], $this->version, true );
		
		$localized = [
			'ajaxurl'	=> admin_url( 'admin-ajax.php' ),
			'_wpnonce'	=> wp_create_nonce(),
		];

		if( is_singular() ) {
			global $post;
			$localized['post_id'] = $post->ID;
		}

		wp_localize_script( $this->slug, 'DUPLICA', apply_filters( "{$this->slug}-localized", $localized ) );
	}

	public function modal() {
		echo '
		<div id="duplica-modal" style="display: none">
			<img id="duplica-modal-loader" src="'. esc_attr( DUPLICA_ASSET . '/img/loader.gif' ) .'" />
		</div>';
	}
}
<?php
/**
 * All settings related functions
 */
namespace Codexpert\Duplica;
use Codexpert\Plugin\Base;
use Codexpert\Plugin\Settings as Settings_API;

/**
 * @package Plugin
 * @subpackage Settings
 * @author Codexpert <hi@codexpert.io>
 */
class Settings extends Base {

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
	
	public function init_menu() {
		
		$settings = [
			'id'            => $this->slug,
			'label'         => $this->name,
			'title'         => "{$this->name} v{$this->version}",
			'header'        => $this->name,
			'icon'			=> 'dashicons-plus-alt',
			'position'   	=> 75,
			// 'parent'		=> 'tools.php',
			'sections'      => [
				'duplica_basic'	=> [
					'id'        => 'duplica_basic',
					'label'     => __( 'Basic Settings', 'duplica' ),
					'icon'      => 'dashicons-admin-tools',
					'sticky'	=> false,
					'fields'    => [
						'enabled_items' => [
							'id'        => 'enabled_items',
							'label'     => __( 'Enable Duplica for', 'duplica' ),
							'type'      => 'select',
							'multiple'	=> true,
							'desc'      => __( 'Select post types you want to be able to duplicate.', 'duplica' ),
							'options'   => duplica_post_types(),
							'chosen'	=> true,
						],
						'allow_convert' => [
							'id'        => 'allow_convert',
							'label'     => __( 'Allow Convert', 'duplica' ),
							'type'      => 'switch',
							'desc'      => __( 'Allow converting to other post types?', 'duplica' ),
						],
						'post_status' => [
							'id'        => 'post_status',
							'label'     => __( 'Post Status', 'duplica' ),
							'type'      => 'select',
							'options'	=> duplica_statuses(),
							'desc'      => __( 'What will be the status of newly created posts, pages or custom posts?', 'duplica' ),
							'chosen'	=> true,
						],
						'redirection' => [
							'id'        => 'redirection',
							'label'     => __( 'Redirection', 'duplica' ),
							'type'      => 'select',
							'options'	=> duplica_redirections(),
							'desc'      => __( 'Where should it take after a post is duplicated?', 'duplica' ),
							'chosen'	=> true,
						],
					]
				],
				'duplica_help' => [
					'id'        => 'duplica_help',
					'label'     => __( 'Help', 'duplica' ),
					'icon'      => 'dashicons-sos',
					'template'  => DUPLICA_DIR . '/views/settings/help.php',
					'hide_form'	=> true,
				],
			],
		];

		new Settings_API( $settings );
	}
}
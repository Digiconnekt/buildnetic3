<?php
/**
 * WARNING: This file is part of the Projects plugin. DO NOT edit
 * this file under any circumstances.
 */

/**
 * Prevent direct access to this file
 */
defined( 'ABSPATH' ) or die();

/**
 * The bootstraper class for the plugin
 *
 * @package  Projects
 * @author   Binh Pham Thanh <binhpham@linethemes.com>
 */
final class nProjects extends nProjects_Base
{
	const VERSION       = '1.0.0';
	const SLUG          = 'nprojects';
	const TYPE_NAME     = 'nproject';
	const TYPE_CATEGORY = 'nproject-category';
	const TYPE_TAG      = 'nproject-tag';

	/**
	 * Class construction
	 */
	protected function __construct() {
		/**
		 * Import the plugin's translation files
		 */
		$this->import_translation_files();

		/**
		 * Register custom post type
		 */
		add_action( 'init', array( $this, 'register_post_types' ) );

		/**
		 * Register plugin's assets
		 */
		add_action( 'init', array( $this, 'register_assets' ) );
	}

	/**
	 * Make plugin available for translation.
	 *
	 * @return  void
	 */
	private function import_translation_files() {
		$domain = 'nprojects';
		$locale = apply_filters( 'plugin_locale', get_locale(), $domain );
		$path   = basename( __DIR__ ) . '/languages/';
		
		/**
		 * Load a .mo file into the text domain $domain.
		 */
		load_textdomain( $domain, trailingslashit( WP_LANG_DIR ) . $domain . '/' . $domain . '-' . $locale . '.mo' );

		/**
		 * Load a plugin's translated strings.
		 */
		load_plugin_textdomain( $domain, false, $path );
	}

	/**
	 * Register the Projects post type that will
	 * use to store the templates
	 * 
	 * @return  void
	 */
	public function register_post_types() {
		register_post_type( self::TYPE_NAME, array(
			'labels'             => array(
				'name'               => __( 'Projects', 'nprojects' ),
				'singular_name'      => __( 'Project', 'nprojects' ),
				'add_new'            => __( 'Add New', 'nprojects' ),
				'add_new_item'       => __( 'Add New Project', 'nprojects' ),
				'edit'               => __( 'Edit', 'nprojects' ),
				'edit_item'          => __( 'Edit Project', 'nprojects' ),
				'new_item'           => __( 'New Project', 'nprojects' ),
				'all_items'          => __( 'All Projects', 'nprojects' ),
				'view'               => __( 'View Project', 'nprojects' ),
				'view_item'          => __( 'View Project', 'nprojects' ),
				'search_items'       => __( 'Search Projects', 'nprojects' ),
				'not_found'          => __( 'No Project Found', 'nprojects' ),
				'not_found_in_trash' => __( 'No Project Found In Trash', 'nprojects' ),
				'parent_item_colon'  => '' /* text for parent types */
			),
			'description'         => __( 'The project post type', 'nprojects' ),
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'publicly_queryable'  => true,
			'exclude_from_search' => false,
			'has_archive'         => true,
			'show_in_nav_menus'   => true,
			'show_in_rest'        => true,
			'menu_icon'           => 'dashicons-media-interactive',
			'hierarchical'        => false,
			'query_var'           => true,
			'supports'            => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
			'rewrite' => array(
				'slug' => get_option( '_nproject_permalink_slug', 'nproject' ),
				'with_front' => false
			),
			'capabilities'        => array(
				'edit_post'         => 'edit_pages',
				'read_post'         => 'edit_pages',
				'delete_post'       => 'edit_pages',
				'edit_posts'        => 'edit_pages',
				'edit_others_posts' => 'edit_pages',
				'publish_posts'     => 'edit_pages',
				'read_private_posts'=> 'edit_pages',

				'read'                  => 'edit_pages',
				'delete_posts'          => 'edit_pages',
				'delete_private_posts'  => 'edit_pages',
				'delete_published_posts'=> 'edit_pages',
				'delete_others_posts'   => 'edit_pages',
				'edit_private_posts'    => 'edit_pages',
				'edit_published_posts'  => 'edit_pages',
			)
		) );

		/**
		 * Register category taxonomy
		 */
		register_taxonomy( self::TYPE_CATEGORY, self::TYPE_NAME, array(
			'labels'            => array(
				'name'              => _x( 'Project Categories', 'taxonomy general name', 'nprojects' ),
				'singular_name'     => _x( 'Project Category', 'taxonomy singular name', 'nprojects' ),
				'search_items'      => __( 'Search Categories', 'nprojects' ),
				'all_items'         => __( 'All Categories', 'nprojects' ),
				'parent_item'       => __( 'Parent Category', 'nprojects' ),
				'parent_item_colon' => __( 'Parent Category:', 'nprojects' ),
				'edit_item'         => __( 'Edit Category', 'nprojects' ),
				'update_item'       => __( 'Update Category', 'nprojects' ),
				'add_new_item'      => __( 'Add New Category', 'nprojects' ),
				'new_item_name'     => __( 'New Category Name', 'nprojects' ),
				'menu_name'         => __( 'Categories', 'nprojects' )
			),
			'rewrite' => array(
				'slug' => get_option( '_nproject_permalink_category', 'nproject-category' ),
				'with_front' => false
			),
			'public'            => true,
			'hierarchical'      => true,
			'show_ui'           => true,
			'show_admin_column' => true,
			'query_var'         => true,
			'show_in_nav_menus' => true,
			'show_in_rest'      => true,
			'show_tagcloud'     => false
		) );

		/**
		 * Register category taxonomy
		 */
		register_taxonomy( self::TYPE_TAG, self::TYPE_NAME, array(
			'labels'            => array(
				'name'              => _x( 'Project Tags', 'taxonomy general name', 'nprojects' ),
				'singular_name'     => _x( 'Project Tag', 'taxonomy singular name', 'nprojects' ),
				'search_items'      => __( 'Search Tags', 'nprojects' ),
				'all_items'         => __( 'All Tags', 'nprojects' ),
				'parent_item'       => __( 'Parent Tag', 'nprojects' ),
				'parent_item_colon' => __( 'Parent Tag:', 'nprojects' ),
				'edit_item'         => __( 'Edit Tag', 'nprojects' ),
				'update_item'       => __( 'Update Tag', 'nprojects' ),
				'add_new_item'      => __( 'Add New Tag', 'nprojects' ),
				'new_item_name'     => __( 'New Tag Name', 'nprojects' ),
				'menu_name'         => __( 'Tags', 'nprojects' )
			),
			'rewrite' => array(
				'slug' => get_option( '_nproject_permalink_tag', 'nproject-tag' ),
				'with_front' => false
			),
			'public'            => true,
			'hierarchical'      => false,
			'show_ui'           => true,
			'show_admin_column' => true,
			'query_var'         => true,
			'show_in_nav_menus' => true,
			'show_in_rest'      => true,
			'show_tagcloud'     => true
		) );

		flush_rewrite_rules();
	}

	/**
	 * Register all assets files for the plugin
	 * 
	 * @return  void
	 */
	public function register_assets() {
		wp_register_style( 'projects-admin', plugin_dir_url( __DIR__ ) . 'assets/css/admin.css', array(), self::VERSION, 'all' );
		wp_register_script( 'projects-admin', plugin_dir_url( __DIR__ ) . 'assets/js/admin.js', array( 'jquery' ), self::VERSION, 'all' );
	}
}

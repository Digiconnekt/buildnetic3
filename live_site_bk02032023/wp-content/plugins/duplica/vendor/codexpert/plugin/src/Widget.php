<?php
namespace Codexpert\Plugin;

/**
 * if accessed directly, exit.
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * @package Plugin
 * @subpackage Widget
 * @author Codexpert <hi@codexpert.io>
 */
class Widget extends Base {

	public $slug;
	
	public $name;
	
	public $server;
	
	public static $_instance;
	
	public function __construct( $plugin ) {
		$this->plugin 	= $plugin;
		$this->server 	= $this->plugin['server'];
		$this->slug 	= $this->plugin['TextDomain'];
		$this->name 	= $this->plugin['Name'];
		
		$this->hooks();
	}

	public function hooks() {
		$this->action( 'wp_dashboard_setup', 'dashboard_widget', 99 );
		$this->action( 'wp_ajax_fetch-cx-blog', 'fetch_blog_posts', 99 );
	}
	
	/**
	 * Adds a widget in /wp-admin/index.php page
	 *
	 * @since 1.0
	 */
	public function dashboard_widget() {
		wp_add_dashboard_widget( 'cx-overview', __( 'WordPress Blogs & Tutorials', 'cx-plugin' ), [ $this, 'callback_dashboard_widget' ] );

		// Move our widget to top.
		global $wp_meta_boxes;

		$dashboard = $wp_meta_boxes['dashboard']['normal']['core'];
		$ours = [
			'cx-overview' => $dashboard['cx-overview'],
		];

		$wp_meta_boxes['dashboard']['normal']['core'] = array_merge( $ours, $dashboard );
	}

	/**
	 * Call back for dashboard widget in /wp-admin/
	 *
	 * @see dashboard_widget()
	 *
	 * @since 1.0
	 */
	public function callback_dashboard_widget() {
		?>
		<script type="text/javascript">
			jQuery(function($){ $.get( ajaxurl, { action : 'fetch-cx-blog' }); });
		</script>
		<?php
		$posts = get_option( 'codexpert-blog-json', [] );
		$utm = [ 'utm_source' => 'dashboard', 'utm_medium' => 'metabox', 'utm_campaign' => 'blog-post' ];
		
		if( is_array( $posts ) && count( $posts ) > 0 ) :
		
		$posts = array_slice( $posts, 0, 5 );

		echo '<ul id="cx-posts-wrapper">';
		
		foreach ( $posts as $post ) {

			$post_link = add_query_arg( $utm, $post['link'] );
			echo "
			<li>
				<a href='{$post_link}' target='_blank'><span class='cx-post-title'>{$post['title']['rendered']}</span></a>
				" . wpautop( wp_trim_words( $post['content']['rendered'], 10 ) ) . "
			</li>";
		}
		
		echo '</ul>';
		endif; // count( $posts ) > 0

		$_links = apply_filters( 'cx-overview_links', [
			'products'	=> [
				'url'		=> add_query_arg( $utm, 'https://codexpert.io/products/' ),
				'label'		=> __( 'Our Plugins', 'cx-plugin' ),
				'target'	=> '_blank',
			],
			'hire'	=> [
				'url'		=> add_query_arg( $utm, 'https://codexpert.io/blog/' ),
				'label'		=> __( 'Blog', 'cx-plugin' ),
				'target'	=> '_blank',
			],
		] );

		$footer_links = [];
		foreach ( $_links as $id => $link ) {
			$_has_icon = ( $link['target'] == '_blank' ) ? '<span class="screen-reader-text">' . __( '(opens in a new tab)', 'cx-plugin' ) . '</span> <span aria-hidden="true" class="dashicons dashicons-external"></span>' : '';

			$footer_links[] = "<a href='{$link['url']}' target='{$link['target']}'>{$link['label']}{$_has_icon}</a>";
		}

		echo '<p class="community-events-footer">' . implode( ' | ', $footer_links ) . '</p>';
	}

	public function fetch_blog_posts() {
		if( ! is_wp_error( $_posts_data = wp_remote_get( 'https://codexpert.io/wp-json/wp/v2/posts/' ) ) && is_array( $posts = json_decode( $_posts_data['body'], true ) ) && count( $posts ) > 0 ) {
		    update_option( 'codexpert-blog-json', $posts );
		}
	}
}
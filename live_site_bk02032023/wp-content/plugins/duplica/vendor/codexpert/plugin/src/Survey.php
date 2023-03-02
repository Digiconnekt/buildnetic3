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
 * @subpackage Survey
 * @author Codexpert <hi@codexpert.io>
 */
class Survey extends Base {
	
	public $slug;
	public $name;
	public $base_file;

	public $notice_heading;
	public $notice_message;
	public $notice_button_text;
	public $notice_delay = 2 * DAY_IN_SECONDS;

	public function __construct( $plugin ) {

		$this->plugin 	= $plugin;

		$this->server 	= $this->plugin['server'];
		$this->slug 	= $this->plugin['TextDomain'];
		$this->name = $this->plugin['Name'];
		$this->api_url = "{$this->server}/wp-json/codexpert-lead/v1.0/";
		
		$this->notice_heading = '<h3>' . sprintf( __( 'Thanks for using \'<strong>%s</strong>\'', 'codexpert' ), $this->name ) . '</h3>';
		$this->notice_message = '<p> ' . __( 'We want to know what type of sites use this plugin. Users\' satisfaction is our first priority and we\'re continuously working on it. This is why we need some information so that we can improve it even more.<br />Help us with your site URL and a few basic information. It doesn\'t include your password or any secret data. Would you like to help us?', 'codexpert' ) . '</p>';
		$this->notice_button_text = __( 'Okay. Don\'t bother me again!', 'codexpert' );

		self::hooks();
	}

	public function hooks(){
		$this->activate( 'activation' );
		$this->deactivate( 'deactivation' );
		$this->action( 'admin_enqueue_scripts', 'enqueue_scripts', 99 );
		$this->action( 'admin_notices', 'admin_notices' );
		$this->priv( "{$this->slug}_survey", 'survey' );
	}

	/**
	 * Supports HTML
	 */
	public function set_heading( $heading = null ) {
		$this->notice_heading = $heading;
	}

	public function get_heading() {
		return $this->notice_heading;
	}

	/**
	 * Supports HTML
	 */
	public function set_message( $message = null ) {
		$this->notice_message = $message;
	}

	public function get_message() {
		return $this->notice_message;
	}

	/**
	 * Does not support noHTML
	 */
	public function set_button_text( $button_text = null ) {
		$this->notice_button_text = $button_text;
	}

	public function get_button_text() {
		return $this->notice_button_text;
	}

	/**
	 * Set a delay for the notice
	 */
	public function set_delay( $delay ) {
		$this->notice_delay = $delay;
	}

	public function get_delay() {
		return $this->notice_delay;
	}

	/**
	 * Trigger when activates
	 *
	 */
	public function activation() {
		
		if( get_option( "{$this->slug}_survey_agreed" ) == 1 ) :
		
		$endpoint = $this->api_url . 'update-lead';

		$params = array(
			'item'			=> $this->slug,
			'siteurl'		=> get_option( 'siteurl' ),
			'is_active'		=> 1,
		);

		$endpoint = add_query_arg( $params, $endpoint );
		wp_remote_get( $endpoint );
		
		endif;
	}

	/**
	 * Trigger when deactivates
	 *
	 */
	public function deactivation() {
		if( get_option( "{$this->slug}_survey_agreed" ) == 1 ) :
		
		$endpoint = $this->api_url . 'update-lead';

		$params = array(
			'item'			=> $this->slug,
			'siteurl'		=> get_option( 'siteurl' ),
			'is_active'		=> 0,
		);

		$endpoint = add_query_arg( $params, $endpoint );
		wp_remote_get( $endpoint );
		
		endif;
	}

	public function enqueue_scripts() {
		wp_enqueue_style( 'codexpert-product-survey', plugins_url( 'assets/css/survey.css', __FILE__ ), [], $this->plugin['Version'] );
		wp_enqueue_script( 'codexpert-product-survey', plugins_url( 'assets/js/survey.js', __FILE__ ), [ 'jquery' ], $this->plugin['Version'], true );
	}

    /**
     * Show admin notices
     *
     */
    public function admin_notices() {
        if( get_option( "{$this->slug}_survey" ) != 1 && ( get_option( "{$this->slug}_install_time" ) < time() - $this->get_delay() ) ) :
        ?>
        <div id="<?php echo $this->slug; ?>-survey-notice" class="notice notice-success is-dismissible cx-survey cx-notice cx-shadow" data-slug="<?php echo $this->slug; ?>">

        	<img class="cx-survey-img" src="<?php echo plugins_url( 'assets/img/survey.png', __FILE__ ); ?>" />
            <div class="cx-survey-content">
                <?php echo $this->get_heading(); ?>
                <?php echo $this->get_message(); ?>
            </div>
            <p class="cx-survey-btn-wrapper">
                <button class="button button-primary button-hero cx-survey-btn" data-participate="1">
                	<?php echo $this->get_button_text(); ?>
                </button>
            </p>
        </div>
        <?php
        endif;
    }

	/**
	 * Gather user data
	 *
	 * @uses AJAX
	 */
	public function survey() {
		if( isset( $_POST['participate'] ) && $_POST['participate'] == 1 ) {
			$endpoint = $this->api_url . 'store-lead';

			$user_id = get_current_user_id();
			$userdata = get_userdata( $user_id );

			$all_plugins = get_plugins();
			
			$params = array(
				'init'					=> 1,
				'item'					=> $this->slug,
				'siteurl'				=> get_option( 'siteurl' ),
				'admin_email'			=> get_option( 'admin_email' ),
				'first_name'			=> $userdata->first_name,
				'last_name'				=> $userdata->last_name,
				'plugins_installed'		=> implode( ',', array_keys( $all_plugins ) ),
			);


			$endpoint = add_query_arg( $params, $endpoint );
			wp_remote_get( $endpoint );
			update_option( "{$this->slug}_survey_agreed", 1 );
		}

		update_option( "{$this->slug}_survey", 1 );
		wp_die();
	}
}
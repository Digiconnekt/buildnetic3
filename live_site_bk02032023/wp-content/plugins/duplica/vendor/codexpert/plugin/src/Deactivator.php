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
 * @subpackage Deactivator
 * @author Codexpert <hi@codexpert.io>
 */
class Deactivator extends Base {

	public $slug;
	
	public $name;
	
	public $server;
	
	public function __construct( $plugin ) {
		$this->plugin 	= $plugin;
		$this->server 	= $this->plugin['server'];
		$this->slug 	= $this->plugin['TextDomain'];
		$this->name 	= $this->plugin['Name'];
		
		self::hooks();
	}

	function hooks() {

		$this->action( 'admin_footer', 'deactivation_survey_modal', 99 );

		if( did_action( 'cx-plugin-deactivation' ) ) return;
		do_action( 'cx-plugin-deactivation' );

		$this->action( 'admin_enqueue_scripts', 'enqueue_scripts', 99 );
		$this->priv( 'cx-plugin-deactivation', 'send_deactivation_survey', 99 );
	}

	public function enqueue_scripts( $screen ) {
		if ( get_current_screen()->base != 'plugins' )return;

        wp_enqueue_style( "cx-plugin-deactivator", plugins_url( 'assets/css/deactivator.css', __FILE__ ), [], '' );
        wp_enqueue_script( "cx-plugin-deactivator", plugins_url( 'assets/js/deactivator.js', __FILE__ ), [ 'jquery' ], '', true );
    }

	public function deactivation_survey_modal()	{
		if ( get_current_screen()->base != 'plugins' ) return;
		?>
		<script type="text/javascript">
			jQuery(function($){
				$(document).on( 'click', 'tr[data-slug="<?php echo $this->slug; ?>"] .deactivate a', function(e){
					e.preventDefault()
					$('.cx-plugin-deactivation-survey-overlay').css('display', 'flex');
					$('.cx-plugin-dsm-skip-btn').prop('href', $(this).attr('href'));
					$('#cxd-plugin-name').val( "<?php echo $this->slug; ?>" );
				} )
			})
		</script>
		<?php

		if( did_action( 'cx-plugin-deactivation-modal' ) ) return;
		do_action( 'cx-plugin-deactivation-modal' );
		
		$user = wp_get_current_user();
		?>
		<div class="cx-plugin-deactivation-survey-overlay">
			<div class="cx-plugin-deactivation-survey-modal">
				<form method="post" class="cx-plugin-deactivation-survey-form">
					<input type="hidden" name="first_name" value="<?php echo $user->first_name ?>">
					<input type="hidden" name="last_name" value="<?php echo $user->last_name ?>">
					<input type="hidden" name="user_email" value="<?php echo $user->user_email ?>">
					<input type="hidden" name="plugin" value="" id="cxd-plugin-name">
					<input type="hidden" name="site_url" value="<?php echo site_url( '/' ) ?>">
					<input type="hidden" name="action" value="cx-plugin-deactivation">
					<div class="cx-plugin-dsm-header">
						<h3 class="cx-heading">
							<span class="cx-title"><?php _e( 'Sorry to see you go! ☹️ Would you mind telling us why are you deactivating so we can improve it? 🤔', 'codexpert' ) ?></span>
							<span class="cx-desc cx-consent-label"><?php _e( 'Data we collect', 'codexpert' ); ?></span>
						</h3>
						<p class="cx-desc cx-consent-text" style="display: none;"><?php _e( 'It includes your name, email, site URL and the input you give here.', 'codexpert' ); ?></p>
					</div>
					<div class="cx-plugin-dsm-body">
						<div class="cx-plugin-deactivation-reasons">
							<?php
							foreach ( $this->get_reasons() as $key => $label ) {
								echo "
								<div class='cx-plugin-deactivation-reason'>
									<label for='{$key}'>{$label}</label>
									<input type='checkbox' name='reason[]' value='{$key}' id='{$key}'>
								</div>
								";
							}
							?>
						</div>
						<div class="cx-plugin-dsm-reason-details">
							<textarea class="cx-plugin-dsm-reason-details-input" name="explanation" rows="5" placeholder="Please Explain"></textarea>
						</div>
					</div>
					<div class="cx-plugin-dsm-footer">
						<a href="" class="button cx-plugin-dsm-skip-btn"><?php _e( 'Skip & Deactivate', 'codexpert' ) ?></a>
						<div class="cx-plugin-dsm-submit">
							<button class="button cx-plugin-dsm-btn cx-plugin-dsm-close"><?php _e( 'Cancel', 'codexpert' ) ?></button>
							&nbsp;
							<button class="button button-primary cx-plugin-dsm-btn cx-plugin-dsm-submit" type="submit"><?php _e( 'Submit & Deactivate', 'codexpert' ) ?></button>
						</div>
					</div>
				</form>
			</div>
		</div>
		<?php
	}

	public function send_deactivation_survey()	{
		// deactivate the plugin first
		deactivate_plugins( "{$this->slug}/{$this->slug}.php" );

		// send data
		$url = add_query_arg( [ 
		    'rest_route'    => '/plugins/deactivation',
		    'first_name'    => $_POST['first_name'],
		    'last_name'     => $_POST['last_name'],
		    'email'     	=> $_POST['user_email'],
		    'plugin'     	=> $_POST['plugin'],
		    'site_url'     	=> $_POST['site_url'],
		    'reason'     	=> serialize( $_POST['reason'] ),
		    'explanation'	=> $_POST['explanation'],
		], wp_unslash( $this->server ) );

		wp_remote_get( $url );

		wp_send_json( [ 'status' => 1, 'message' => __( 'Plugin deactivated' ) ] );
	}

	public function get_reasons() {
		$reasons = [
			'temporary'				=> 'It\'s a temporary deactivation',
			'found_better'			=> 'Found a better plugin',
			'features_missing'		=> 'Important features missing',
			'doesnt_working'		=> 'It doesn\'t work as expected',
			'mistakenly_installed'	=> 'I had installed it by mistake',
			'others'				=> 'Others',
		];

		return apply_filters( "cx-plugin-deactivation-reasons", $reasons, $this->slug );
	}
}
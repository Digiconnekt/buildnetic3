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
 * @subpackage Setup
 * @author Codexpert <hi@codexpert.io>
 */
class Setup extends Base {

	public function __construct( $plugin ) {

		$this->plugin 	= $plugin;
		$this->server 	= $this->plugin['server'];
		$this->slug 	= $this->plugin['TextDomain'];
		$this->name 	= $this->plugin['Name'];
		$this->steps 	= $this->plugin['steps'];
		$this->admin_url = admin_url( 'admin.php' );
		$this->top_heading 	= isset( $this->plugin['hide_top_heading'] ) ? $this->plugin['hide_top_heading'] : false;

		$this->action( 'admin_menu', 'add_pseudo_menu' );
		$this->action( 'admin_init', 'render_content' );
		$this->action( 'admin_head', 'save_setup' );
		$this->action( 'admin_print_styles', 'enqueue_scripts' );
	}

	public function enqueue_scripts() {
		if ( !isset( $_GET['page'] ) || "{$this->slug}_setup" !== $_GET['page'] ) {
		    return;
		}

		wp_enqueue_style( 'googleapis', 'https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap' );
        wp_enqueue_style( 'codexpert-product-wizard', plugins_url( 'assets/css/wizard.css', __FILE__ ), [], '' );
    }

	/**
	 * Add admin menus/screens.
	 */
	public function add_pseudo_menu() {
		add_dashboard_page( '', '', 'manage_options', "{$this->slug}_setup", '' );
	}

	public function render_content() {
		if ( !isset( $_GET['page'] ) || "{$this->slug}_setup" !== $_GET['page'] ) {
		    return;
		}

		$this->header();
		$this->pagination();
		$this->body();
		$this->footer();
		exit;
	}

	public function header() {
		$hide_title = $this->top_heading ? 'hide_title' : '';
		?>
		<!DOCTYPE html>
		<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
			<head>
				<meta name="viewport" content="width=device-width" />
				<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
				<title><?php printf( __( '%s &rsaquo; Setup Wizard' ), $this->name ); ?></title>
				<?php do_action( 'admin_print_styles' ); ?>
				<?php do_action( 'admin_head' ); ?>
				<?php do_action( 'admin_print_scripts' ); ?>
			</head>
			<body class="cx-setup wp-core-ui cx-wizard-body-panel">
			<div class="cx-wizard-container">
			<h1 class="cx-wizard-heading <?php echo $hide_title ?>"><a href="<?php echo $this->get_step_url( array_keys( $this->steps )[0] ); ?>"><?php echo $this->name; ?></a></h1>
		<?php
	}

	public function pagination() {
		
		if( count( $this->steps ) > 1 ) {
			
			echo '<div class="cx-wizard-stepper-wrapper">';

			$count = 1;
			$passed = 'passed-step';

			foreach ( $this->steps as $step => $data ) {

				$_classes = [ 'cx-step' ];
				if( $step == $this->current_step() ) {
					$_classes[] = 'current-step';
				}
				if( $step == $this->previous_step() ) {
					$_classes[] = 'previous-step';
				}
				if( $step == $this->next_step() ) {
					$_classes[] = 'next-step';
				}

				$classes = implode( ' ', $_classes );
				$url = $this->get_step_url( $step );

				echo "
				  <div class='cx-wizard-stepper-item cx-step-{$count} {$classes} {$passed}'>
				    <div class='cx-wizard-step-counter'>{$count}</div>
				    <div class='cx-wizard-step-name'><a href='{$url}'>{$data['label']}</a></div>
				  </div>
				";

				$count++;

				if ( $step == $this->current_step() ) {
					$passed = '';
				}
			}

			echo '</div>';
		}

		?>

		<div class="cx-wizard-content">
			<?php 
			$current_step 	= $this->current_step();
			$action 		= add_query_arg( 'saved', 1, $this->get_step_url( $current_step ) );
			echo "<form id='cx-{$current_step}-form' method='POST' action='{$action}'>";
			?>
		<div class="cx-wizard-page">
		<?php
	}

	public function body() {

		// if a template file is passed
		if( isset( $this->steps[ $this->current_step() ]['template'] ) && file_exists( $template = $this->steps[ $this->current_step() ]['template'] ) ) {
			ob_start();
			include $template;
			echo ob_get_clean();
		}

		// if a function or method passed
		elseif( isset( $this->steps[ $this->current_step() ]['callback'] ) && ( is_string( $callback = $this->steps[ $this->current_step() ]['callback'] ) && ( function_exists( $callback ) ) || method_exists( $callback[0], $callback[1] ) ) ) {
			call_user_func( $callback );
		}

		// if a string passed
		elseif( isset( $this->steps[ $this->current_step() ]['content'] ) ) {
			echo $this->steps[ $this->current_step() ]['content'];
		}
	}

	public function footer() {
		?>
								<div class="cx-wizard-btns">
									<?php 
									$prev_step 		= $this->previous_step();
									$current_step 	= $this->current_step();
									$next_step 		= $this->next_step();
									$prev_step_url 	= $this->get_step_url( $prev_step );
									$disabled		= $prev_step == $current_step ? 'disabled' : '';
									$previous_text 	= __( 'Previous', 'cx-plugin' );
									$button_text	= $current_step == $next_step ? __( 'Finish', 'cx-plugin' ) : __( 'Next', 'cx-plugin' );
									echo "<a class='cx-wizard-btn prev {$disabled}' href='{$prev_step_url}'>{$previous_text}</a>";
									echo "<button id='{$current_step}-btn' class='cx-wizard-btn next'>{$button_text}</button>";
									?>
								</div>
							</div>
						</form>
					</div>
				</div>
			</body>
		</html>
		<?php
	}

	public function save_setup() {
		$current_step = $this->current_step();
		if( !is_null( $current_action = $this->steps[ $current_step ]['action'] ) ) {
			if( method_exists( $current_action[0], $current_action[1] ) || function_exists( $current_action ) ) {
				call_user_func( $current_action );
				if( isset( $_GET['saved'] ) ) {
					$redirect = isset( $this->steps[ $current_step ]['redirect'] ) ? $this->steps[ $current_step ]['redirect'] : $this->get_step_url( $this->next_step( $current_step ) );
					wp_safe_redirect( $redirect );
					exit();
				}
			}
		}
	}

	public function current_step() {
		if( isset( $_GET['step'] ) && array_key_exists( $_GET['step'], $this->steps ) ) {
			return $_GET['step'];
		}

		return array_keys( $this->steps )[0];
	}

	/**
	 * @param string $step relative step
	 */
	public function previous_step( $step = null ) {
		$current_step = is_null( $step ) ? $this->current_step() : $step;
		$current_step_position = array_search( $current_step, array_keys( $this->steps ) );
		$previous_step_position = $current_step_position - 1;
		
		if( $previous_step_position <= 0 ) {
			$previous_step_position = 0;
		}

		return array_keys( $this->steps )[ $previous_step_position ];
	}

	/**
	 * @param string $step relative step
	 */
	public function next_step( $step = null ) {
		$current_step = is_null( $step ) ? $this->current_step() : $step;
		$current_step_position = array_search( $current_step, array_keys( $this->steps ) );
		$next_step_position = $current_step_position + 1;
		
		if( $next_step_position >= count( $this->steps ) ) {
			$next_step_position = $current_step_position;
		}

		return array_keys( $this->steps )[ $next_step_position ];
	}

	public function get_step_url( $step = '' ) {
		return add_query_arg( [ 'page' => "{$this->slug}_setup", 'step' => $step ], $this->admin_url );
	}
}
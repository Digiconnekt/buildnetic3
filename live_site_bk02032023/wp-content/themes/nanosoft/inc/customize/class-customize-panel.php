<?php
defined( 'ABSPATH' ) or die();

/**
 * A wrapper for the customize control
 *
 * @package     Royal
 * @subpackage  Customize
 */
class NanoSoft_Customize_Panel extends WP_Customize_Panel
{
	/**
	 * The panel heading information
	 * 
	 * @var     array
	 * @since   1.0.0
	 */
	public $heading;
	public $parent = false;

	/**
	 * @var     string
	 * @since   1.0.0
	 */
	public $type = 'grouped';

	/**
	 * Constructor.
	 *
	 * Any supplied $args override class property defaults.
	 *
	 * @since 4.0.0
	 *
	 * @param WP_Customize_Manager $manager Customizer bootstrap instance.
	 * @param string               $id      An specific ID for the panel.
	 * @param array                $args    Panel arguments.
	 */
	public function __construct( $manager, $id, $args = array() ) {
		$keys = array_keys( get_object_vars( $this ) );

		foreach ( $keys as $key ) {
			if ( isset( $args[ $key ] ) ) {
				$this->$key = $args[ $key ];
			}
		}

		$this->manager = $manager;
		$this->id = $id;
		if ( empty( $this->active_callback ) ) {
			$this->active_callback = array( $this, 'active_callback' );
		}
		self::$instance_count += 1;
		$this->instance_number = self::$instance_count;

		$this->sections = array(); // Users cannot customize the $sections array.
	}

	/**
	 * An Underscore (JS) template for rendering this panel's container.
	 *
	 * Class variables for this panel class are available in the `data` JS object;
	 * export custom variables by overriding WP_Customize_Panel::json().
	 *
	 * @see WP_Customize_Panel::print_template()
	 *
	 * @since 4.3.0
	 * @access protected
	 */
	protected function render_template() {
		?>

			<# if ( data.heading ) { #>
			<li id="accordion-heading-{{ data.id }}" class="accordion-section accordion-section-heading">
				<div class="accordion-heading-inner">
					<# if ( data.heading.title ) { #>
					<h3 class="accordion-heading-title">{{ data.heading.title }}</h3>
					<# } #>
					<# if ( data.heading.description ) { #>
					<div class="accordion-heading-desc">{{ data.heading.description }}</div>
					<# } #>
				</div>
			</li>
			<# } #>
			
			<li id="accordion-panel-{{ data.id }}" class="accordion-section control-section control-panel control-panel-{{ data.type }}">
				<h3 class="accordion-section-title" tabindex="0">
					{{ data.title }}
					<span class="screen-reader-text"><?php esc_html_e( 'Press return or enter to open this panel', 'nanosoft' ); ?></span>
				</h3>
				<ul class="accordion-sub-container control-panel-content"></ul>
			</li>
		<?php
	}

	/**
	 * An Underscore (JS) template for this panel's content (but not its container).
	 *
	 * Class variables for this panel class are available in the `data` JS object;
	 * export custom variables by overriding WP_Customize_Panel::json().
	 *
	 * @see WP_Customize_Panel::print_template()
	 *
	 * @since 4.3.0
	 * @access protected
	 */
	protected function content_template() {
		?>
		<li class="panel-meta customize-info accordion-section <# if ( ! data.description ) { #> cannot-expand<# } #>">
			<button class="customize-panel-back" tabindex="-1"><span class="screen-reader-text"><?php esc_html_e( 'Back', 'nanosoft' ); ?></span></button>
			<div class="accordion-section-title">
				<span class="preview-notice">
					<?php
						/* translators: %s: the site/panel title in the Customizer */
						echo sprintf( esc_html__( 'Customizing %s', 'nanosoft' ), '
							<# if ( data.parent ) { #>
							▸ {{ data.parent }}
							<# } #>
							<strong class="panel-title">{{ data.title }}</strong>
						' );
					?>
				</span>
				<# if ( data.description ) { #>
					<button class="customize-help-toggle dashicons dashicons-editor-help" tabindex="0" aria-expanded="false"><span class="screen-reader-text"><?php esc_html_e( 'Help', 'nanosoft' ); ?></span></button>
				<# } #>
			</div>
			<# if ( data.description ) { #>
				<div class="description customize-panel-description">
					{{{ data.description }}}
				</div>
			<# } #>
		</li>
		<?php
	}

	/**
	 * Gather the parameters passed to client JavaScript via JSON.
	 *
	 * @since 4.1.0
	 *
	 * @return array The array to be exported to the client as JSON.
	 */
	public function json() {
		$json = parent::json();
		$json['heading'] = $this->heading;
		$json['parent'] = $this->parent;
		
		return $json;
	}
}

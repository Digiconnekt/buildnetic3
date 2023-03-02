<?php
defined( 'ABSPATH' ) or die();

/**
 * A wrapper for the customize control
 *
 * @package     Royal
 * @subpackage  Customize
 */
class NanoSoft_Customize_Section extends WP_Customize_Section
{
	/**
	 * The section heading information
	 * 
	 * @var     array
	 * @since   1.0.0
	 */
	public $heading;

	/**
	 * @var     boolean
	 * @since   1.0.0
	 */
	public $expanded = false;

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
	 * @since 3.4.0
	 *
	 * @param WP_Customize_Manager $manager Customizer bootstrap instance.
	 * @param string               $id      An specific ID of the section.
	 * @param array                $args    Section arguments.
	 */
	public function __construct( $manager, $id, $args = array() ) {
		$keys = array_keys( get_object_vars( $this ) );
		foreach ( $keys as $key ) {
			if ( isset( $args[ $key ] ) ) {
				$this->$key = $args[ $key ];
			}
		}

		if ( $this->expanded && empty( $this->heading ) ) {
			$this->heading = array(
				'title'       => $this->title,
				'description' => $this->description
			);
		}

		$this->manager = $manager;
		$this->id = $id;
		if ( empty( $this->active_callback ) ) {
			$this->active_callback = array( $this, 'active_callback' );
		}
		self::$instance_count += 1;
		$this->instance_number = self::$instance_count;

		$this->controls = array(); // Users cannot customize the $controls array.
	}

	/**
	 * An Underscore (JS) template for rendering this section.
	 *
	 * Class variables for this section class are available in the `data` JS object;
	 * export custom variables by overriding WP_Customize_Section::json().
	 *
	 * @since 4.3.0
	 * @access protected
	 *
	 * @see WP_Customize_Section::print_template()
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

			<li id="accordion-section-{{ data.id }}" class="accordion-section control-section control-section-{{ data.type }}" data-expanded="{{ data.expanded }}">
				<# if ( data.expanded === false ) { #>
				<h3 class="accordion-section-title" tabindex="0">
					{{ data.title }}
					<span class="screen-reader-text"><?php esc_html_e( 'Press return or enter to open this section', 'nanosoft' ); ?></span>
				</h3>
				<# } #>

				<ul class="accordion-section-content">
					<li class="customize-section-description-container">
						<div class="customize-section-title">
							<button class="customize-section-back" tabindex="-1">
								<span class="screen-reader-text"><?php esc_html_e( 'Back', 'nanosoft' ); ?></span>
							</button>
							<h3>
								<span class="customize-action">
									{{{ data.customizeAction }}}

									<# if ( data.parent ) { #>
									▸ {{ data.parent }}
									<# } #>
								</span>
								{{ data.title }}
							</h3>
						</div>
						<# if ( data.description ) { #>
							<div class="description customize-section-description">
								{{{ data.description }}}
							</div>
						<# } #>
					</li>
				</ul>
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
		$json['expanded'] = $this->expanded;
		$json['parent'] = $this->parent;

		return $json;
	}
}

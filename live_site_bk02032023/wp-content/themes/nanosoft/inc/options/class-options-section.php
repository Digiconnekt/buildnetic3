<?php
defined( 'ABSPATH' ) or die();

/**
 * @package     OptionsPlus
 * @subpackage  Options
 */
class NanoSoft_Options_Section
{
	/**
	 * Section ID
	 * 
	 * @var  string
	 */
	public $id;

	/**
	 * Section Title
	 * 
	 * @var  string
	 */
	public $title;

	/**
	 * Section description
	 * 
	 * @var  string
	 */
	public $description;

	/**
	 * Section's controls
	 * 
	 * @var  array
	 */
	public $controls;

	/**
	 * @param   array  $args  Constructor arguments
	 */
	public function __construct( $id, $args = array() ) {
		foreach( array_keys( get_object_vars( $this ) ) as $key ) {
			if ( isset( $args[$key] ) )
				$this->$key = $args[$key];
		}

		$this->controls = array();
		$this->id = $id;
	}

	public function enqueue() {
		foreach( $this->controls as $control )
			$control->enqueue();
	}

	/**
	 * Render the section
	 * 
	 * @return  void
	 */
	public function render() {
		?>
			<div id="options-section-<?php echo esc_attr( $this->id ) ?>">
				<?php if ( ! empty( $this->description ) ): ?>
					<p class="options-section-desc"><?php echo esc_html( $this->description ) ?></p>
				<?php endif ?>

				<ul class="options-section-controls">
					<?php
						foreach ( $this->controls as $id => $control )
							$control->render();
					?>
				</ul>
			</div>
		<?php
	}
}

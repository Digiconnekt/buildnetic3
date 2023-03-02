<?php
defined( 'ABSPATH' ) or die();


/**
 * This class will be present an social icons control
 */
class NanoSoft_Options_SocialIcons extends NanoSoft_Options_Control
{
	/**
	 * The control type
	 * 
	 * @var  string
	 */
	public $type = 'social-icons';

	public function render_content() {
		$name = '_options-social-icons-' . $this->id;
		$icons = $this->available_icons();

		$value = $this->value();
		$order = $icons['__icons_ordering__'];

		if ( ! is_array( $value ) ) {
			$decoded_value = json_decode( trim( $value, '"' ), true );
			$value = is_array( $decoded_value ) ? $decoded_value : array();
		}

		if ( isset( $value['__icons_ordering__'] ) && is_array( $value['__icons_ordering__'] ) )
			$order = $value['__icons_ordering__'];
		?>

			<div class="options-control-inputs">
				<ul class="icons">
					<li class="item-properties">
						<label>
							<span class="input-title"></span>
							<input type="text" class="input-field" />
						</label>
						<button type="button" class="button button-primary confirm"><i class="fa fa-check"></i></button>
					</li>

					<?php foreach ( $order as $id ):
						$params = $icons[$id];
						?>
						<li class="item" data-id="<?php echo esc_attr( $id ) ?>"
							<?php isset( $value[$id] ) ? printf( 'data-link="%s"', esc_attr( $value[$id] ) ) : ''; ?>
							data-title="<?php echo esc_attr( $params['title'] ) ?>">
							<i class="fa <?php echo esc_attr( $params['icon_class'] ) ?>"></i>
						</li>
					<?php endforeach ?>
				</ul>
			</div>
			<input type="hidden" name="op-options[<?php echo esc_attr( $this->id ) ?>]" value="<?php echo esc_attr( json_encode( $this->value() ) ) ?>" />
		<?php
	}

	private function available_icons() {
		$icons = apply_filters( 'op_available_social_icons', array(
			'twitter'        => array( 'icon_class' => 'fa-twitter', 'title' => 'Twitter' ),
			'facebook'       => array( 'icon_class' => 'fa-facebook-official', 'title' => 'Facebook' ),
			'google-plus'    => array( 'icon_class' => 'fa-google-plus', 'title' => 'Google+' ),
			'pinterest'      => array( 'icon_class' => 'fa-pinterest', 'title' => 'Pinterest' ),
			'instagram'      => array( 'icon_class' => 'fa-instagram', 'title' => 'Instagram' ),
			'youtube'        => array( 'icon_class' => 'fa-youtube-play', 'title' => 'Youtube' ),
			'vimeo'          => array( 'icon_class' => 'fa-vimeo-square', 'title' => 'Vimeo' ),
			'linkedin'       => array( 'icon_class' => 'fa-linkedin', 'title' => 'LinkedIn' ),
			'behance'        => array( 'icon_class' => 'fa-behance', 'title' => 'Behance' ),
			'bitcoin'        => array( 'icon_class' => 'fa-bitcoin', 'title' => 'Bitcoin' ),
			'bitbucket'      => array( 'icon_class' => 'fa-bitbucket', 'title' => 'BitBucket' ),
			'codepen'        => array( 'icon_class' => 'fa-codepen', 'title' => 'Codepen' ),
			'delicious'      => array( 'icon_class' => 'fa-delicious', 'title' => 'Delicious' ),
			'deviantart'     => array( 'icon_class' => 'fa-deviantart', 'title' => 'DeviantArt' ),
			'digg'           => array( 'icon_class' => 'fa-digg', 'title' => 'Digg' ),
			'dribbble'       => array( 'icon_class' => 'fa-dribbble', 'title' => 'Dribbble' ),
			'flickr'         => array( 'icon_class' => 'fa-flickr', 'title' => 'Flickr' ),
			'foursquare'     => array( 'icon_class' => 'fa-foursquare', 'title' => 'Foursquare' ),
			'github'         => array( 'icon_class' => 'fa-github-alt', 'title' => 'Github' ),
			'jsfiddle'       => array( 'icon_class' => 'fa-jsfiddle', 'title' => 'JSFiddle' ),
			'reddit'         => array( 'icon_class' => 'fa-reddit', 'title' => 'Reddit' ),
			'skype'          => array( 'icon_class' => 'fa-skype', 'title' => 'Skype' ),
			'slack'          => array( 'icon_class' => 'fa-slack', 'title' => 'Slack' ),
			'soundcloud'     => array( 'icon_class' => 'fa-soundcloud', 'title' => 'SoundCloud' ),
			'spotify'        => array( 'icon_class' => 'fa-spotify', 'title' => 'Spotify' ),
			'stack-exchange' => array( 'icon_class' => 'fa-stack-exchange', 'title' => 'Stack Exchange' ),
			'stack-overflow' => array( 'icon_class' => 'fa-stack-overflow', 'title' => 'Stach Overflow' ),
			'steam'          => array( 'icon_class' => 'fa-steam', 'title' => 'Steam' ),
			'stumbleupon'    => array( 'icon_class' => 'fa-stumbleupon', 'title' => 'Stumbleupon' ),
			'tumblr'         => array( 'icon_class' => 'fa-tumblr', 'title' => 'Tumblr' ),
			'rss'            => array( 'icon_class' => 'fa-rss', 'title' => 'RSS' )
		) );

		$icons['__icons_ordering__'] = array_keys( $icons );

		return $icons;
	}
}

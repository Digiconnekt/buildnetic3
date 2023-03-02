<?php
defined( 'ABSPATH' ) or die();

// Map the shortcode paramters
vc_lean_map( 'locations', null, get_theme_file_path( 'inc/elements/locations-params.php' ) );

class WPBakeryShortCode_Locations extends WPBakeryShortCode
{
	protected function content( $atts, $content = '' ) {
		if ( isset( $atts['locations'] ) ) {
			$locations = json_decode( urldecode( $atts['locations'] ), true );
			$locations = array_map( [$this, '_geocode'], $locations );
			
			foreach ($locations as $index => $location) {
				if ( isset( $location['marker'] ) && is_numeric( $location['marker'] ) ) {
					$image = wp_get_attachment_image_src( $location['marker'] );
					$locations[ $index ]['marker'] = $image[0];
					$locations[ $index ]['content'] = wpautop( $location['content'] );
				}
			}

			$atts['locations'] = json_encode( $locations );
		}

		wp_enqueue_script( 'line-shortcode-maps-api' );
		printf( '<div class="elm-google-maps" data-options="%s" style="height: %dpx"></div>',
			esc_attr( json_encode( $atts ) ),
			esc_attr( $atts['height'] )
		);
	}

	public function _geocode ( $location ) {
		// url encode the address
	    $address = urlencode( $location['address'] );
	    $address = trim( $address );
	    $address_key = sprintf( '_maps_%s', md5( strtolower( $address ) ) );
	    $location['latlng'] = maybe_unserialize( get_option( $address_key ) );
	    
	    if ( empty( $location['latlng'] ) ) {
	    	$options = get_option( 'line_settings' );
			$url = "https://maps.googleapis.com/maps/api/geocode/json?address={$address}&key={$options['maps_api']}";
			$response = file_get_contents($url);
			$response_json = json_decode($response, true);

			// response status will be 'OK', if able to geocode given address 
			if( $response_json['status'] == 'OK' ) {
				$latitude  = isset($response_json['results'][0]['geometry']['location']['lat']) ? $response_json['results'][0]['geometry']['location']['lat'] : "";
				$longitude = isset($response_json['results'][0]['geometry']['location']['lng']) ? $response_json['results'][0]['geometry']['location']['lng'] : "";

		    	// verify if data is complete
				if( $latitude && $longitude ) {
					update_option( $address_key, serialize( $location['latlng'] = ['lat' => $latitude, 'lng' => $longitude] ) );
				}
			}
	    }

	    return $location;
	}
}

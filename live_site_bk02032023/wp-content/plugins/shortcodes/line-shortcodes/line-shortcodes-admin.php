<?php
add_action( 'admin_menu', 'line_add_admin_menu' );
add_action( 'admin_init', 'line_settings_init' );


function line_add_admin_menu(  ) { 

	add_options_page( 'Line Shortcodes', 'Line Shortcodes', 'manage_options', 'line_shortcodes', 'line_options_page' );

}


function line_settings_init(  ) { 

	register_setting( 'line_shortcodes_settings', 'line_settings' );

	add_settings_section(
		'line_pluginPage_section', 
		__( 'Google Maps API', 'linethemes' ), 
		'line_settings_section_callback', 
		'line_shortcodes_settings'
	);

	add_settings_field( 
		'maps_api', 
		__( 'API Key', 'linethemes' ), 
		'line_google_maps_settings', 
		'line_shortcodes_settings', 
		'line_pluginPage_section' 
	);


}


function line_google_maps_settings(  ) { 

	$options = get_option( 'line_settings' );
	?>
	<input type='text' name='line_settings[maps_api]' value='<?php echo $options['maps_api']; ?>'>
	<p class="description">The Google Maps JavaScript API v3 does not require an API key to function correctly. However, Google strongly encourages you to load the Maps API using an APIs Console key which allows you to monitor your Maps API usage. <a href="https://developers.google.com/maps/documentation/javascript/tutorial#api_key" target="_blank" class="new-window">Learn how to obtain an API key</a>.</p>
	<?php

}


function line_settings_section_callback(  ) { 

	

}


function line_options_page(  ) { 

	?>
	
	<div class="wrap">
		<form action='options.php' method='post'>

			<h1>Shortcodes Settings</h1>

			<?php
			settings_fields( 'line_shortcodes_settings' );
			do_settings_sections( 'line_shortcodes_settings' );
			submit_button();
			?>

		</form>
	</div>

	<?php

}

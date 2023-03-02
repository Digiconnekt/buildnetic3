<?php
$base_url 	= duplica_site_url();
$buttons 	= [
	// 'changelog' => [
	// 	'url' 	=> 'https://wordpress.org/plugins/duplica/#developers',
	// 	'label' => __( 'Changelog', 'duplica' ) 
	// ],
	'community' 	=> [
		'url' 	=> 'https://facebook.com/groups/codexpert.io',
		'label' => __( 'Community', 'duplica' ) 
	],
	'website' 	=> [
		'url' 	=> 'https://codexpert.io/',
		'label' => __( 'Official Website', 'duplica' ) 
	],
	'support' 	=> [
		'url' 	=> 'https://help.codexpert.io/',
		'label' => __( 'Ask Support', 'duplica' ) 
	],
];
$buttons 	= apply_filters( 'duplica_help_btns', $buttons );
?>
<script type="text/javascript">
	jQuery(function($){ $.get( ajaxurl, { action : 'duplica_fetch-docs', _wpnonce: DUPLICA._wpnonce }); });
</script>
<div class="duplica-help-tab">
	<div class="duplica-documentation">
		 <div class='wrap'>
		 	<div id='duplica-helps'>
		    <?php

		    $helps = get_option( 'duplica_docs_json', [] );
			$utm = [ 'utm_source' => 'dashboard', 'utm_medium' => 'settings', 'utm_campaign' => 'faq' ];
		    if( is_array( $helps ) ) :
		    foreach ( $helps as $help ) {
		    	$help_link = add_query_arg( $utm, $help['link'] );
		        ?>
		        <div id='duplica-help-<?php echo esc_attr( $help['id'] ); ?>' class='duplica-help'>
		            <h2 class='duplica-help-heading' data-target='#duplica-help-text-<?php echo esc_attr( $help['id'] ); ?>'>
		                <a href='<?php echo esc_url( $help_link ); ?>' target='_blank'>
		                <span class='dashicons dashicons-admin-links'></span></a>
		                <span class="heading-text"><?php echo esc_html( $help['title']['rendered'] ); ?></span>
		            </h2>
		            <div id='duplica-help-text-<?php echo esc_attr( $help['id'] ); ?>' class='duplica-help-text' style='display:none'>
		                <?php echo wpautop( wp_trim_words( $help['content']['rendered'], 55, " <a class='sc-more' href='" . esc_url( $help_link ) . "' target='_blank'>[more..]</a>" ) ); ?>
		            </div>
		        </div>
		        <?php

		    }
		    else:
		        _e( 'Something is wrong! No help found!', 'duplica' );
		    endif;
		    ?>
		    </div>
		</div>
	</div>
	<div class="duplica-help-links">
		<?php 
		foreach ( $buttons as $key => $button ) {
			$button_url = add_query_arg( $utm, $button['url'] );
			echo "<a target='_blank' href='" . esc_url( $button_url ) . "' class='duplica-help-link'>" . esc_html( $button['label'] ) . "</a>";
		}
		?>
	</div>
</div>

<?php do_action( 'duplica_help_tab_content' ); ?>
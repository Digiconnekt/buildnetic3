<?php
defined( 'ABSPATH' ) or die();

add_filter( 'nanosoft_body_class', 'nanosoft_woocommerce_body_class' );
add_filter( 'nanosoft_sidebar_id', 'nanosoft_woocommerce_sidebar' );
add_filter( 'nanosoft_sidebar_position', 'nanosoft_woocommerce_sidebar_position' );
?>

	<?php get_header() ?>
		<div class="content">
			<?php woocommerce_content() ?>
		</div>
	<?php get_footer() ?>

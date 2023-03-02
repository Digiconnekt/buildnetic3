<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package alvon
 */

if ( ! is_active_sidebar( 'service-sidebar' ) ) {
	return;
} 
?>
<!-- End Service Sidebar -->
<div class="col-lg-4 mt-30">
	<div class="sidebar-blog service-sidebar">
	    <?php dynamic_sidebar( 'service-sidebar' ); ?>
	</div>
</div>
<?php
/**
 * WARNING: This file is part of the Projects plugin. DO NOT edit
 * this file under any circumstances.
 */

/**
 * Prevent direct access to this file
 */
defined( 'ABSPATH' ) or die();

abstract class nProjects_Helper
{
	public static function current_post_type() {
		global $post, $typenow, $current_screen;
	
		//we have a post so we can just get the post type from that
		if ( true == isset( $post ) && true == isset( $post->post_type ) )
			return $post->post_type;

		//check the global $typenow - set in admin.php
		elseif ( true == isset( $typenow ) )
			return $typenow;

		//check the global $current_screen object - set in sceen.php
		elseif ( true == isset( $current_screen ) && true == isset( $current_screen->post_type ) )
			return $current_screen->post_type;

		//lastly check the post_type querystring
		elseif ( true == isset( $_REQUEST['post_type'] ) )
			return sanitize_key( $_REQUEST['post_type'] );
		
		//we do not know the post type!
		return null;
	}
}

<?php
/*
Plugin Name: Image Hotspot by DevVN
Plugin URI: https://levantoan.com/devvn-image-hotspot
Description: Image Hotspot help you add hotspot to your images.
Author: Le Van Toan
Version: 1.2.2
Author URI: https://levantoan.com/
Text Domain: devvn-image-hotspot
Domain Path: /languages
License: GPLv3
License URI: http://www.gnu.org/licenses/gpl-3.0

Image Hotspot by DevVN

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

define('DEVVN_IHOTSPOT_VER', '1.2.2');
define('DEVVN_IHOTSPOT_DEV_MOD', true);
if ( !defined( 'DEVVN_IHOTSPOT_BASENAME' ) )
    define( 'DEVVN_IHOTSPOT_BASENAME', plugin_basename( __FILE__ ) );

define('DEVVN_IHOTSPOT_POINT_DEFAULT',serialize(array(
	'countPoint'	=>	'',
	'content'		=>	'',
	'left'			=>	'',
	'top'			=>	'',
	'linkpins'		=>	'',
	'link_target'	=>	'',
	'placement'     =>  '',
	'pins_id'       =>  '',
	'pins_class'    =>  ''
)));
define('DEVVN_IHOTSPOT_PINS_DEFAULT',serialize(array(
	'countPoint'	=>	'',
	'imgPoint'		=>	'',
	'top'			=>	'',
	'left'			=>	''
)));

//include
include 'admin/inc/cpt-ihotspot.php';
include 'admin/inc/add_shortcode_devvn_ihotspot.php';
include 'admin/inc/metabox-donate.php';
include 'admin/inc/settings.php';

load_textdomain('devvn-image-hotspot', dirname(__FILE__) . '/languages/devvn-image-hotspot-' . get_locale() . '.mo');
load_plugin_textdomain( 'devvn-image-hotspot', false, plugin_basename( dirname( __FILE__ ) ) . '/i18n/languages' );

//metabox
function devvn_ihotspot_meta_box() {
	//post type
	$screens = array( 'points_image' );

	foreach ( $screens as $screen ) {
		add_meta_box(
			'devvn-ihotspot-metabox',
			__( 'Image Hotspot', 'devvn-image-hotspot' ),
			'devvn_ihotspot_meta_box_callback',
			$screen,
			'normal',
			'high'
		);
		add_meta_box(
			'devvn-ihotspot-shortcode',
			__( 'Image Hotspot Shortcode', 'devvn-image-hotspot' ),
			'devvn_ihotspot_shortcode_callback',
			$screen,
			'side',
			'high'
		);
	}
}
add_action( 'add_meta_boxes', 'devvn_ihotspot_meta_box' );

function devvn_wp_default_editor(){
    return "tinymce";
}

function devvn_ihotspot_meta_box_callback( $post ) {
    add_filter( 'wp_default_editor', 'devvn_wp_default_editor' );
	//add none field
	wp_nonce_field( 'maps_points_save_meta_box_data', 'maps_points_meta_box_nonce' );

	$data_post = get_post_meta($post->ID, 'hotspot_content', true);

	if(!$data_post){
	    $data_post = maybe_unserialize( $post->post_content );
	}

	$maps_images = (isset($data_post['maps_images']))?$data_post['maps_images']:'';
	$data_points = (isset($data_post['data_points']))?$data_post['data_points']:'';
	$pins_image = (isset($data_post['pins_image']))?$data_post['pins_image']:'';
	$pins_image_hover = (isset($data_post['pins_image_hover']))?$data_post['pins_image_hover']:'';
	$pins_more_option = (isset($data_post['pins_more_option']))?$data_post['pins_more_option']:array();
	$pins_more_option = wp_parse_args($pins_more_option,array(
		'position'			=>	'center_center',
		'custom_top'		=>	0,
		'custom_left'		=>	0,
		'custom_hover_top'	=>	0,
		'custom_hover_left'	=>	0,
		'pins_animation'	=>	'none'
	));
	?>	
	<table class="svl-table">
		<tbody>
			<tr>
				<td class="svl-label"><?php _e('Pins Image','devvn-image-hotspot')?></td>
				<td class="svl-input">
					<div class="svl-upload-image <?=($pins_image)?'has-image':''?>">						
						<div class="view-has-value">
							<input type="hidden" name="pins_image" class="pins_image" value="<?php echo $pins_image; ?>" />								
							<img src="<?=$pins_image?>" class="image_view pins_img"/>									
							<a href="#" class="svl-delete-image">x</a>
						</div>
						<div class="hidden-has-value"><input type="button" class="button-upload button" value="<?php _e( 'Select pins', 'devvn-image-hotspot' )?>" /></div>
					</div>
				</td>
			</tr>
			<tr>
				<td class="svl-label"><?php _e('Pins Hover Image','devvn-image-hotspot')?></td>
				<td class="svl-input">
					<div class="svl-upload-image <?=($pins_image_hover)?'has-image':''?>">						
						<div class="view-has-value">
							<input type="hidden" name="pins_image_hover" class="pins_image_hover" value="<?php echo $pins_image_hover; ?>" />								
							<img src="<?=$pins_image_hover?>" class="image_view pins_img_hover"/>									
							<a href="#" class="svl-delete-image">x</a>
						</div>
						<div class="hidden-has-value"><input type="button" class="button-upload button" value="<?php _e( 'Select pins hover', 'devvn-image-hotspot' )?>" /></div>
					</div>
				</td>				
			</tr>
			<tr>
				<td class="svl-label"><?php _e('Pins Center Position','devvn-image-hotspot')?></td>
				<td class="svl-input">
					<div class="pins-position-wrap">
						<p>
							<label><input type="radio" name="choose_type" value="center_center" <?=($pins_more_option['position'] == 'center_center'?'checked="checked"':'')?>><?php _e('Center center','devvn-image-hotspot')?></label>
							<label><input type="radio" name="choose_type" value="top_left" <?=($pins_more_option['position'] == 'top_left'?'checked="checked"':'')?>><?php _e('Top Left','devvn-image-hotspot')?></label>
							<label><input type="radio" name="choose_type" value="top_center" <?=($pins_more_option['position'] == 'top_center'?'checked="checked"':'')?>><?php _e('Top Center','devvn-image-hotspot')?></label>
							<label><input type="radio" name="choose_type" value="top_right" <?=($pins_more_option['position'] == 'top_right'?'checked="checked"':'')?>><?php _e('Top Right','devvn-image-hotspot')?></label>
							<label><input type="radio" name="choose_type" value="right_center" <?=($pins_more_option['position'] == 'right_center'?'checked="checked"':'')?>><?php _e('Right Center','devvn-image-hotspot')?></label>
							<label><input type="radio" name="choose_type" value="bottom_right" <?=($pins_more_option['position'] == 'bottom_right'?'checked="checked"':'')?>><?php _e('Bottom Right','devvn-image-hotspot')?></label>
							<label><input type="radio" name="choose_type" value="bottom_center" <?=($pins_more_option['position'] == 'bottom_center'?'checked="checked"':'')?>><?php _e('Bottom Center','devvn-image-hotspot')?></label>
							<label><input type="radio" name="choose_type" value="bottom_left" <?=($pins_more_option['position'] == 'bottom_left'?'checked="checked"':'')?>><?php _e('Bottom Left','devvn-image-hotspot')?></label>
							<label><input type="radio" name="choose_type" value="left_center" <?=($pins_more_option['position'] == 'left_center'?'checked="checked"':'')?>><?php _e('Left Center','devvn-image-hotspot')?></label>
							<label><input type="radio" name="choose_type" value="custom_center" <?=($pins_more_option['position'] == 'custom_center'?'checked="checked"':'')?>><?php _e('Custom','devvn-image-hotspot')?></label>
							<label><?php _e('Top: -','devvn-image-hotspot')?> <input type="number" name="custom_top" value="<?=$pins_more_option['custom_top']?>" min="0" step="any"> px</label>
							<label><?php _e('Left: -','devvn-image-hotspot')?> <input type="number" name="custom_left" value="<?=$pins_more_option['custom_left']?>" min="0" step="any"> px</label>
							<input type="hidden" name="custom_hover_top" value="<?=$pins_more_option['custom_hover_top']?>" min="0" step="any">
							<input type="hidden" name="custom_hover_left" value="<?=$pins_more_option['custom_hover_left']?>" min="0" step="any">
						</p>
					</div>
				</td>				
			</tr>
			<tr>
				<td class="svl-label"><?php _e('Pins Animation','devvn-image-hotspot')?></td>
				<td class="svl-input">
					<div class="pins-position-wrap">
						<p>
							<label><input type="radio" name="pins_animation" value="none" <?=($pins_more_option['pins_animation'] == 'none'?'checked="checked"':'')?>><?php _e('None','devvn-image-hotspot')?></label>
							<label><input type="radio" name="pins_animation" value="pulse" <?=($pins_more_option['pins_animation'] == 'pulse'?'checked="checked"':'')?>><?php _e('Pulse','devvn-image-hotspot')?></label>
						</p>
					</div>
				</td>				
			</tr>
		</tbody>
	</table>
	<div class="svl-image-wrap <?=($maps_images)?'has-image':''?>">	
	<div class="svl-control">
		<input type="button" id="meta-image-button" class="button" value="<?php _e( 'Upload Image', 'devvn-image-hotspot' )?>" />
		<input type="hidden" name="maps_images" class="maps_images" id="maps_images" value="<?php echo $maps_images; ?>" />
		<input type="button" name="add_point" class="add_point button view-has-value" value="<?php _e('Add Point','devvn-image-hotspot');?>"/>
		<span class="spinner"></span>
	</div>
	<div class="wrap_svl view-has-value" id="body_drag">
		<div class="images_wrap">
			<?php if($maps_images):?>
			<img src="<?php echo $maps_images; ?>">
			<?php endif;?>
		</div>	
		<?php if(is_array($data_points)):?>
			<?php $stt = 1;foreach ($data_points as $point):?>		 
			<?php 
		 	$data_input = array(
		 		'countPoint'	=>	$stt,
				'imgPoint'		=>	$pins_image,
				'top'			=>	$point['top'],
				'left'			=>	$point['left'],
				'linkpins'		=>	isset($point['linkpins'])?esc_url($point['linkpins']):'',
				'link_target'		=>	isset($point['link_target'])?esc_attr($point['link_target']):'_self',
				'pins_image_custom'		=>	isset($point['pins_image_custom'])?$point['pins_image_custom']:'',
				'pins_image_hover_custom'	=>	isset($point['pins_image_hover_custom'])?$point['pins_image_hover_custom']:'',
				'placement'	=>	isset($point['placement'])?$point['placement']:'',
				'pins_id'	=>	isset($point['pins_id'])?$point['pins_id']:'',
				'pins_class'	=>	isset($point['pins_class'])?$point['pins_class']:''
		 	);
		 	echo devvn_ihotspot_get_pins_default($data_input);?>
			<?php $stt++;endforeach;?>
		 <?php endif;?> 	
	 </div>
	 <div class="all_points">
	 <?php if(is_array($data_points)):?>
		 <?php $stt = 1;foreach ($data_points as $point):?>
		 	<?php 
		 	$data_input = array(
		 		'countPoint'	=>	$stt,
				'content'		=>	$point['content'],
				'left'			=>	$point['left'],
				'top'			=>	$point['top'],
				'linkpins'		=>	isset($point['linkpins'])?esc_url($point['linkpins']):'',
				'link_target'		=>	isset($point['link_target'])?esc_attr($point['link_target']):'_self',
				'pins_image_custom'		=>	isset($point['pins_image_custom'])?$point['pins_image_custom']:'',
				'pins_image_hover_custom'		=>	isset($point['pins_image_hover_custom'])?$point['pins_image_hover_custom']:'',
				'placement'		=>	isset($point['placement'])?$point['placement']:'',
				'pins_id'	=>	isset($point['pins_id'])?$point['pins_id']:'',
				'pins_class'	=>	isset($point['pins_class'])?$point['pins_class']:''
		 	);
		 	echo devvn_ihotspot_get_input_point_default($data_input);?> 
	 	 <?php $stt++;endforeach;?>
 	 <?php else:?>
 		<div style="display: none;"><?php wp_editor('', '_devvn_ihotspot_default_content'); ?></div>
	<?php endif;?>	 	 
	</div>
	<?php
}
function devvn_ihotspot_shortcode_callback( $post ){
	if(get_post_status($post->ID) == "publish"):
	?>
		<span><?php _e('Copy shortcode to view','devvn-image-hotspot')?></span>
		<input readonly="readonly" class="shortcodemap" value='[devvn_ihotspot id="<?=$post->ID?>"]'/>
	<?php else:?>
		<span><?php _e('Publish to view shortcode','devvn-image-hotspot')?></span>
	<?php 
	endif;	
}
function devvn_ihotspot_save_meta_box_data( $post_id ) {

	if ( ! isset( $_POST['maps_points_meta_box_nonce'] ) ) {
		return;
	}
	if ( ! wp_verify_nonce( $_POST['maps_points_meta_box_nonce'], 'maps_points_save_meta_box_data' ) ) {
		return;
	}
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	if ( isset( $_POST['post_type'] ) && 'points_image' == $_POST['post_type'] ) {
		if ( ! current_user_can( 'edit_page', $post_id ) ) {
			return;
		}
	} else {
		if ( ! current_user_can( 'edit_post', $post_id ) ) {
			return;
		}
	}
	if ( ! isset( $_POST['maps_images'] ) ) {
		return;
	}

	$my_data = esc_url( (isset($_POST['maps_images']))?$_POST['maps_images']:'' );	
	
	$dataPoints = array();	
	
	/*sanitize in devvn_ihotspot_convert_array_data*/
	$pointdata = (isset($_POST['pointdata']))?$_POST['pointdata']:'';		
	
	$choose_type = sanitize_text_field((isset($_POST['choose_type']))?$_POST['choose_type']:'');
	
	$custom_top = sanitize_text_field((isset($_POST['custom_top']))?$_POST['custom_top']:'');
	$custom_left = sanitize_text_field((isset($_POST['custom_left']))?$_POST['custom_left']:'');
	
	$custom_hover_top = sanitize_text_field((isset($_POST['custom_hover_top']))?$_POST['custom_hover_top']:'');
	$custom_hover_left = sanitize_text_field((isset($_POST['custom_hover_left']))?$_POST['custom_hover_left']:'');
	
	$pins_animation = sanitize_text_field((isset($_POST['pins_animation']))?$_POST['pins_animation']:'');
	
	$pins_more_option = array(
		'position'			=>	$choose_type,
		'custom_top'		=>	$custom_top,
		'custom_left'		=>	$custom_left,
		'custom_hover_top'	=>	$custom_hover_top,
		'custom_hover_left'	=>	$custom_hover_left,
		'pins_animation'	=>	$pins_animation
	);
	if(is_array($pointdata)){
		$dataPoints = devvn_ihotspot_convert_array_data($pointdata);
	}
	$data_post = array(
		'maps_images'		=>	$my_data,
		'pins_image'		=>	sanitize_text_field( (isset($_POST['pins_image']))?$_POST['pins_image']:'' ),
		'pins_image_hover'	=>	sanitize_text_field(isset($_POST['pins_image_hover'])?$_POST['pins_image_hover']:''),
		'pins_more_option'	=>	$pins_more_option,
		'data_points'		=>	$dataPoints
	);
	update_post_meta($post_id, 'hotspot_content', $data_post);
	/*remove_action( 'save_post', 'devvn_ihotspot_save_meta_box_data' );
	wp_update_post(array(
		'ID'			=>	$post_id,
		'post_content'	=>	maybe_serialize(wp_unslash($data_post)),
		'post_type'		=>	'points_image'
	));	
	add_action( 'save_post', 'devvn_ihotspot_save_meta_box_data' );*/
}
add_action( 'save_post', 'devvn_ihotspot_save_meta_box_data' );

function devvn_ihotspot_editor_styles(){
	
	global $wp_version;
	
	$baseurl = includes_url( 'js/tinymce' );
	
	$suffix = SCRIPT_DEBUG ? '' : '.min';
	$version = 'ver=' . $wp_version;
	$dashicons = includes_url( "css/dashicons$suffix.css?$version" );

	// WordPress default stylesheet and dashicons
	$mce_css = array(
		$dashicons,
		$baseurl . '/skins/wordpress/wp-content.css?' . $version
	);

	$editor_styles = get_editor_stylesheets();
	if ( ! empty( $editor_styles ) ) {
		foreach ( $editor_styles as $style ) {
			$mce_css[] = $style;
		}
	}
	
	$mce_css = trim( apply_filters( 'devvn_ihotspot_mce_css', implode( ',', $mce_css ) ), ' ,' );

	if ( ! empty($mce_css) )
		return $mce_css;
	else
		return false;
	
}

/*Add admin script*/
function devvn_ihotspot_admin_script() {
	global $typenow;
	if( $typenow == 'points_image' ) {
		wp_enqueue_media();	
		
	    wp_enqueue_script( 'jquery-ui-core' );
		wp_enqueue_script('jquery-ui-droppable');		
	    
		/*wp_register_script( 'bootstrap-js', plugin_dir_url( __FILE__ ) . 'admin/js/bootstrap.min.js', array( 'jquery' ), DEVVN_IHOTSPOT_VER, true );
		wp_enqueue_script( 'bootstrap-js' );*/

		wp_register_script( 'maps_points', plugin_dir_url( __FILE__ ) . 'admin/js/maps_points.js', array( 'jquery' ), DEVVN_IHOTSPOT_VER, true );
		wp_localize_script( 'maps_points', 'meta_image',
			array(
				'title' 		=> __( 'Select image', 'devvn-image-hotspot' ),
				'button' 		=> __( 'Select', 'devvn-image-hotspot' ),
				'site_url'		=>	home_url(),
				'ajaxurl'		=>	admin_url('admin-ajax.php'),
				'editor_style'	=>	devvn_ihotspot_editor_styles()
			)
		);
		wp_enqueue_script( 'maps_points' );
	}
}
add_action( 'admin_enqueue_scripts','devvn_ihotspot_admin_script' );

/*Add admin style*/
function devvn_ihotspot_admin_styles(){
	global $typenow;
	if( $typenow == 'points_image' ) {
		wp_enqueue_style( 'bootstrap', plugin_dir_url( __FILE__ ) . 'admin/css/bootstrap.css', array(), DEVVN_IHOTSPOT_VER, 'all' );
		wp_enqueue_style( 'maps_points', plugin_dir_url( __FILE__ ) . 'admin/css/maps_points_style.css', array(),DEVVN_IHOTSPOT_VER, 'all' );
	}
}
add_action( 'admin_print_styles', 'devvn_ihotspot_admin_styles' );

/*Add frontend scripts*/
function devvn_ihotspot_frontend_scripts() {
	if(DEVVN_IHOTSPOT_DEV_MOD){
		wp_enqueue_style('powertip',plugin_dir_url( __FILE__ ) . 'frontend/css/jquery.powertip.min.css',array(),'1.2.0','all');
		wp_enqueue_script( 'powertip', plugin_dir_url( __FILE__ ) . 'frontend/js/jquery.powertip.min.js', array('jquery'), '1.2.0', true );
		
		wp_enqueue_style('maps-points',plugin_dir_url( __FILE__ ) . 'frontend/css/maps_points.css',array(), DEVVN_IHOTSPOT_VER,'all');
		wp_enqueue_script( 'maps-points', plugin_dir_url( __FILE__ ) . 'frontend/js/maps_points.js', array('jquery'), DEVVN_IHOTSPOT_VER, true );
	}else{		
		wp_enqueue_style('ihotspot',plugin_dir_url( __FILE__ ) . 'frontend/css/ihotspot.min.css',array(),DEVVN_IHOTSPOT_VER,'all');
		wp_enqueue_script( 'ihotspot-js', plugin_dir_url( __FILE__ ) . 'frontend/js/jquery.ihotspot.min.js', array('jquery'), DEVVN_IHOTSPOT_VER, true );		
	}	
}
add_action( 'wp_enqueue_scripts', 'devvn_ihotspot_frontend_scripts' );

function devvn_ihotspot_get_input_point_default($data = array()){
	if(!is_array($data)) $data = array();
	$data = wp_parse_args($data,unserialize(DEVVN_IHOTSPOT_POINT_DEFAULT));
		
	$countPoint 				= isset($data['countPoint'])?$data['countPoint']:'';
	$pointContent 				= isset($data['content'])?$data['content']:'';
	$pointLeft 					= isset($data['left'])?$data['left']:'';
	$pointTop 					= isset($data['top'])?$data['top']:'';
	$pointLink 					= isset($data['linkpins'])?$data['linkpins']:'';
	$link_target 					= isset($data['link_target'])?$data['link_target']:'_self';
	$pins_image_custom 			= isset($data['pins_image_custom'])?$data['pins_image_custom']:'';
	$pins_image_hover_custom	= isset($data['pins_image_hover_custom'])?$data['pins_image_hover_custom']:'';
	$placement	= isset($data['placement'])?$data['placement']:'';
	$pins_id	= isset($data['pins_id'])?$data['pins_id']:'';
	$pins_class	= isset($data['pins_class'])?$data['pins_class']:'';
	ob_start();
	?>	
	<div class="devvn-hotspot-popup list_points" tabindex="-1" role="dialog" id="info_draggable<?php echo $countPoint?>" data-popup="info_draggable<?php echo $countPoint?>" data-points="<?php echo $countPoint?>">
	 	<div class="devvn-hotspot-popup-inner">
			<div class="devvn-hotspot-popup-modal-content">
				<div class="devvn-hotspot-popup-modal-header">
					<h3 class="modal-title"><?php _e('Content','devvn-image-hotspot')?></h3>
			  	</div>
		  		<div class="devvn-hotspot-popup-modal-body">
					<?php
                    add_filter( 'wp_default_editor', 'devvn_wp_default_editor' );
					$settings = array(
						'textarea_name'	=>	'pointdata[content][]',		
						'tabindex' => 4,
					      	'tinymce' => array(
						        'min_height'	=>	200,
								'toolbar1'		=>	'bold,italic,underline,bullist,numlist,link,unlink,forecolor,undo,redo,wp_more',
							),		
					);
					wp_editor($pointContent, 'point_content'.$countPoint, $settings);
					?>
					<div class="devvn_row">
						<div class="devvn_col_3">
							<label>Link to pins<br>
							<input type="text" name="pointdata[linkpins][]" value="<?php echo $pointLink?>" placeholder="Link to pins"/>
							</label><br>
							<label>Link target<br>
							<select name="pointdata[link_target][]">
							    <option value="_self" <?php selected('_self',$link_target);?>>Open curent window</option>
							    <option value="_blank" <?php selected('_blank',$link_target);?>>Open new window</option>
							</select>
							</label>

						</div>	
						<div class="devvn_col_3">
							<label><?php _e('Pin Image Custom','devvn-image-hotspot');?></label>
							<div class="svl-upload-image <?=($pins_image_custom)?'has-image':''?>">						
								<div class="view-has-value">
									<input type="hidden" name="pointdata[pins_image_custom][]" class="pins_image" value="<?php echo $pins_image_custom; ?>" />								
									<img src="<?=$pins_image_custom?>" class="image_view pins_img"/>									
									<a href="#" class="svl-delete-image">x</a>
								</div>
								<div class="hidden-has-value"><input type="button" class="button-upload button" value="<?php _e( 'Select pins', 'devvn-image-hotspot' )?>" /></div>
							</div>
						</div>
						<div class="devvn_col_3">
							<label><?php _e( 'Pins hover image custom', 'devvn-image-hotspot' )?></label>
							<div class="svl-upload-image <?=($pins_image_hover_custom)?'has-image':''?>">						
								<div class="view-has-value">
									<input type="hidden" name="pointdata[pins_image_hover_custom][]" class="pins_image_hover" value="<?php echo $pins_image_hover_custom; ?>" />								
									<img src="<?=$pins_image_hover_custom?>" class="image_view pins_img_hover"/>									
									<a href="#" class="svl-delete-image">x</a>
								</div>
								<div class="hidden-has-value"><input type="button" class="button-upload button" value="<?php _e( 'Select pins hover', 'devvn-image-hotspot' )?>" /></div>
							</div>
						</div>					
					</div>
					<div class="devvn_row">
						<div class="devvn_col_3">
							<label>Placement<br></label>
							<select name="pointdata[placement][]">
							    <?php
							    $allPlacement = array(
                                    'n' =>  'North',
                                    'e' =>  'East',
                                    's' =>  'South',
                                    'w' =>  'West',
                                    'nw' =>  'North West',
                                    'ne' =>  'North East',
                                    'sw' =>  'South West',
                                    'se' =>  'South East'
							    );
							    foreach ($allPlacement as $k=>$v){
                                ?>
							    <option value="<?php echo $k;?>" <?php selected($k,$placement)?>><?php echo $v;?></option>
							    <?php }?>
                            </select>
						</div>
						<div class="devvn_col_3">
							<label>Pins ID<br>
							<input type="text" name="pointdata[pins_id][]" value="<?php echo $pins_id?>" placeholder="Type a ID"/>
							</label>
                        </div>
                        <div class="devvn_col_3">
							<label>Pins Class<br>
							<input type="text" name="pointdata[pins_class][]" value="<?php echo $pins_class?>" placeholder="Ex: class_1 class_2 class_3"/>
							</label>
                        </div>
					</div>
					<p>
						<input type="hidden" name="pointdata[top][]" min="0" max="100" step="any" value="<?php echo $pointTop?>" />
					</p>
					<p>
						<input type="hidden" name="pointdata[left][]" min="0" max="100" step="any" value="<?php echo $pointLeft?>" />
					</p>
		  		</div>
			  	<div class="devvn-hotspot-popup-modal-footer">
					<button type="button" class="button button-danger button-large button_delete"><?php _e('Delete','devvn-image-hotspot')?></button>
					<button type="button" class="button button-primary button-large" data-popup-close="info_draggable<?php echo $countPoint?>"><?php _e('Done','devvn-image-hotspot')?></button>
			  	</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->		
	<?php		
	return ob_get_clean();
}

function devvn_ihotspot_get_pins_default($datapin = array()){
	if(!is_array($datapin)) $datapin = array();
	$datapin = wp_parse_args($datapin,unserialize(DEVVN_IHOTSPOT_PINS_DEFAULT));
	$countPoint = $datapin['countPoint'];
	$imgPin = $datapin['imgPoint'];
	$topPin = $datapin['top'];
	$leftPin = $datapin['left'];
	$pins_image_custom = $datapin['pins_image_custom'];
	if($pins_image_custom) $imgPin = $pins_image_custom;
	ob_start();
	?>
	<div id="draggable<?php echo $countPoint?>" data-points="<?php echo $countPoint?>" class="drag_element" <?php if($topPin && $leftPin):?> style="top:<?php echo $topPin?>%; left:<?php echo $leftPin?>%;"<?php endif;?>>
		<div class="point_style">		
			<a href="#" class="pins_click_to_edit" data-popup-open="info_draggable<?php echo $countPoint?>" data-target="#info_draggable<?php echo $countPoint?>">
				<img src="<?php echo $imgPin?>">
			</a>
		</div>
	</div>
	<?php
	return ob_get_clean();	
}
//Clone Point
add_action( 'wp_ajax_devvn_ihotspot_clone_point', 'devvn_ihotspot_clone_point_func' );
function devvn_ihotspot_clone_point_func() {
	if ( !wp_verify_nonce( $_REQUEST['nonce'], "maps_points_save_meta_box_data")) {
    	exit();
   	}   
	if(!is_user_logged_in()){
		wp_send_json_error();
	}
	$countPoint = intval($_POST['countpoint']);
	$imgPin = esc_url($_POST['img_pins']);
	$countPoint = (isset($countPoint) && !empty($countPoint)) ? $countPoint : mt_rand();
	$datapin = array(
		'countPoint'	=>	$countPoint,
		'imgPoint'		=>	$imgPin
	);
	$data_input = array(
		'countPoint'	=>	$countPoint,
	);
	wp_send_json_success(array(
		'point_pins'	=>	devvn_ihotspot_get_pins_default($datapin),
		'point_data'	=>	devvn_ihotspot_get_input_point_default($data_input)
	));
	die();
}

/*
 * by TanND
 * https://gist.github.com/levantoan/2a66dafad7a9a3a88468170ecce0cdab
 * */
function devvn_ihotspot_convert_array_data($inputArray = array()){
	$aOutput =  array();		
	$firstKey = null;
	foreach ($inputArray as $key => $value){
		$firstKey = $key;
		break;
	}
	$nCountKey = count($inputArray[$firstKey]);
	for ($i =0; $i<$nCountKey;$i++){
		$element = array();
		foreach ($inputArray as $key => $value){
			$element[$key] = wp_kses_post($value[$i]);
		}
		array_push($aOutput,$element);
	}
	return $aOutput;
}


<?php
/**
 * alvon functions and definitions
 *
 * @package alvon
 */
/*------------------------------------------------------------------------------------------------------------------*/
/*	Define
/*------------------------------------------------------------------------------------------------------------------*/

define("ALVON_CSS", get_template_directory_uri() . '/assets/css/');
define("ALVON_IMG", get_template_directory_uri() . '/assets/img/');
define("ALVON_JS", get_template_directory_uri() . '/assets/js/');
define("ALVON_INC", get_template_directory() . '/inc/');
define("ALVON_CORE", get_template_directory() . '/inc/core/');


/*------------------------------------------------------------------------------------------------------------------*/
/*	Require file list
/*------------------------------------------------------------------------------------------------------------------*/

require_once ALVON_CORE .'xtl-bs-themesetup.php';
require_once ALVON_CORE .'xtl-bs-scripts.php';



/*------------------------------------------------------------------------------------------------------------------*/
/*	Custom functions that act independently of the theme templates.
/*------------------------------------------------------------------------------------------------------------------*/
require_once ALVON_INC .'extras.php';
require_once ALVON_INC .'template-tags.php';
require_once ALVON_INC .'jetpack.php';
require_once ALVON_INC .'custom-header.php';
require_once ALVON_INC . 'tgmpa.php';
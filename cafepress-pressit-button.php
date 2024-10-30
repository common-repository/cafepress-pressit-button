<?php
/*
Plugin Name: Cafepress "Press It" Button
Plugin URI: http://pressit.cplaunchpad.com
Description: Add a Cafepress "Press It" button to your posts to allow your readers to easily create Cafepress products from your images.
Version: 0.1.1
Author: Richard Hurt
Author URI: http://pressit.cplaunchpad.com/about.html
License: GPLv2
*/
?>
<?php
/***************************
* Define Globals
***************************/

define('CP_BASE_NAME',      plugin_basename( __FILE__ ));
define('CP_BASE_DIR_SHORT', dirname( CP_BASE_NAME ));
define('CP_BASE_DIR_LONG',  dirname( __FILE__ ));
define('CP_INC_DIR',        CP_BASE_DIR_LONG . '/inc/');
define('CP_BASE_URL',       plugin_dir_url( __FILE__ ));
define('CP_IMAGES_URL',     CP_BASE_URL . 'img/');
define('CP_CSS_URL',        CP_BASE_URL . 'css/');
define('CP_JS_URL',         CP_BASE_URL . 'js/');

/***************************
* Includes
***************************/

require_once( CP_INC_DIR . 'admin-functions.php' );
require_once( CP_INC_DIR . 'page-functions.php' );
require_once( CP_INC_DIR . 'options-page.php' );
?>
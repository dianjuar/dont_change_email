<?php
/* 
Plugin Name: Don't Change Email
Description: Don't change the email of certain user roles
Plugin URI: https://github.com/dianjuar/dont_change_email
Version: 1.0.3
Author: Diego Juliao
Author URI: http://about.me/dianjuar
Text Domain: dont_change_email
Domain Path: /languages/
*/
# Exit if accessed directly
if (!defined('ABSPATH')) {
	exit;
}

if ( !class_exists('dont_change_email\controller') ) {
    # -------------------------------------  Define Constants ON   -------------------------------------
	define( 'DCE_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
	define( 'DCE_PLUGIN_DIRNAME', plugin_basename(dirname(__FILE__)));
	define( 'DCE_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
	define( 'DCE', 'dont_change_email' );
    # -------------------------------------  Define Constants OFF   ------------------------------------

    # plugin includes
	require_once(DCE_PLUGIN_DIR . '/includes/controller.php');
}
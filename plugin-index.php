<?php
/*
Plugin Name: New Plugin Name
Description: New plugin description
Version: 0.0
Author: [your name]
Author URI: [your uri]
*/
use \Aloo\WordPress\Core\Plugin;
use \Aloo\WordPress\Plugin\Your;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}
/**
 * Include autoloader
 */
include_once('plugin-loader.php');
/*
--------------------------------------
Define your plugin classes
--------------------------------------

1. The Activator should be an instance of Aloo\WordPress\Plugin\iActivator
2. The Plugin should be an instance of Aloo\WordPress\Plugin\iPlugin
*/
$activator = new Your\Activator();
$plugin = new Your\Plugin();
/*
--------------------------------------
Load the plugin
--------------------------------------
*/
Plugin\Loader::load(__FILE__, $plugin, $activator);
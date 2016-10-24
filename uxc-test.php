<?php

/**
 * @author David Fleming
 * @copyright 2016
 */

/*
	Plugin Name: UXC Test Plugin
	Description: This is for updating your Wordpress plugin.
	Version: 1.2.2
	Author: David Fleming
	Author URI: http://www.avude.com
*/
if( ! class_exists( 'UXC_Test_Updater' ) ){
	include_once( plugin_dir_path( __FILE__ ) . 'updater.php' );
}

$updater = new UXC_Test_Updater( __FILE__ );
$updater->set_username( 'avdude' );
$updater->set_repository( 'uxc-test-plugin' );
/*
	$updater->authorize( 'abcdefghijk1234567890' ); // Your auth code goes here for private repos
*/
$updater->initialize();

?>

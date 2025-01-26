<?php 
/*
Plugin name: smashing
Version: 1.2
Description: Making our own badges and updating product attributes

*/
 

if( ! class_exists( 'Smashing_Updater' ) ){
	include_once( plugin_dir_path( __FILE__ ) . 'updater.php' );
}

$updater = new Smashing_Updater( __FILE__ );
$updater->set_username('HelloDearSir');
$updater->set_repository('smashing-updater-plugin');
/*
	$updater->authorize( 'abcdefghijk1234567890' ); // Your auth code goes here for private repos
*/
$updater->initialize();

?>

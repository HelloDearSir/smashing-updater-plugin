<?php 
/*
Plugin name: smashing
Version: 1.2
Description: Making our own badges and updating product attributes

*/

if(!class_exists('Smashing_updater')) {{
    include( plugin_dir_path( __FILE__ ) . "updater.php");
}}

$updater = new Smashing_updater(__FILE__);
$updater->set_username('HelloDearSir');
$updater->set_repository('smashing-updater-plugin');
$updater->initialize();
?>

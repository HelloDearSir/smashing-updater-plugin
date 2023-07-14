<?php 
/*
Plugin name: smashing
*/

if(!class_exists('Smashing_updater')) {{
    include_once( plugin_dir_path( __FILE__ ) . "updater.php");
}}

$updater = new Smashing_updater(__FILE__);
$updater->set_username('HelloDearSir');
$updater->set_repository('smashing-updater-plugin');

$updater->initializse();
?>
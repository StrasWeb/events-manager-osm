<?php
/*
Plugin Name: Events Manager OSM
Plugin URI: https://github.com/StrasWeb/events-manager-osm
Description: Use OpenStreetMap in WordPress Events Manager
Author: StrasWeb
Version: 0.2.1
Author URI: https://strasweb.fr/
 */

use EventsManagerOsm\ScriptLoader;

require_once __DIR__.'/vendor/autoload.php';

if (function_exists('add_action')) {
    add_action('wp_enqueue_scripts', [ScriptLoader::class, 'init']);
}

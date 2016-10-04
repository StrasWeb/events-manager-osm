<?php
/**
 * Use OpenStreetMap in WordPress Events Manager.
 *
 * PHP Version 5.4
 *
 * @category Plugin
 *
 * @author   StrasWeb <contact@strasweb.fr>
 * @license  GPL http://www.gnu.org/licenses/gpl.html
 *
 * @link     https://github.com/StrasWeb/events-manager-osm
 */
/*
Plugin Name: Events Manager OSM
Plugin URI: https://github.com/StrasWeb/events-manager-osm
Description: Use OpenStreetMap in WordPress Events Manager
Author: StrasWeb
Version: 0.2.1
Author URI: https://strasweb.fr/
*/

require_once __DIR__.'/vendor/autoload.php';

add_action('wp_enqueue_scripts', ['EventsManagerOsm\ScriptLoader', 'init']);

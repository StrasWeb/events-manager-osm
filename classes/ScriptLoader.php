<?php

namespace EventsManagerOsm;

class ScriptLoader
{
    public static function init()
    {
        wp_enqueue_script(
            'events-manager-osm',
            plugin_dir_url(__FILE__).'../events-manager-osm.js',
            ['jquery']
        );
    }
}

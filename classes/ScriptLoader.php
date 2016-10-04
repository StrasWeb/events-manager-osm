<?php

namespace EventsManagerOsm;

class ScriptLoader
{
    public static function init()
    {
        wp_enqueue_script(
            'events-manager-osm',
            get_template_directory_uri().'/events-manager-osm.js',
            ['jquery']
        );
    }
}

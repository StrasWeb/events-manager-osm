<?php

namespace EventsManagerOsm\Test;

use EventsManagerOsm\ScriptLoader;
use WP_Mock;

class ScriptLoaderTest extends \PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
        WP_Mock::setUp();
        WP_Mock::wpFunction('wp_enqueue_style');
        WP_Mock::wpFunction('wp_enqueue_script');
        WP_Mock::wpFunction('plugin_dir_url');
        WP_Mock::wpFunction('wp_localize_script');
    }

    public function tearDown()
    {
        WP_Mock::tearDown();
    }

    public function testInit()
    {
        ScriptLoader::init();
    }
}

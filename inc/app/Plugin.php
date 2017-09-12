<?php
namespace Aloo\WordPress\Plugin\Your;

use \Aloo\WordPress\Core;

class Plugin extends Bootstrap\Base
{
    /**
     * Run front or admin plugin
     *
     * @return void
     */
    public function run()
    {
        $api = new Core\API\Load();
        /**
         * Determine bootsrap class
         */
        $plugin = $api->is_admin() ? new Bootstrap\Admin() : new Bootstrap\Front();
        /**
         * Apply config
         */
        $plugin->directory($this->directory());
        $plugin->url($this->url());
        /**
         * Run plugin
         */
        $plugin->run();
    }
}
<?php
namespace Aloo\WordPress\Plugin\Your\Bootstrap;

use \Aloo\WordPress\Core;
use \Aloo\WordPress\Plugin\Your\Constant;
use \Aloo\WordPress\Plugin\Your\Administration;

class Admin extends Base
{
    public function run()
    {
        $api = new Core\API\Plugin();
        /**
         * Menu items
         */
        $api->add_action(Core\API\Plugin\Action::ADMIN_MENU, [$this, 'registerMenus']);
        /**
         * Assets
         */
        $api->add_action(Core\API\Plugin\Action::ADMIN_ENQUEUE_SCRIPTS, [$this, 'loadAssets']);
    }
    /**
     * @description Add admin sub-menu
     */
    public function registerMenus()
    {
        $controller = new Administration\Batch();

        $api = new Core\API\Plugin();
        $api->add_menu_page(Constant::TITLE, Constant::TITLE, 'manage_options', Constant::NAME, [$controller, 'doSomething']);
    }

    public function loadAssets()
    {
        $styles = new Core\API\Styles();
        /**
         * Register styles
         */
        $styles->wp_register_style(Constant::NAME, $this->url() . '/assets/styles/admin.css', array(), Constant::VERSION);
        $styles->wp_enqueue_style(Constant::NAME);
        /**
         * Register scripts
         */
        $scripts = new Core\API\Scripts();
        $scripts->wp_register_script(Constant::NAME, $this->url() . '/assets/scripts/admin.js', array(), Constant::VERSION);
        $scripts->wp_enqueue_script(Constant::NAME);
    }
}
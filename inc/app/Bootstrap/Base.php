<?php
namespace Aloo\WordPress\Plugin\Your\Bootstrap;

use \Aloo\WordPress\Core;
use \Aloo\WordPress\Plugin\Your\Constant;

abstract class Base extends Core\Plugin\Base
{
    public function version()
    {
        return Constant::VERSION;
    }
}
<?php
/**
 * Locate autoload
 */
if (   file_exists( $composer_autoload = __DIR__ . '/vendor/autoload.php' ) /* check in self */
|| file_exists( $composer_autoload = WP_CONTENT_DIR.'/vendor/autoload.php') /* check in wp-content */
|| file_exists( $composer_autoload = WP_CONTENT_DIR.'/../../vendor/autoload.php') /* check in plugin directory */
) {
$loader = (include $composer_autoload);
$loader->setPsr4("Aloo\\WordPress\\Core\\", implode('/', array(__DIR__, 'inc', 'lib', 'WordPress', 'Core')));
$loader->setPsr4("Aloo\\WordPress\\Plugin\\Your\\", implode('/', array(__DIR__, 'inc', 'app')));
}
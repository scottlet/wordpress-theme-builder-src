<?php
/**
* wordpress-theme-builder functions and definitions
*
* @link https://developer.wordpress.org/themes/basics/theme-functions/
*
* @package wordpress-theme-builder
*/
$version = wp_get_theme()['Version'];
$template_location = get_template_directory_uri();
$environment = getenv("APPLICATION_ENV");


require get_template_directory() . '/inc/scripts.php';
/**
* Load functions to secure your WP install.
*/

require get_template_directory() . '/inc/security.php';

/**
* Scripts
*/
require get_template_directory() . '/inc/wptb-custom.php';
console_log($version);
if ($environment == "development") {
    remove_filter('template_redirect', 'redirect_canonical');
}

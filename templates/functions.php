<?php
/**
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package wordpress-theme-builder
*/
$version = wp_get_theme()['Version'];
$template_location_uri = get_template_directory_uri();
$template_location = get_template_directory();
$environment = getenv("APPLICATION_ENV");


require $template_location . '/inc/scripts.php';
/**
* Load functions to secure your WP install.
*/

require $template_location . '/inc/security.php';

/**
* Scripts
*/
require $template_location . '/inc/wptb-custom.php';
console_log($version);
if ($environment == "development") {
    remove_filter('template_redirect', 'redirect_canonical');
}

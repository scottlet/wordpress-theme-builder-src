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

add_filter('script_loader_tag', 'wptb_defer_attribute', 10, 3);
add_action('wp_enqueue_scripts', 'wptb_scripts', 1);
add_action('admin_enqueue_scripts', 'wptb_admin_scripts', 1);
add_action('wp_footer', 'wptb_deregister_scripts');
add_action('wp_footer', 'print_log');
add_action('admin_footer', 'print_log');

<?php
// phpcs:disable PSR1.Files.SideEffects
function wptb_block_category($categories, $post)
{
    return array_merge(
        $categories,
        array(
            array(
                'slug' => 'wordpress-theme-builder',
                'title' => __('Wordpress Theme Builder', 'wordpress-theme-builder'),
            ),
        )
    );
}
global $version;
global $template_location_uri;
global $environment;

if (!function_exists('register_block_type')) {
        // Gutenberg is not active.
        return;
}

add_action('admin_enqueue_scripts', 'template_path', 1);

function template_path()
{
    global $template_location_uri;
    echo "<script>";
    echo "var blockData = blockData || {};";
    echo "blockData.templateLocationURI = '".$template_location_uri."';";
    echo "</script>";
}

function block_scripts()
{
    global $template_location_uri;
    global $version;
    global $environment;
    $ver = null;
    $date = new DateTime();

    if ($environment == 'development') {
            $ver = date_timestamp_get($date);
    }
    wp_register_script(
        'blocks-js',
        $template_location_uri . '/js/blocks-'. $version .'.min.js',
        array( 'wp-blocks', 'wp-i18n', 'wp-element', 'wp-editor', 'wp-data', 'wp-date', 'wp-wordcount' ),
        $ver
    );

    wp_register_style(
        'blocks-css',
        $template_location_uri . '/css/editor-'. $version .'.min.css',
        null,
        $ver
    );
}

add_filter('block_categories', 'wptb_block_category', 10, 2);
add_filter('enqueue_block_editor_assets', 'block_scripts', 10);

require $template_location . '/inc/blocks/dummyBlock.php';

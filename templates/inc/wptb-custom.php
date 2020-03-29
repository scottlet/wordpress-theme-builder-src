<?php
// phpcs:disable PSR1.Files.SideEffects

function console_log($data)
{

    global $console_logs;
    $bt = debug_backtrace();
    $my_caller = array_shift($bt);

    $file = $my_caller['file'];
    $line = $my_caller['line'];
    //Collect logs and print them at the end

    $console_logs[] = 'console.log('.json_encode($data).', \''.basename($file).':'.json_encode($line).'\');';
}

function print_log()
{
    global $console_logs;
    if (empty($console_logs)) {
        return '';
    }
    $output = 'console.warn("<PHP_Log>");';
    $output .= implode(' ', $console_logs);
    $output .= 'console.warn("</PHP_Log>");';
    $output = sprintf('<script>%s</script>', $output);
    echo $output;
}

if (function_exists('add_theme_support')) {
    add_theme_support('title-tag');
    add_image_size('square-large', 640, 640, true); // name, width, height, crop
    add_image_size('bigger1', 1440, 960, true); // name, width, height, crop
    add_image_size('bigger2', 1920, 1080, true); // name, width, height, crop
    add_image_size('bigger3', 2048, 1200, false);
    add_image_size('bigger4', 1920, 1125, false);
    add_image_size('bigger5', 1440, 844, false);
    add_image_size('bigger6', 1440, 844, false);
    add_image_size('bigger7', 1366, 800, false);
    add_image_size('chapter', 800, 800);
    add_image_size('bigger8', 640, 375, false);
    add_filter('image_size_names_choose', 'my_image_sizes');
    add_theme_support('post-thumbnails', array('page', 'post'));
    add_theme_support('align-wide');
    add_theme_support('wp-block-styles');
    add_theme_support('dark-editor-style');
    add_theme_support('responsive-embeds');
    add_theme_support('editor-color-palette');
    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        )
    );
}

function my_image_sizes($sizes)
{
    $addsizes = array(
        "square-large" => __("Large square image")
    );
    $newsizes = array_merge($sizes, $addsizes);
    return $newsizes;
}

/**
 * Set max srcset image width to 1800px
 */
function remove_max_srcset_image_width($max_width)
{
    return false;
}
add_filter('max_srcset_image_width', 'remove_max_srcset_image_width');

console_log('This log is from PHP and appears in the browser\'s console.');

<?php
// phpcs:disable PSR1.Files.SideEffects

function console_log($data)
{

    global $console_logs;
    // Buffering to solve problems frameworks, like header() in this and not a solid return.

    $console_logs[] = 'console.log(' . json_encode($data) . ');';
}

function print_log()
{
    global $console_logs;
    if (empty($console_logs)) {
        return '';
    }
    $output = 'console.warn("PHP Log");';
    $output .= implode(' ', $console_logs);
    $output = sprintf('<script>%s</script>', $output);
    echo $output;
}
add_action('wp_footer', 'print_log');
add_action('admin_footer', 'print_log');

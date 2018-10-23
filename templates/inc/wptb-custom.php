<?php

function console_log($data)
{

    global $console_logs;
    //Collect logs and print them at the end

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

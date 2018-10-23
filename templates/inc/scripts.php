<?php
/**
 * Enqueue scripts and styles.
 * @@@name@@@ is replaced at run/build time by gulp with the name in options.js.
 */
function wptb_scripts()
{
    global $version;
    global $template_location_uri;
    global $environment;

    $ver = null;
    $date = new DateTime();
    if ($environment == 'development') {
        $ver = date_timestamp_get($date);
    }

    wp_enqueue_style(
        'wptb-style',
        $template_location_uri. '/css/@@@name@@@-'. $version .'.min.css',
        null,
        $ver
    );
    wp_enqueue_script(
        'wptb-js',
        $template_location_uri . '/js/@@@name@@@-'. $version .'.min.js',
        null,
        $ver,
        true
    );

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}

function wptb_defer_attribute($tag, $handle)
{
    if ('wptb-js' !== $handle) {
        return $tag;
    }
    return str_replace(' src', ' defer="defer" src', $tag);
}

function wptb_deregister_scripts()
{
    wp_deregister_script('wp-embed');
}

/*
Removes the generator tag with WP version numbers. Hackers can use this to find weak and old WP installs
*/
function wptb_remove_generator()
{
    return '';
}

/*
Show less info to users on failed login for security reasons.
(Will not let a valid username be known.)
*/
function show_less_login_info()
{
    return "<strong>ERROR</strong>: Incorrect username or password";
}

<?php
/**
 * Main template file
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wordpress-theme-builder
 */

get_header();
if (have_posts()) {
    if (is_home() && ! is_front_page()) {
        single_post_title();
    }

    while (have_posts()) {
        the_post();
        the_content();
    }
    the_posts_navigation();
} else {
    // No posts
}

get_footer();

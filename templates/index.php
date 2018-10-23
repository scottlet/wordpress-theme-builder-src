<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
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

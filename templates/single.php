<?php
/**
 * Template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package wordpress-theme-builder
 */

get_header();
while (have_posts()) {
    the_post();

    the_title();
    the_content();

    the_post_navigation();

    if (comments_open() || get_comments_number()) {
        comments_template();
    }
}
get_sidebar();
get_footer();

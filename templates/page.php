<?php
/**
 * Template for displaying all pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wordpress-theme-builder
 */

get_header();
while (have_posts()) {
    the_post();
    the_content();
    // If comments are open or we have at least one comment, load up the comment template.
    if (comments_open() || get_comments_number()) {
        comments_template();
    };
}
get_sidebar();
get_footer();

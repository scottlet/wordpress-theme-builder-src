<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package wordpress-theme-builder
 */

get_header();
if (have_posts()) {
    get_search_query();
    while (have_posts()) {
        the_post();
    }
    the_posts_navigation();
} else {
    // No results
}

get_sidebar();
get_footer();

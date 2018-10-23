<?php
/**
 * Display comments
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wordpress-theme-builder
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if (post_password_required()) {
    return;
}
?>

    <?php
    // You can start editing here -- including this comment!
    if (have_comments()) {
        get_the_title();
        the_comments_navigation();
        wp_list_comments(array(
            'style'      => 'ol',
            'short_ping' => true,
        ));
        the_comments_navigation();
    }; // Check for have_comments().
    comment_form();

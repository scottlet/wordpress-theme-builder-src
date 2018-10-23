<?php
/**
 * Display an archive page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wordpress-theme-builder
 */

get_header();
if (have_posts()) {
    ?>
    <?php
    while (have_posts()) {
            the_post();
    }
} else {
}
?>
</main>

<?php
get_footer();

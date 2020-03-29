<?php
// phpcs:disable PSR1.Files.SideEffects
/**
 *
 * @package wordpress-theme-builder
 */

defined('ABSPATH') || exit;

/**
 * Registers all block assets so that they can be enqueued through Gutenberg in
 * the corresponding context.
 *
 */
function wptb_dummy_block()
{
    register_block_type('wordpress-theme-builder/dummy-block', array(
        'editor_script' => 'blocks-js',
        'editor_style' => 'blocks-css'
    ));
}

add_action('init', 'wptb_dummy_block', 10);

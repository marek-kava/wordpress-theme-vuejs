<?php

require_once(get_template_directory()."/backend/admin/Pages/PageController.php");

// Initialization MetaBoxes
(new PageController())->initializeMetaBoxes();

/**
 * Disable Gutenberg
 */
add_filter('use_block_editor_for_post', '__return_false');

/**
 * Hide standard WYSIWYG editor
 */
function hide_wysiwyg_editor()
{
    remove_post_type_support('page', 'editor');
}

add_action('init', 'hide_wysiwyg_editor', 100);
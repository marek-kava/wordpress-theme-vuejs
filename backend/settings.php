<?php

// Remove WP redirects
remove_action('template_redirect', 'redirect_canonical');

// Create main redirect
add_action('init', function () {
    add_rewrite_rule('^/(.+)/?', 'index.php', 'top');
});

/**
 * Init styles
 */
function initializationStyles()
{
    wp_enqueue_script(
        'index-js',
        get_stylesheet_directory_uri().'/frontend/dist/js/app.js',
        null,
        filemtime(get_stylesheet_directory().'/frontend/dist/js/app.js'),
        true
    );
    wp_enqueue_script(
        'chunk-vendors-js',
        get_stylesheet_directory_uri().'/frontend/dist/js/chunk-vendors.js',
        null,
        filemtime(get_stylesheet_directory().'/frontend/dist/js/chunk-vendors.js'),
        true
    );
    wp_enqueue_style(
        'index-css',
        get_stylesheet_directory_uri().'/frontend/dist/css/app.css',
        null,
        filemtime(get_stylesheet_directory().'/frontend/dist/css/app.css')
    );
    wp_enqueue_style(
        'chunk-vendors-css',
        get_stylesheet_directory_uri().'/frontend/dist/css/chunk-vendors.css',
        null,
        filemtime(get_stylesheet_directory().'/frontend/dist/css/chunk-vendors.css')
    );
}
add_action('wp_enqueue_scripts', 'initializationStyles', 100);
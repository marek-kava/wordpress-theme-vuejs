<?php

remove_action('template_redirect', 'redirect_canonical');

add_action('init', function () {
    add_rewrite_rule('^/(.+)/?', 'index.php', 'top');
});

function initializationStyles()
{
    wp_enqueue_script(
        'index-js',
        get_stylesheet_directory_uri().'/dist/js/index.js',
        null,
        filemtime(get_stylesheet_directory().'/dist/js/index.js'),
        true
    );
    wp_enqueue_script(
        'chunk-vendors-js',
        get_stylesheet_directory_uri().'/dist/js/chunk-vendors.js',
        null,
        filemtime(get_stylesheet_directory().'/dist/js/chunk-vendors.js'),
        true
    );
    wp_enqueue_style(
        'index-css',
        get_stylesheet_directory_uri().'/dist/css/index.css',
        null,
        filemtime(get_stylesheet_directory().'/dist/css/index.css')
    );
    wp_enqueue_style(
        'chunk-vendors-css',
        get_stylesheet_directory_uri().'/dist/css/chunk-vendors.css',
        null,
        filemtime(get_stylesheet_directory().'/dist/css/chunk-vendors.css')
    );
}

add_action('wp_enqueue_scripts', 'initializationStyles', 100);
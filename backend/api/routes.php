<?php

require_once(get_template_directory()."/backend/Controllers/PageController.php");
require_once(get_template_directory()."/backend/Controllers/PostController.php");

// Define routes
const ROUTES = [
    [
        'route'      => '/pages',
        'type'       => 'GET',
        'namespace'  => 'api',
        'controller' => 'Controllers\PageController',
        'method'     => 'getPages',
    ],
    [
        'route'      => '/page/(?P<id>\d+)',
        'type'       => 'GET',
        'namespace'  => 'api',
        'controller' => 'Controllers\PageController',
        'method'     => 'getPage',
    ],
    [
        'route'      => '/posts',
        'type'       => 'GET',
        'namespace'  => 'api',
        'controller' => 'Controllers\PostController',
        'method'     => 'getPosts',
    ],
    [
        'route'      => '/post/(?P<slug>[a-zA-Z0-9-]+)',
        'type'       => 'GET',
        'namespace'  => 'api',
        'controller' => 'Controllers\PostController',
        'method'     => 'getPost',
    ],
];

/**
 * Register routes
 */
add_action('rest_api_init', function () {
    foreach (ROUTES as $route) {
        register_rest_route($route['namespace'], $route['route'], [
            'methods'  => $route['type'],
            'callback' => [
                $route['controller'],
                $route['method'],
            ],
        ]);
    }
}
);



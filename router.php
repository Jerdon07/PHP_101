<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path']; // URI Parsing

$routes = [ // Routes Declaration
    '/PHP_101/' => 'controllers/index.php',
    '/PHP_101/about' => 'controllers/about.php',
    '/PHP_101/notes' => 'controllers/notes.php',
    '/PHP_101/contact' => 'controllers/contact.php',
];

function routeToController($uri, $routes) { // Function to Handle Routing
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        abort();
    }
}

function abort($code = 404) { // Option to Abort with Different Status Codes
    http_response_code($code);
    
    require "views/{$code}.php";

    die();
}

routeToController($uri, $routes);
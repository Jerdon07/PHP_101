<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path']; // Gives the URI, ignoring the query string

$routes = require 'routes.php';

function routeToController($uri, $routes) { // Decides which controller to Load based on the URI
    if (array_key_exists($uri, $routes)) { // Check if the route exists
        require $routes[$uri]; // It finds the key inside the routes array
    } else {
        abort();
    }
}

function abort($code = 404) { // Abort if route doesn't exist
    http_response_code($code);
    
    require "views/{$code}.php";
    die();
}

routeToController($uri, $routes);
<?php
if (! defined('BASEPATH')) {
    exit('No direct script access allowed');
}


if (! function_exists('check_if_uri_matches_routes')) {
    function check_if_uri_matches_routes($uri, $routes)
    {
        if ($routes && $uri) {
            foreach ($routes as $key => $route) {
                $route_with_converted_wildcard = str_replace([':any', ':num'], ['[^/]+', '[0-9]+'], $route);
                if (preg_match('#^' . $route_with_converted_wildcard . '$#', $uri, $matches) || preg_match('/' . str_replace('/', '\/', $route) . '/', $uri, $matches)) {
                    return true;
                }
            }
        } else {
            return false;
        }
    }
}

<?php

function myRouter(string $url, array $routes)
{
    foreach ($routes as $route) {
        if ($route['path'] === $url) {
            require_once $route['view'];
            exit;
        }
    }
    require 'src/view/404.php';
}

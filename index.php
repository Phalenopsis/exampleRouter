<?php
require_once 'functions.php';
$url = $_SERVER['REQUEST_URI'];

$routes = [
    ['path' => '/contact', 'view' => 'src/view/contact.php'],
    ['path' => '/', 'view' => 'src/view/home.php'],
    ['path' => '/article', 'view' => 'src/view/article.php']
];

myRouter($url, $routes);

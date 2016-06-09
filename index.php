<?php

require('vendor/autoload.php');
include('routes.php');

session_start();

$default_route = $routes['default'];
$route_parts = explode('/', $default_route);

$method = $_SERVER['REQUEST_METHOD'];
$a = isset($_REQUEST['a']) ? $_REQUEST['a'] : $route_parts[1];
$r = isset($_REQUEST['r']) ? $_REQUEST['r'] : $route_parts[2];

if (!in_array($method . '/' . $a . '/' . $r, $routes)) {
    die (header('Location:views/404.php'));
}

$controller_name = 'Controllers\\' . ucfirst($r) . 'Controller';
$container = new \Illuminate\Container\Container();
$controller = $container->make($controller_name);
$data = call_user_func([$controller, $a]);

include('views/layout.php');

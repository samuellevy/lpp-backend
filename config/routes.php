<?php
use Cake\Core\Plugin;
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
use Cake\Routing\Route\DashedRoute;

Router::defaultRouteClass(DashedRoute::class);

Router::prefix('admin', function ($routes) {
    $routes->fallbacks('InflectedRoute');
    $routes->connect('/', ['controller' => 'pages', 'action' => 'index']);
});

Router::scope('/', function (RouteBuilder $routes) {
    $routes->connect('/', ['controller' => 'pages', 'action' => 'view','home']);
    $routes->connect('/:slug', ['controller' => 'pages', 'action' => 'view'],['pass' => ['slug']]);
    $routes->connect('/resultado', ['controller' => 'pages', 'action' => 'results']);
    $routes->connect('/page/:slug', ['controller' => 'pages', 'action' => 'view'],['pass' => ['slug']]);

    $routes->connect('/ler/:slug', ['controller' => 'pages', 'action' => 'news'],['pass' => ['slug']]);
    
    $routes->connect('/bairros', ['controller' => 'pages', 'action' => 'bairros']);
    $routes->fallbacks(DashedRoute::class);
});

Plugin::routes();

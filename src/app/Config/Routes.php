<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'LoginController::index');
$routes->get('/login', 'LoginController::index');
$routes->get('about', 'AboutController::index');
$routes->group('admin', static function ($routes) {
    $routes->get('dashboard', 'Madmin\DashboardController::index');
    $routes->get('dashboard/news', 'Madmin\DashboardController::news');
    $routes->get('dashboard/category', 'Madmin\DashboardController::category');
    $routes->get('login', 'Madmin\AuthController::index');
});

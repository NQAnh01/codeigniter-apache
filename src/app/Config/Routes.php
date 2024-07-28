<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// $routes->get('/', 'LoginController::index');
$routes->get('/login', 'LoginController::index');

$routes->group('admin', static function ($routes) {
    $routes->get('dashboard', 'Madmin\DashboardController::renderDashboard');
    $routes->get('login', 'Madmin\AuthController::login');
    $routes->get('logout', 'Madmin\AuthController::logout');
});
$routes->post('admin/loginSubmit', 'Madmin\AuthController::loginSubmit');
$routes->get('db', 'CheckDB::index');


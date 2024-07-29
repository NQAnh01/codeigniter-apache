<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// $routes->get('/', 'LoginController::index');
$routes->get('login', 'LoginController::index');
$routes->post('admin/loginSubmit', 'Madmin\AuthController::loginSubmit');

$routes->group('admin', ['filter' => 'AuthentiactionFilter'], static function ($routes) {
    $routes->get('dashboard', 'Madmin\DashboardController::renderDashboard');
    $routes->get('dashboard/galley', 'Madmin\DashboardController::renderGalley');
    $routes->get('logout', 'Madmin\AuthController::logout');
    $routes->get('view-session', 'ViewSessionController::viewSession');

});

$routes->group('admin', static function ($routes) {
    $routes->get('db', 'CheckDB::index');
    $routes->get('login', 'Madmin\AuthController::login');
});
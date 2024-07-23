<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'LoginController::index');
$routes->get('/login', 'LoginController::index');
$routes->get('about', 'AboutController::index');
$routes->get('dashboard', 'DashboardController::index');
$routes->get('admin/login', 'Madmin\AuthController::index');

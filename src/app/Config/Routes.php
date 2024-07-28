<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// $routes->get('/', 'LoginController::index');
$routes->get('login', 'LoginController::index');
$routes->post('admin/loginSubmit', 'Madmin\AuthController::loginSubmit');
$routes->get('db', 'CheckDB::index');

// Áp dụng filter `auth` cho toàn bộ nhóm route `admin` ngoại trừ các route đăng nhập và đăng xuất
$routes->group('admin', ['filter' => 'AuthentiactionFilter'], static function ($routes) {
    $routes->get('dashboard', 'Madmin\DashboardController::renderDashboard');
});

// Nhóm các route `admin` không yêu cầu filter `auth`
$routes->group('admin', static function ($routes) {
    $routes->get('login', 'Madmin\AuthController::login');
    $routes->get('logout', 'Madmin\AuthController::logout');
});
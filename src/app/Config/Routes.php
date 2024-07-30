<?php

use App\Filters\AuthenticationFilter;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Farm\MainController::index');

$routes->get('admin/login', 'Madmin\AuthController::login', ['as'=>'admin.login']);
$routes->post('admin/login', 'Madmin\AuthController::attemptLogin');

$routes->group('admin', ['filter'=>AuthenticationFilter::class], function ($routes) {
    $routes->get("", function () {
        return redirect()->route('admin.dashboard');
    });
    $routes->get('logout', 'Madmin\AuthController::logout', ['as'=>'admin.logout']);
    $routes->get('dashboard', 'Madmin\DashboardController::index', ['as'=>'admin.dashboard']);
    
    $routes->group('users', function ($routes) {
        $routes->get('', 'Madmin\UserController::index', ['as'=>'admin.users']);
        $routes->get('create', 'Madmin\UserController::create', ['as'=>'admin.users.create']);
        $routes->post('create', 'Madmin\UserController::storage', ['as'=>'admin.users.createUser']);
        $routes->get('edit/(:num)', 'Madmin\UserController::edit/$1', ['as'=>'admin.users.edit']);
        $routes->put('edit/(:num)', 'Madmin\UserController::update/$1');
        $routes->delete('delete/(:num)', 'Madmin\UserController::destroy/$1', ['as'=>'admin.users.destroy']);
    });
});

<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'BerandaController::index');

// route admin dashboard
$routes->get('dashboard', 'Admin\DashboardController::index');

// route admin data_satuvisi(data aspirasi)
$routes->get('data_satuvisi', 'Admin\DatasatuvisiController::index');

// route admin data(data laporan)
$routes->get('data', 'Admin\DatasatuvisiController2::index2');

// route beranda
//$routes->get('beranda', 'BerandaController::index');

// route tampilan login
$routes->get('auth', 'LoginController::login');

//route tampilan register
$routes->get('register', 'RegisterController::register');

$routes->get('Berita', 'Berita1Controller::berita1');

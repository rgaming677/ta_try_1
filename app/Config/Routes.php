<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Admin\DashboardController::index');

// route admin dashboard
$routes->get('dashboard', 'Admin\DashboardController::index');

// route admin data_satuvisi(data aspirasi)
$routes->get('data_satuvisi', 'Admin\DatasatuvisiController::index');

// route admin data(data laporan)
$routes->get('data', 'Admin\DatasatuvisiController2::index2');

// route beranda
$routes->get('beranda', 'BerandaController::index');

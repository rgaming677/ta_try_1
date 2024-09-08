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

//Anggota
$routes->get('anggota', 'Admin\AnggotaController::anggota');

//Upload Berita
$routes->get('upber', 'Admin\UpberitaController::uploadberita');

//Upload dokumentasi
$routes->get('updoc', 'Admin\UpdocController::uploaddoc');

// route beranda
//$routes->get('beranda', 'BerandaController::index');

// route tampilan login
$routes->get('auth', 'LoginController::login');

//route tampilan register
$routes->get('register', 'RegisterController::register');

// route tampilan berita 1
$routes->get('Berita', 'Berita1Controller::berita1');

// route tampilan berita 2
$routes->get('Berita2', 'Berita2Controller::berita2');

// route tampilan berita 2
$routes->get('Berita3', 'Berita3Controller::berita3');

$routes->get('Laporan', 'LaporanController::laporan');

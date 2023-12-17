<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::dashboard');
$routes->get('/dashboard/penggunahome', 'Home::dashboard_pengguna');

$routes->get('/admin', 'AdminController::show');
$routes->get('/admin/form', 'AdminController::form');
$routes->get('/admin/edit/(:num)', 'AdminController::edit/$1');
$routes->post('/admin/Save', 'AdminController::create');

$routes->get('/pengguna', 'PenggunaController::show');
$routes->get('/pengguna/form', 'PenggunaController::form');
$routes->get('/pengguna/edit/(:num)', 'PenggunaController::edit/$1');
$routes->post('/pengguna/Save', 'PenggunaController::create');

$routes->get('/barang', 'BarangController::show');
$routes->get('/barang/form', 'BarangController::form');
$routes->get('/barang/edit/(:num)', 'BarangController::edit/$1');
$routes->post('/barang/Save', 'BarangController::create');

$routes->get('/grooming', 'GroomingController::show');
$routes->get('/grooming/form', 'GroomingController::form');
$routes->get('/grooming/edit/(:num)', 'GroomingController::edit/$1');
$routes->post('/grooming/Save', 'GroomingController::create');

$routes->get('/dokter', 'DokterController::show');
$routes->get('/dokter/form', 'DokterController::form');
$routes->get('/dokter/edit/(:num)', 'DokterController::edit/$1');
$routes->post('/dokter/Save', 'DokterController::create');

$routes->get('/pbarang', 'PbarangController::show');
$routes->get('/pbarang/form', 'PbarangController::form');
$routes->get('/pbarang/edit/(:num)', 'PbarangController::edit/$1');
$routes->post('/pbarang/Save', 'PbarangController::create');

$routes->get('/pgrooming', 'PgroomingController::show');
$routes->get('/pgrooming/form', 'PgroomingController::form');
$routes->get('/pgrooming/edit/(:num)', 'PgroomingController::edit/$1');
$routes->post('/pgrooming/Save', 'PgroomingController::create');

$routes->get('/pdokter', 'PdokterController::show');
$routes->get('/pdokter/form', 'PdokterController::form');
$routes->get('/pdokter/edit/(:num)', 'PdokterController::edit/$1');
$routes->post('/pdokter/Save', 'PdokterController::create');

$routes->get('/login','LoginController::form');
$routes->post('/login','LoginController::login');
$routes->get('/logout','LoginController::logout');

$routes->get('/dokterAGT', 'AGTdoktercontroller::show');

$routes->get('/pbarangAGT', 'AGTpbarangcontroller::show');

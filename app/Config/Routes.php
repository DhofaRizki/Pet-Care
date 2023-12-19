<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::dashboard');
$routes->get('/dashboard/penggunahome', 'Home::dashboard_pengguna');
$routes->get('/dashboard/maintenance', 'Home::maintenance');

$routes->get('/admin', 'AdminController::show');
$routes->get('/admin/form', 'AdminController::form');
$routes->get('/admin/edit/(:num)', 'AdminController::edit/$1');
$routes->post('/admin/Save', 'AdminController::create');
$routes->post('/admin/delete', 'AdminController::delete');

$routes->get('/pengguna', 'PenggunaController::show');
$routes->get('/pengguna/form', 'PenggunaController::form');
$routes->get('/pengguna/edit/(:num)', 'PenggunaController::edit/$1');
$routes->post('/pengguna/Save', 'PenggunaController::create');
$routes->post('/pengguna/delete', 'PenggunaController::delete');

$routes->get('/barang', 'BarangController::show');
$routes->get('/barang/form', 'BarangController::form');
$routes->get('/barang/edit/(:num)', 'BarangController::edit/$1');
$routes->post('/barang/Save', 'BarangController::create');
$routes->post('/barang/delete', 'BarangController::delete');
$routes->get('/barang/foto/(:num).png', 'BarangController::foto/$1');

$routes->get('/grooming', 'GroomingController::show');
$routes->get('/grooming/form', 'GroomingController::form');
$routes->get('/grooming/edit/(:num)', 'GroomingController::edit/$1');
$routes->post('/grooming/Save', 'GroomingController::create');
$routes->post('/grooming/delete', 'GroomingController::delete');
$routes->get('/grooming/foto/(:num).png', 'Grooming::foto/$1');

$routes->get('/dokter', 'DokterController::show');
$routes->get('/dokter/form', 'DokterController::form');
$routes->get('/dokter/edit/(:num)', 'DokterController::edit/$1');
$routes->post('/dokter/Save', 'DokterController::create');
$routes->post('/dokter/delete', 'DokterController::delete');
$routes->get('/dokter/foto/(:num).png', 'Dokter::foto/$1');

$routes->get('/pbarang', 'PbarangController::show');
$routes->get('/pbarang/form', 'PbarangController::form');
$routes->get('/pbarang/edit/(:num)', 'PbarangController::edit/$1');
$routes->post('/pbarang/Save', 'PbarangController::create');
$routes->post('/pbarang/delete', 'PbarangController::delete');

$routes->get('/pgrooming', 'PgroomingController::show');
$routes->get('/pgrooming/form', 'PgroomingController::form');
$routes->get('/pgrooming/edit/(:num)', 'PgroomingController::edit/$1');
$routes->post('/pgrooming/Save', 'PgroomingController::create');
$routes->post('/pgrooming/delete', 'PgroomingController::delete');

$routes->get('/pdokter', 'PdokterController::show');
$routes->get('/pdokter/form', 'PdokterController::form');
$routes->get('/pdokter/edit/(:num)', 'PdokterController::edit/$1');
$routes->post('/pdokter/Save', 'PdokterController::create');
$routes->post('/pdokter/delete', 'PdokterController::delete');

$routes->get('/login','LoginController::form');
$routes->post('/login','LoginController::login');
$routes->get('/logout','LoginController::logout');
$routes->get('/signup/form','LoginController::signup');
$routes->post('/signup/Save','SignupController::create');


$routes->get('/pgnbarang/tampildata', 'PgnbarangController::show');

$routes->get('/pgndokter/tampildata', 'PgndokterController::show');

$routes->get('/pgngrooming/tampildata', 'PgngroomingController::show');

$routes->get('/portofolio/barang', 'PortofolioController::show');
$routes->get('/portofolio/dokter', 'PortofolioController::shows');
$routes->get('/portofolio/grooming', 'PortofolioController::showss');
<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Login::index');
$routes->get('/auth/login', 'Login::index');
$routes->get('/auth/register', 'Login::register');
// $routes->get('/auth/forgot', 'Login::forgot');
$routes->post('/', 'Home::index'); 
$routes->get('/home', 'Home::index');   

$routes->get('/pages/daftarks', 'Daftarks::index'); 
$routes->post('/pages/daftarks', 'Daftarks::index');
$routes->post('/daftarks/save', 'Daftarks::save');

$routes->get('/pages/daftarksout', 'Daftarksout::index');

$routes->get('/progress/(:num)', 'Progress::index/$1');
$routes->get('/progress/(:segment)', 'Progress::index/$1');


// routes ADMIN
$routes->get('/pages/admin/statusvm', 'Admin\Statusvm::index');
$routes->post('/pages/admin/statusvm/', 'Admin\Statusvm::index');
$routes->delete('/admin/statusvm/(:num)', 'Admin\Statusvm::delete/$1');

$routes->get('/pages/admin/verifikasim/(:num)', 'Admin\Verifikasim::edit/$1');
$routes->post('/pages/admin/verifikasim/update', 'Admin\Verifikasim::update');

$routes->get('/pages/admin/statusr', 'Admin\Statusr::index');
$routes->post('/pages/admin/statusr', 'Admin\Statusr::index');
$routes->get('/admin/statusr/(:num)', 'Admin\Statusr::edit/$1');
$routes->delete('/admin/statusr/(:num)', 'Admin\Statusr::delete/$1');
$routes->get('/admin/statusr/chart-data', 'Admin\Statusr::getChartData');
$routes->get('/admin/statusr/getChartData', 'Admin\Statusr::getChartData');


$routes->get('/pages/admin/uploadmemo/(:num)', 'Admin\Uploadmemo::edit/$1');
$routes->post('/pages/admin/uploadmemo/update', 'Admin\Uploadmemo::update');

$routes->get('/pages/admin/kegiatan', 'Admin\Kegiatan::index'); 
$routes->post('/pages/admin/kegiatan/save', 'Admin\Kegiatan::save'); 

$routes->get('/pages/admin/kegiatan_edit', 'Admin\Kegiatan_edit::index'); 
$routes->post('/pages/admin/kegiatan_edit', 'Admin\Kegiatan_edit::index');  
$routes->delete('/admin/kegiatan_edit/(:num)', 'Admin\Kegiatan_edit::delete/$1'); 

// routes SES
$routes->get('/pages/ses/uploaddok', 'Ses\Uploaddok::index');
$routes->post('/pages/ses/uploaddok', 'Ses\Uploaddok::index');
$routes->post('/uploaddok/save', 'Ses\Uploaddok::save');

$routes->get('/pages/ses/statusvd', 'Ses\Statusvd::index');
$routes->post('/pages/ses/statusvd', 'Ses\Statusvd::index');
$routes->post('/ses/statusvd/verify/(:num)', 'Ses\Statusvd::verify/$1');
$routes->delete('/ses/statusvd/(:num)', 'Ses\Statusvd::delete/$1');

$routes->get('/pages/ses/verifikasidok/(:num)', 'Ses\Verifikasidok::edit/$1');
$routes->post('/pages/ses/verifikasidok/update', 'Ses\Verifikasidok::update');




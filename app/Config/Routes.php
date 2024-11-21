<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Pages::index');
$routes->get('/pages', 'Pages::index');
$routes->get('/pages/daftarks', 'Daftarks::index'); 
$routes->post('/pages/daftarks', 'Daftarks::index');
$routes->post('/daftarks/save', 'Daftarks::save');
$routes->get('/pages/daftarksout', 'Daftarksout::index');

// routes ADMIN
$routes->get('/pages/admin/statusvm', 'Admin\Statusvm::index');
$routes->post('/pages/admin/statusvm/', 'Admin\Statusvm::index');
$routes->delete('/admin/statusvm/(:num)', 'Admin\Statusvm::delete/$1');
$routes->get('/pages/admin/verifikasim/(:num)', 'Admin\Verifikasim::edit/$1');
$routes->post('/pages/admin/verifikasim/update', 'Admin\Verifikasim::update');
$routes->get('/pages/admin/statusr', 'Admin\Statusr::index');
$routes->get('/pages/admin/uploadmemo', 'Admin\Uploadmemo::index');

// routes SES
$routes->get('/pages/ses/uploaddok', 'Ses\Uploaddok::index');
$routes->post('/pages/ses/uploaddok', 'Ses\Uploaddok::index');
$routes->post('/uploaddok/save', 'Ses\Uploaddok::save');
$routes->get('/pages/ses/statusvd', 'Ses\Statusvd::index');
$routes->post('/pages/ses/statusvd', 'Ses\Statusvd::index');
$routes->delete('/ses/statusvd/(:num)', 'Ses\Statusvd::delete/$1');
$routes->get('/pages/ses/verifikasidok/(:num)', 'Ses\Verifikasidok::edit/$1');
$routes->post('/pages/ses/verifikasidok/update', 'Ses\Verifikasidok::update');





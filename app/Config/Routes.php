<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Public routes (login, register, forgot)
$routes->get('/', 'Login::index');
$routes->get('/login', 'Login::index');
$routes->get('/register', 'Login::register');
$routes->get('/forgot', 'Login::forgot');
$routes->get('/logout', 'Login::logout');
$routes->post('/login/processLogin', 'Login::processLogin');

// Home routes (non-authenticated)
$routes->get('/home', 'Home::index');
$routes->post('/home', 'Home::index');

// Routes for Pages
$routes->get('/pages/daftarks', 'Daftarks::index'); 
$routes->post('/pages/daftarks', 'Daftarks::index');
$routes->post('/daftarks/save', 'Daftarks::save');
$routes->get('/pages/daftarksout', 'Daftarksout::index');

// Progress routes
$routes->get('/progress/(:num)', 'Progress::index/$1');
$routes->get('/progress/(:segment)', 'Progress::index/$1');

// Route MITRA (User Role)
$routes->group('mitra', ['filter' => 'roleuserfilter'], function($routes) {
    // Mitra Home
    $routes->get('/pages/mitra/home', 'Mitra/Home::index');
    $routes->post('/pages/mitra/home', 'Mitra/Home::index');

    // Mitra Daftarks
    $routes->get('/pages/mitra/daftarks', 'Mitra/Daftarks::index');
    $routes->post('/pages/mitra/daftarks', 'Mitra/Daftarks::index');
    $routes->post('/mitra/daftarks/save', 'Mitra/Daftarks::save');

    // Mitra Daftarksout
    $routes->get('/pages/daftarksout', 'Mitra/Daftarksout::index');
});

// Route SES (Admin Role)
$routes->group('ses', ['filter' => 'roleadminfilter'], function($routes) {
    // SES Uploaddok
    $routes->get('uploaddok', 'Ses\Uploaddok::index');
    $routes->post('uploaddok', 'Ses\Uploaddok::index');
    $routes->post('uploaddok/save', 'Ses\Uploaddok::save');
    
    // SES Statusvd
    $routes->get('statusvd', 'Ses\Statusvd::index');
    $routes->post('statusvd', 'Ses\Statusvd::index');
    $routes->post('statusvd/verify/(:num)', 'Ses\Statusvd::verify/$1');
    $routes->delete('statusvd/(:num)', 'Ses\Statusvd::delete/$1');
    
    // SES Verifikasidok
    $routes->get('verifikasidok/(:num)', 'Ses\Verifikasidok::edit/$1');
    $routes->post('verifikasidok/update', 'Ses\Verifikasidok::update');
    
    // SES Statusr
    $routes->get('statusr', 'Ses\Statusr::index');
    $routes->post('statusr', 'Ses\Statusr::index');
    
    // Admin Statusvm
    $routes->get('statusvm', 'Ses\Statusvm::index');
    $routes->post('statusvm', 'Ses\Statusvm::index');
    
    // Admin Statusr
    $routes->get('/admin/statusr/chart-data', 'Admin/Statusr::getChartData');
    $routes->get('/admin/statusr/getChartData', 'Admin/Statusr::getChartData');
});

// Route ADMIN (Superadmin Role)
$routes->group('admin', ['filter' => 'rolesuperadminfilter'], function($routes) {
    // Admin Statusvm
    $routes->get('home', 'Admin\Home::index');
    $routes->get('statusvm', 'Admin\Statusvm::index');
    $routes->post('statusvm', 'Admin\Statusvm::index');
    $routes->delete('statusvm/(:num)', 'Admin\Statusvm::delete/$1');

    // Admin Verifikasim
    $routes->get('verifikasim/(:num)', 'Admin\Verifikasim::edit/$1');
    $routes->post('verifikasim/update', 'Admin\Verifikasim::update');

    // Admin Statusr
    $routes->get('statusr', 'Admin\Statusr::index');
    $routes->post('statusr', 'Admin\Statusr::index');
    $routes->get('statusr/(:num)', 'Admin\Statusr::edit/$1');
    $routes->delete('statusr/(:num)', 'Admin\Statusr::delete/$1');

    // Admin Uploaddok
    $routes->get('uploaddok', 'Admin\Uploaddok::index');
    $routes->post('uploaddok', 'Admin\Uploaddok::index');
    $routes->post('uploaddok/save', 'Admin\Uploaddok::save');

    // Admin Statusvd
    $routes->get('statusvd', 'Admin\Statusvd::index');
    $routes->post('statusvd', 'Admin\Statusvd::index');
    // $routes->post('statusvd/verify/(:num)', 'Admin\Statusvd::verify/$1');
    $routes->delete('statusvd/(:num)', 'Ses\Statusvd::delete/$1');

    // Admin Uploadmemo
    $routes->get('uploadmemo/(:num)', 'Admin\Uploadmemo::edit/$1');
    $routes->post('uploadmemo/update', 'Admin\Uploadmemo::update');

    // Admin Kegiatan
    $routes->get('kegiatan', 'Admin\Kegiatan::index'); 
    $routes->post('kegiatan/save', 'Admin\Kegiatan::save'); 

    // Admin Kegiatan Edit
    $routes->get('kegiatan_edit', 'Admin\Kegiatan_edit::index'); 
    $routes->post('kegiatan_edit', 'Admin\Kegiatan_edit::index');  
    $routes->delete('admin/kegiatan_edit/(:num)', 'Admin\Kegiatan_edit::delete/$1'); 

    // Chart
    $routes->get('statusr/chart-data', 'Admin/Statusr::getChartData');
    $routes->get('statusr/getChartData', 'Admin/Statusr::getChartData');
});

// Routes for Progress (Accessible by anyone)
$routes->get('/progress/(:num)', 'Progress::index/$1');
$routes->get('/progress/(:segment)', 'Progress::index/$1');

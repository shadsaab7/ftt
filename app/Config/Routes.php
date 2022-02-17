<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

// $routes->add('/view-client/(:num)', 'Admin/CreateClientController::client_view/$1');


$routes->group('/admin', function ($routes) {
    $routes->add('login', 'AuthController::index', ['as' => 'login']);
    $routes->group('', ['filter' => 'adminauth'], function ($routes) {
        $routes->add('admin-dashboard', 'Admin/DashboardController::index', ['as' => 'admin_index']);
        $routes->add('profile-setting', 'AuthController::profile', ['as' => 'admin_setting']);
        $routes->add('contact', 'Admin/ContactController::contact_us', ['as' => 'contact']);
        $routes->add('enquiry-for', 'Admin/ContactController::enquiry_for', ['as' => 'enquiry_for']);
        $routes->add('add-news', 'Admin/NewsAndAnnouncementController::index', ['as' => 'add_news']);
        $routes->add('admin-profile', 'AuthController::admin_profile', ['as' => 'admin_profile']);
        $routes->add('update-profile', 'AuthController::update_profile', ['as' => 'update_profile']);
        $routes->add('news-list', 'Admin/NewsAndAnnouncementController::news_list', ['as' => 'news_list']);
        $routes->add('add-client', 'Admin/CreateClientController::add_client', ['as' => 'add_client']);
        $routes->add('client-details', 'Admin/CreateClientController::client_details', ['as' => 'client_details']);
        $routes->match(['post', 'get'],'client-details/edit/(:num)', 'Admin\CreateClientController::client_edit/$1', ['as' => 'client_edit']);
        $routes->match(['post', 'get'],'client-details/view/(:num)', 'Admin\CreateClientController::client_d/$1', ['as' => 'client_d']);

        // $routes->match(['post', 'get'],'view-client/details/(:num)', 'Admin/CreateClientController::client_view/$1', ['as' => 'client_view']);

        // $routes->add("clientview/10", 'Admin/CreateClientController::client_view');
        $routes->match(['post', 'get'], 'user-details', 'User/UserController::user_details', ['as' => 'user_details']);
        $routes->add('logout', 'AuthController::logout', ['as' => 'logout']);
    });
});

$routes->group('/vender', ['filter' => 'vendorauth'], function ($routes) {
    $routes->add('', 'Vendor/VendorController::index', ['as' => 'vendor_index']);
    $routes->add('vendor-setting', 'Vendor/VendorController::vendor_setting', ['as' => 'vendor_setting']);
});

$routes->get('/', 'Home::index', ['as' => 'home']);
$routes->get('/uae-visa', 'Home::uae_visa', ['as' => 'uae_visa']);
$routes->get('/hotels', 'Home::hotels', ['as' => 'hotels']);
$routes->get('/flights', 'Home::flights', ['as' => 'flights']);
$routes->get('/tour-packeges', 'Home::tour_packeges', ['as' => 'tour_packeges']);
$routes->get('/online-payment', 'Home::online_payment', ['as' => 'online_payment']);
$routes->get('/about-us', 'Home::about_us', ['as' => 'about_us']);
$routes->get('/contact-us', 'Home::contact_us', ['as' => 'contact_us']);
$routes->get('/privacy-policy', 'Home::privacy_policy', ['as' => 'privacy_policy']);
$routes->get('/terms-conditions', 'Home::terms_conditions', ['as' => 'terms_conditions']);
$routes->get('/disclaimer-policy', 'Home::disclaimer_policy', ['as' => 'disclaimer_policy']);
$routes->get('/print-e-ticket', 'Home::print_e_ticket', ['as' => 'print_e_ticket']);
$routes->get('/tour-packages-overview', 'Home::tour_packages_overview', ['as' => 'tour_packages_overview']);

// enquiry and Contact Us routes
$routes->add('/enquiry', 'Admin/ContactController::enquiry', ['as' => 'enquiry']);


// --------------------------------------------------------------------
// Start Client Route  ['filter' => 'clientauth'],
//--------------------------------------------------------------------

$routes->group('/client', function ($routes) {
    $routes->add('client-login', 'Client/ClientAuthController::index', ['as' => 'client_login']);
    $routes->group('', ['filter' => 'clientauth'], function ($routes) {
        $routes->add('logout', 'Client/ClientAuthController::logout', ['as' => 'client_logout']);
        $routes->add('client-dashboard', 'Client/ClientDashboardController::index', ['as' => 'client_index']);
    });
});


// --------------------------------------------------------------------
// End User Route
// --------------------------------------------------------------------


// --------------------------------------------------------------------
// Start Client Route  ['filter' => 'clientauth'],
//--------------------------------------------------------------------

$routes->group('/user', function ($routes) {
    $routes->match(['post', 'get'], 'user-login', 'User/UserController::index', ['as' => 'user_login']);
    $routes->group('', function ($routes) {
        // $routes->match(['post', 'get'], 'login-user', 'User/UserController::login_user', ['as' => 'login_user']);
        $routes->match(['post', 'get'], 'forget-password', 'User/UserController::forget_password', ['as' => 'forget_password']);
        $routes->match(['post', 'get'], 'accept-password', 'User/UserController::accept_password', ['as' => 'accept_password']);
        $routes->match(['post', 'get'], 'user-profile', 'User/UserController::user_profile', ['as' => 'user_profile']);
        $routes->match(['post', 'get'], 'user-index', 'User/UserController::user_index', ['as' => 'user_index']);
        $routes->match(['post', 'get'], 'user-dashboard', 'User/UserController::user_dashboard', ['as' => 'user_dashboard']);
        $routes->add('user-logout', 'User/UserController::user_logout', ['as' => 'user_logout']);
    });
});


// --------------------------------------------------------------------
// End User Route
// --------------------------------------------------------------------





/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}

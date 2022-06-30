<?php

namespace Config;

// Create a new instance of our RouteCollection class.
use App\Controllers\AccountsController;

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
$routes->setDefaultController('HomeController');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'HomeController::index');

// 내가 작성한 게시글과 간단한 프로필 정보
$routes->get('/(:segment)', 'HomeController::myInstaGramPage/$1');

// 컬렉션 페이지
$routes->get('/(:segment)/saved', 'HomeController::getCollection/$1');

// 설정 페이지
$routes->get('/accounts/edit', 'AccountsController::edit');

// 로그인
$routes->post('/accounts', 'AccountsController::index');
$routes->post('/accounts/login', 'AccountsController::login');

// 로그아웃
$routes->get('/accounts/logout', 'AccountsController::logout');

// 회원가입
$routes->get('/accounts/emailsignup', 'AccountsController::getEmailSignUp');
$routes->post('/accounts/emailsignup', 'AccountsController::emailsignup');

// 패스워드
$routes->get('/accounts/password/(:segment)', 'AccountsController::password');
$routes->post('/accounts/password/email', 'AccountsController::sendEmail');
$routes->post('/accounts/password/auth', 'AccountsController::authCode');
$routes->post('/accounts/password/reset', 'AccountsController::resetPassword');

// 피드 게시글 전송
$routes->post('/content', 'FeedController::content');

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

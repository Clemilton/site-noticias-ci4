<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */


$routes->setAutoRoute(true);

$routes->get('/', 'Home::index', ['as' => 'home']);
$routes->get('/login', 'Login::index', ['as' => 'login']);
$routes->post('/login', 'Login::store', ['as' => 'login.store']);
$routes->get('/login/destroy', 'Login::destroy', ['as' => 'login.destroy']);
$routes->get('search', 'Search::index', ['as' => 'search']);
$routes->get('/banner/home', 'BannerHome::index');
$routes->get('trendings', 'Trending::index');
$routes->get('/recent', 'Recent::index');
$routes->get('/category/partials/(:alpha)', 'CategoryHomePartials::index/$1');
$routes->get('/category/(:any)', 'Category::index/$1');
$routes->get('/category/sidebar/partials/(:alpha)', 'CategorySidebarPartials::index/$1');

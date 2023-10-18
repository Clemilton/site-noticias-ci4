<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('search', 'Search::index', ['as' => 'search']);
$routes->get('/banner/home', 'BannerHome::index');
$routes->get('trendings', 'Trending::index');
$routes->get('/recent', 'Recent::index');
$routes->get('/category/partials/(:alpha)', 'CategoryPartials::index/$1');
$routes->get('/category/(:any)', 'Category::index/$1');

<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');
$routes->get('/', 'Home::dashboard');
$routes->get('nama/(:num)/(:any)', 'Home::saya/$1/$2');

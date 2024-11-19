<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->post('/submit', 'Home::submit');
$routes->get('/sukses', 'Home::sukses');
$routes->get('/list', 'Home::userList');

<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('ver_clientes', 'Clientes::index');
$routes->get('ver_lineas', 'Lineas_telefonicas::index');
$routes->get('ver_planes', 'Planes::index');
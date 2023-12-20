<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');



$routes->get("form", "BlogController::index");
$routes->post("submit-data", "BlogController::submitData");

$routes->get('viewEntry/(:num)', 'BlogController::viewEntry/$1');
$routes->get('viewEntries', 'BlogController::viewEntries');
$routes->get('editEntry/(:num)', 'BlogController::editEntry/$1');


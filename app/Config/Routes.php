<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');



$routes->get("form", "BlogController::index");
$routes->post("submit-data", "BlogController::submitData");

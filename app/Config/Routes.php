<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Este signo / hace referencia al controlador Home y al método index
$routes->get('/', 'MatriculaController::index');

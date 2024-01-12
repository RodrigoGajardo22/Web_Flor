<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('servicios', 'Home::servicios');
$routes->get('proyectos', 'Home::proyectos');
$routes->get('contacto', 'Home::contacto');

$routes->post('enviar-email', 'CorreoController::sendEmail');

$routes->post('enviarCorreo', 'mailjetController::enviarCorreo');


<?php


/**
 * 
 * Require files
 * 
 */
require_once __DIR__ . '/config/__init.php';
require_once __DIR__ . '/router/index.php';


/**
 * new Instance of router
 */
$router = new Router();


/**
 * handle / route
 */
$router->get('/', 'index.html');


/**
 * handle /home route
 */
$router->get('/Movie/movie', 'movie.php');

$router->get('/Person/person','person.php');
/**
 * handle /about route
 */
$router->get('/Role/role', 'role.php');


/**
 * handle /contact route
 */
$router->get('/contact', 'contact.html');
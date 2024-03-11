<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index'); 

$routes->get('/meetings', 'Home::meeting');

//Closure routes
$routes->get("/Closure", function(){
    //use controller here only
    echo "this is Closure routes";
});

//match(['get', 'post', 'put'])
//$routes->match(["get","post"], "/formSubmit", "FormController::submit");

//add() it pick any methods
//$routes->add("formSubmit", "FormController::submit");

//Routes namespace
//$routes->add("admin", "adminController::list",["namespace" =>
//"app\controller\admin"]);

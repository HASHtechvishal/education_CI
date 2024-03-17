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
//$routes->add("admin", "adminController::list",["namespace" => "app\controller\admin"]);

//group namespace
//$routes->group("admin",["namespace" => "app\controller\admin"], function ($routes){
    //all $routes
//});

//name route name full route as a name
//$routes->get('/meetings', 'Home::meeting', [
  //  'as' => 'meeting'
//]);  how to call <?php echo base_url(route_to('meeting')) 

//Parameters in Route 
//$routes->get('/meetings/(:num)', 'Home::meeting/$value'); -- numeric values
//$routes->get('/meetings/(:alpha)', 'Home::meeting'); -- alphabets
//$routes->get('/meetings/(:alphanum)', 'Home::meeting'); -- alphabets + numeric
//$routes->get('/meetings/(:any)', 'Home::meeting'); -- all type of data

//query string 
// $all_var = $this->request->getVar(); //get all variables from url


//over write 404 page 
//$routes->se404override(function(){
   // echo '404 Page Not Found';
   // return view('404');
//});


//What is an Entity Class |  data insert | single entity change

//Entity Data Map Feature | map orignal raw name to other

//Entity Mutators Feature | to change data which user enter | fake@fake.com to fake@gmail.com
// class name should start with setEmail() | it must be protected | Entity Feature not use with array and object

//Entity Accessors Feature | change any entity from data | after data enter in data | use getEmail()

//Entity Virtual Property Feature | create virtual class eg- if you wanted to show
//name and email in single property

//form helper
// vendor/codeigniter4/framework/system/Helpers/form_helper.php
//go to app/Controllers/BaseController.php add form in $helper function

//Concept of Cookie Helper
//go to app/Controllers/BaseController.php add form in $helper function
//set_cookie("name","info",timei in sec)

//Inflector Helper | it change type of string

//Number Helper | it chNGE NUMBERS

//FileSystem Helper | play with fils like find file path etc | hidden file | add new file | delete file

//Text Helper | random string
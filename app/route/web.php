<?php

// map homepage
$router->map('GET', '', function() {
	require __DIR__ . '/views/home.php';
	echo "home";
},'home');

$router->map('GET', 'cars/all/',array("Controller"=>"App\Controllers\Cars","Action"=>"getAll"),"get.car.all");

$router->map('GET', 'cars/[i:id]/',array("Controller"=>"App\Controllers\Cars","Action"=>"getCar","Id"=>"5"),"get.car");



// dynamic named route
/* $router->map('GET|POST', 'cars/[i:id]/', function($id) {
  //$cars->getCar($id);
   require __DIR__ . '/views/user/details.php';
}, 'cars-details');  */

//echo $router->generate('user-details', ['id' => 5]); // Output: "/users/5"


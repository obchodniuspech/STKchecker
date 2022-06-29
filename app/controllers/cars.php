<?php
namespace App\Controllers;

use App\Models\Cars;

class CarsController extends BasicController {
	
	
	function getCar($id) {
		$cars = new Cars;
		$cars = $cars->getCar($id);
		foreach ($cars AS $car) {
			echo "show car ".$car['name'] ." details";
		}
		
		/* echo $blade->make('homepage', ['name' => 'John Doe'])->render(); */
	}
	
	function getAll() {
		$cars = new Cars;
		$cars = $cars->getAll();
		foreach ($cars AS $car) {
			echo "show car ".$car['name'] .$car['rz'] ." details<br>";
		}
	}
}
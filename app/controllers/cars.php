<?php
namespace App\Controllers;

use App\Models\Cars;


class CarsController extends BasicController {
	
	
	function create() {
		global $router;
		echo $this->blade->render('cars.new', ['router'=>$router]);
	}
	
	function save() {
		$cars = new Cars;
		$cars->save($_POST);
	}
	
	function getCar($id) {
		$cars = new Cars;
		$cars = $cars->getCar($id);
		foreach ($cars AS $car) {
			echo "show car ".$car['name'] ." details";
		}
		
		/* echo $blade->make('homepage', ['name' => 'John Doe'])->render(); */
	}
	
	function getAll() {
		global $router;
		
		$cars = new Cars;
		$cars = $cars->getAll();
		echo $this->blade->render('carsAll', ['cars' => $cars,'router'=>$router]);
	}
}
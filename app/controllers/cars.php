<?php
namespace App\Controllers;

use App\Models\Cars;


class CarsController extends BasicController {
	
	
	function create() {
		global $router;
		$this->forms = new \Formr\Formr('bootstrap');
		echo $this->blade->render('cars.new', ['router'=>$router,'form'=>$this->forms]);
	}
	
	function edit() {
		global $router;
		$this->forms = new \Formr\Formr('bootstrap');
		$this->forms->action = $router->generate('save.car');
		echo $this->blade->render('cars.new', ['router'=>$router,'form'=>$this->forms]);
	}
	
	function save() {
		global $router;
		$cars = new Cars;
		unset($_POST['FormrID']);
		unset($_POST['submit']);

		$cars->save($_POST);
		Header("Location: ".$router->generate('get.car.all'));
	}
	
	function getCar($id) {
		global $router;
		$cars = new Cars;
		$car = $cars->getCar($id);		
		echo $this->blade->render('cars.edit', ['router'=>$router,'form'=>$this->forms,"car"=>$car]);
	}
	
	function getAll() {
		global $router;
		
		$cars = new Cars;
		$cars = $cars->getAll();
		echo $this->blade->render('carsAll', ['cars' => $cars,'router'=>$router]);
	}
}
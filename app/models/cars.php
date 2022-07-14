<?php

namespace App\Models;


class Cars extends BaseModel {
		
		
	function save($data) {
		if (isset($data['id'])) {
			$this->db->update('cars', $data, $data['id'])->execute();
		}
		else {
			$this->db->insertInto('cars')->values($data)->execute();
		}
	}
	function getCar($id=NULL) {
		$car = $this->db->from('cars')
		   ->where('id', $id)
		   ->fetch();
		   return $car;
	}
	
	function getAll() {
		$query = $this->db->from('cars');
		   return $query;
	}
	



}
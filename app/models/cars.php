<?php

namespace App\Models;


class Cars extends BaseModel {

		
	function getCar($id=NULL) {
		$query = $this->db->from('cars')
		   ->where('id', $id)
		   ->limit($id);
		   return $query;
	}
	
	function getAll() {
		$query = $this->db->from('cars');
		   return $query;
	}


}
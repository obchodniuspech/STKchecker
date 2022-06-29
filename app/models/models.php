<?php

namespace App\Models;

use App\Controllers\DB;

abstract class BaseModel {

	protected $db;

	function __construct(){
		$this->db = DB::connect()->fluent;
	}
}

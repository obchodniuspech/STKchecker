<?php
namespace App\Controllers;

class BasicController {
	
	private static $blade = null;
	private static $fluent = null;


	function __construct() {
		global $blade;
		// = $blade;
/* 			echo "ahoj"; */
			$pdo = new \PDO('mysql:dbname=stkCheck', 'stkCheck', 'stkCheck100%');
			$fluent = new \Envms\FluentPDO\Query($pdo);	
			/* print_r($fluent); */

	}
}
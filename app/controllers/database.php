<?php
namespace App\Controllers;

use App\Config;

class DB 
{
	
	private $user = null, $password = null, $host = null, $port = null;
	public $database;
	public $errors;
	
	private static $dbCon;

	private function __construct() {
/* 		$this->user = Config::get("mysql/user");
		$this->password = Config::get("mysql/password");
		$this->host = Config::get("mysql/host");
		$this->database = Config::get("mysql/database");
		$this->port = Config::get("mysql/port"); */
		
		
		
/* 		array ( \PDO:ATTR_ERRMODE => \PDO:ERRMODE_EXCEPTION); */
		try {
			$this->pdo = new \PDO('mysql:dbname=stkCheck', 'stkCheck', 'stkCheck100%');
			$this->fluent = new \Envms\FluentPDO\Query($this->pdo);	
		}
		catch (\PDOException $ex) {
			$this->errors = $ex;
		}

	}
	
	public static function connect() {
		if(!isset(self::$dbCon)) {
			self::$dbCon = new self();
		}
		return self::$dbCon;
	}
	
/* 	private function __clone() {} // prevent cloning
	
	private function __wakeup() {} // prevent unserialization */
		
}



<?php

namespace App\Config;

class Config {
	public static function get($path = null) {
		if(isset($path)) {
			$paths = explode("/",$path);
			$config = $GLOBALS['config'];
			foreach ($paths AS $conf) {
				$config = $config[$conf];
			}
			return $config;
		}
		else {
			return new \Exception('Configuration not found');
		}
	}
}

$GLOBALS['config'] = array(
	"mysql"=>array(
		"host"=>"localhost",
		"port"=>"8889",
		"name"=>"stkCheck",
		"password"=>"stkCheck100%",
		"database"=>"stkCheck",
	)	
);
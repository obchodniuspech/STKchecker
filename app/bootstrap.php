<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


include __DIR__."/config/config.php";
include __DIR__."/controllers/database.php";
include __DIR__."/controllers/controllers.php";
include __DIR__."/controllers/cars.php";
include __DIR__."/models/models.php";
include __DIR__."/models/cars.php";



$router = new AltoRouter();
$router->setBasePath('/STKChecker/');



include "route/web.php";


$match = $router->match();


if($match){
	if (is_callable($match['target'])) {
		// Target je funkce, stačí zavolat
		call_user_func_array($match['target'], $match['params']);
	}else if (is_string($match['target']) && file_exists($match['target'].".php")) {
		// Je název souboru, vložíme
		include $match['target'].".php";
	}else if (is_array($match['target']) && isset($match['target']['Controller']) && isset($match['target']['Action']) ) {
		// Načtení třídy ponechám na vás, jestli používáte autoloader nebo si provedete include souboru
		$className = $match['target']['Controller']."Controller";
/* 		echo $className; */
		$cls = new $className();
		call_user_func_array(array($cls, $match['target']['Action']), $match['params']);
	}else{
		echo "Akci nelze provést";
	}
} else {
	echo "Žádná shoda";
}


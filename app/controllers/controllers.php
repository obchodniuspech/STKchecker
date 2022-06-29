<?php
namespace App\Controllers;


use Illuminate\View\Factory;
use Illuminate\View\View;
use Illuminate\View\Compilers\BladeCompiler;
use Illuminate\View\ViewFinderInterface;
use Jenssegers\Blade\Blade;
use PHPUnit\Framework\TestCase;


class BasicController {
	

	function __construct() {
			
			try {
				$this->blade = new Blade('view', 'cache');

			}
			catch (\Exception $ex) {
				$this->errors = $ex;
			}

	}
	
	public static function createView() {
		if(!isset(self::$blade)) {
			self::$blade = new self();
		}
		return self::$blade;
	}
}
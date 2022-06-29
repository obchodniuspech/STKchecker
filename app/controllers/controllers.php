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
				$this->forms = new \Formr\Formr('bootstrap');

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
	
	public static function createForm() {
		if(!isset(self::$forms)) {
			self::$forms = new self();
		}
		return self::$forms;
	}
}
<?php
namespace App\Controller;

defined('BASE_PATH') OR exit('No direct script access allowed');

use MyMvc\Core\App\ControllerCore as Controller;

class TestController extends Controller {

	public function __construct() {
		parent::__construct();
	}

	public function test() {
	}

	public function index() {
		//echo 'asds';
		//render(['test', 'test2'], ['val' => 2, 'val2' => 'ak']);
		render(['test2'], ['val' => 2, 'val2' => 'ak']);
	}
}

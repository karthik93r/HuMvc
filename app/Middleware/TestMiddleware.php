<?php
namespace App\Middleware;

defined('BASE_PATH') OR exit('No direct script access allowed');

use MyMvc\Core\App\MiddlewareCore as Middleware;

class TestMiddleware extends Middleware {

	public function __construct() {
		parent::__construct();
	}

	public function start() {
		//echo "Middleware start";
	}

	public function end() {
		//echo "Middleware end";
	}
}

<?php
namespace App;

defined('BASE_PATH') OR exit('No direct script access allowed');

class Routes {
	public $default_controller = "App\Controller\TestController";
	public $match_types = [
		'p' => '[a-zA-Z0-9]*[/]{0,1}?'
	];
	public $routes = [
		[ 'GET', '/', [ 'controller' => 'TestController', 'middleware' => 'TestMiddleware' ], 'Home' ],
		[ 'GET', '/[p:controller]', null ],
		[ 'GET', '/[a:controller]/[p:action]', null ],
		[ 'GET', '/[a:test]/[p:act]/[p:as]', [ 'controller' => 'TestController', 'middleware' => 'TestMiddleware' ], 'test' ],
		//[ 'GET|POST', '/[a:]', [ 'controller' => 'controller', 'action' => 'action', 'middleware' => 'middleware' ]]
	];
}

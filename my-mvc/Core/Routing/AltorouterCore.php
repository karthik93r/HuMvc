<?php

namespace MyMvc\Core\Routing;

defined('BASE_PATH') OR exit('No direct script access allowed');

class AltorouterCore {
	public $router = null;
	public $match  = null;

  public function __construct() {
    $this->router 	= new \AltoRouter();
		$route_instance = createInstance('App\Routes');
		$match_types 		= $route_instance->match_types;
		$routes 				= $route_instance->routes;

		if ($this->basePath()) 			 { $this->router->setBasePath($this->basePath()); }
		if (count($match_types) > 0) { $this->addMatchTypes($match_types);	}
		if ($routes != null) 				 { $this->addRoutes($routes); }

		$this->match = $this->router->match();
  }

	final private function basePath() {
		return ltrim(str_replace('index.php', '', $_SERVER['SCRIPT_NAME']), '/');
	}

	final private function addRoutes($routes) {
		$this->router->addRoutes($routes);
	}

	final private function addMatchTypes($match_types) {
		$this->router->addMatchTypes($match_types);
	}
}

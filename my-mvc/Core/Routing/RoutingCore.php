<?php

namespace MyMvc\Core\Routing;

defined('BASE_PATH') OR exit('No direct script access allowed');

class RoutingCore extends AltorouterCore {
  public $middleware = null;
  public $controller = null;
  public $page_name  = null;
  public $action     = null;
  public $params     = null;

  public function __construct() {
    parent::__construct();
    $this->mapController()->callApp();
  }

  private function callApp() {
    try {
      $this->setParams();
      {
        $this
          ->callMiddleware('start')
          ->callController()
          ->callMiddleware('end');
      }
    } catch(\Exception $e) {
      dump($e);
    }
  }

  private function arrayToLower($val) {
    return str_replace('/', '', $val);
  }

  private function setParams() {
    //$target = is_array($this->match['target']) ? $this->match['target'] : array();
    //$name   = is_array($this->match['name']) ? $this->match['name'] : array();
    $this->params['action'] = $this->action;
    $params       = is_array($this->match['params']) ? $this->match['params'] : array();
    $page_name    = isset($this->match['name']) ? $this->match['name'] : null;
    $this->params = array_merge($this->params, array_map(array($this,'arrayToLower'), $params));

    $_ENV['page']['name'] = $page_name;
    return $this;
  }

  private function callMiddleware($method) {
    if ($this->middleware !== null) {
      $middleware = 'App\Middleware\\'.$this->middleware;

      if(class_exists($middleware)) {
        $middleware_object   = createInstance($middleware, $this->params);
        $middleware_callable = array($middleware_object, $method);

        if(is_callable($middleware_callable)) {
          $return = call_user_func_array($middleware_callable, $this->params);
          if($return !== null) {
            $this->params['middleware'] = $return;
          }
        } else {
          //trigger_error("MiddleWare: Create '{$method}' function in '{$middleware}'.", E_USER_ERROR);
          //throw new \Exception("MiddleWare: Create 'boot' function in '{$middleware}'.");
        }
      } else {
        trigger_error("MiddleWare: '{$middleware}' does not Exist.", E_USER_ERROR);
        throw new \Exception("MiddleWare: '{$middleware}' does not Exist.");
      }
    }
    return $this;
  }

  private function callController() {
    if ($this->controller !== null) {
      $controller = 'App\Controller\\'.$this->controller;
      $action     = $this->action;

      if(class_exists($controller)) {
        $controller_object   = createInstance($controller, $this->params);
        $controller_callable = array($controller_object, $action);

        if(is_callable($controller_callable)) {
          ob_start();
          call_user_func_array([$controller_object, '_remap'], $this->params);
          $output = ob_get_clean();
          call_user_func_array([$controller_object, '_output'], array($output));
        } else {
          trigger_error("Controller: Create '{$action}' function in '{$controller}'.", E_USER_ERROR);
          throw new \Exception("Controller: Create '{$action}' function in '{$controller}'.");
        }
      } else {
        trigger_error("<b>Controller: '{$controller}' does not Exist.", E_USER_ERROR);
        throw new \Exception("Controller: '{$controller}' does not Exist.");
      }
    }
    return $this;
  }

  private function mapController() {
    if ($this->match !== false) {
      $target = $this->match['target'];
      $params = $this->match['params'];
      $name   = $this->match['name'];

      $this->middleware = (
        isset($target['middleware']) ?
        str_replace('/', '', $target['middleware']) : (
          isset($params['middleware']) ?
          str_replace('/', '', ucfirst($params['middleware'].'Middleware')) :
          null
        )
      );
      $this->controller = (
        isset($target['controller']) ?
        str_replace('/', '', $target['controller']) : (
          isset($params['controller']) ?
          str_replace('/', '', ucfirst($params['controller'])).'Controller' :
          null
        )
      );
      $this->action = (
        isset($target['action']) ?
        str_replace('/', '', $target['action']) : (
          isset($params['action']) ?
          str_replace('/', '', $params['action']) :
          'index'
        )
      );
    } else {
      errorPage();
    }
    return $this;
  }
}

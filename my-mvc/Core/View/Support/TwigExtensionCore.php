<?php

namespace MyMvc\Core\View;

defined('BASE_PATH') OR exit('No direct script access allowed');

class TwigExtensionCore extends \Twig_Extension {
  public function getName() {
      return 'Hu';
  }

  // Globals
  public function getGlobals() {
    return array( 'global' => new Support\TwigGlobalCore() );
  }

  // Functions
  public function getFunctions() {
    $object = createInstance('\MyMvc\Core\View\Support\TwigFunctionsCore');
    $method = 'test';
    return array(
      new \Twig_SimpleFunction('test', [$object, $method])
    );
  }

  // Filterspublic function getFilters()
  public function getFilters() {
    $object = createInstance('\MyMvc\Core\View\Support\TwigFiltersCore');
    $method = 'test';
    return array( new \Twig_SimpleFilter('rot13', 'str_rot13') );
  }

  // Operators
  public function getOperators() {
  }

  // Tests
  public function getTests() {
  }


}

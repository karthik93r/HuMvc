<?php

define('BASE_PATH'      , dirname(dirname(__DIR__)).'/');
define('APP_PATH'       , BASE_PATH.'app/');
define('HU_PATH'        , BASE_PATH.'my-mvc/');
define('RESOURCES_PATH' , BASE_PATH.'resources/');

require_once __DIR__.'/Debug.php';
require_once __DIR__.'/Page.php';
require_once __DIR__.'/Database.php';
require_once __DIR__.'/Request.php';

$_ENV['constant'] = [
  'site_name' => 'site name',
  'site_key'  => 'site key'
];

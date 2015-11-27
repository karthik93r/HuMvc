<?php

defined('BASE_PATH') OR exit('No direct script access allowed');

use MyMvc\Core\Debug as Debug;

/*
 * Displays Error.
 */
function errors() {
  return Debug\ErrorDebug::$error_report;
}

function isDebuger() {
  $debug = false;
  foreach($_ENV['debug']['user'] as $key => $val) {
    if( $val['enable'] === true &&
        ( $_SERVER['REMOTE_ADDR'] === $val['ip'] ||
          $_SERVER['SERVER_ADDR'] === $val['ip'] ||
          $val['ip'] === 'all'
        ) &&
        ( $val['pages'] === $_ENV['page']['name'] ||
          $val['pages'] === 'all'
        )
    ) {
      $debug = true;
      break;
    }
  }
  return $debug;
}

<?php
namespace MyMvc\Core\Debug;

defined('BASE_PATH') OR exit('No direct script access allowed');

class ErrorDebug  {
  public static  $error_report = NULL;

  // Custom Error Report
  public static function userErrorHandler($errno, $errmsg, $filename, $linenum, $vars) {
    $dt = date("Y-m-d H:i:s (T)");
    $errortype = array (
        E_ERROR              => 'Error',
        E_WARNING            => 'Warning',
        E_PARSE              => 'Parsing Error',
        E_NOTICE             => 'Notice',
        E_CORE_ERROR         => 'Core Error',
        E_CORE_WARNING       => 'Core Warning',
        E_COMPILE_ERROR      => 'Compile Error',
        E_COMPILE_WARNING    => 'Compile Warning',
        E_USER_ERROR         => 'User Error',
        E_USER_WARNING       => 'User Warning',
        E_USER_NOTICE        => 'User Notice',
        E_STRICT             => 'Runtime Notice',
        E_RECOVERABLE_ERROR  => 'Catchable Fatal Error'
    );
    static::$error_report[$errortype[$errno]][] = [
        'Line'    => $linenum,
        'Message' => $errmsg,
        'File'    => $filename,
        'Time'    => $dt,
        //'Backtrack'=> debug_backtrace()
    ];
  }
}

$old_error_handler = set_error_handler('MyMvc\Core\Debug\ErrorDebug::userErrorHandler');

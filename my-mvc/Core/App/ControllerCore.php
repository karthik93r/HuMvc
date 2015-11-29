<?php

namespace MyMvc\Core\App;

defined('BASE_PATH') OR exit('No direct script access allowed');

class ControllerCore {

    public function __construct() {
    }

    /*
    * Remap View Method
    */
    public function _remap() {
        $params    = func_get_args();
        $action    = array_shift($params);

        call_user_func_array([$this, $action], $params);
    }

    public function index() {
        //echo $y = openssl_random_pseudo_bytes(26);
        //echo $en = openssl_encrypt('test', "RC4-HMAC-MD5", $y);
        //echo openssl_decrypt($en, "RC4-HMAC-MD5", $y);
        //dump( openssl_get_cipher_methods () );
        render(['test', 'test2'], ['val' => 2, 'val2' => 'ak']);
        //renderPhp(['test', 'test2'], ['val' => 2, 'val2' => 'ak']);
    }

    /*
    * Outputs View Method
    */
    public function _output($output) {
        echo $output;
    }
}

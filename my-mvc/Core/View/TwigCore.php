<?php

namespace MyMvc\Core\View;

defined('BASE_PATH') OR exit('No direct script access allowed');

class TwigCore {
    public $loader    = null;
    public $twig      = null;
    public $view_path = BASE_PATH.'resources/View/';

    public function __construct() {
        \Twig_Autoloader::register();
        $this->loader = new \Twig_Loader_Filesystem([ $this->view_path ]);
        $this->twig   = new \Twig_Environment($this->loader, array(
            'debug '           => true,
            'cache'            => false, //BASE_PATH.'resources/Cache',
            'optimizations'    => 1,
            'strict_variables' => true,
            //'auto_reload' =>,
            //'autoescape' =>
            //'charset' =>,
            //'base_template_class' =>,
        ));
        //$this->twig->addExtension(new TwigExtensionCore());
    }

    /*
    * Renders Only Twig template file.
    */
    public function render($page = [], $array = []) {
    ob_start();
        if(is_array($page)) {
            foreach ($page as $key => $value) {
                echo $this->twig->render($value.'.php', $array);
            }
        } else {
            echo $this->twig->render($page.'.php', $array);
        }
    return ob_get_clean();
    }

    /*
    * Renders Only PHP file.
    */
    public function renderPhp($page = [], $array = []) {
        ob_start();
            if(is_array($page)) {
                foreach ($page as $key => $value) {
                    if (file_exists($this->view_path.$value.'.php')) {
                        include_once $this->view_path.$value.'.php';
                    } else {
                        trigger_error("View: Create '{$value}.php' view file.", E_USER_ERROR);
                    }
                }
            } else {
                if (file_exists($this->view_path.$page.'.php')) {
                    include_once $this->view_path.$page.'.php';
                } else {
                    trigger_error("View: Create '{$page}.php' view file.", E_USER_ERROR);
                }
            }
        return ob_get_clean();
    }
}

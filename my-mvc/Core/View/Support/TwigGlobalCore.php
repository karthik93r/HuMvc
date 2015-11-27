<?php

namespace MyMvc\Core\View\Support;

defined('BASE_PATH') OR exit('No direct script access allowed');

class TwigGlobalCore {
  public function t($id) {
    return $id*34;
  }
}

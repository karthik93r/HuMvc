<?php

namespace MyMvc\Core\View\Support;

defined('BASE_PATH') OR exit('No direct script access allowed');

class TwigFunctionsCore {
  public function test() {
    dump(func_get_args());
  }
}

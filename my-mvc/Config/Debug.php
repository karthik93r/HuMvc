<?php

defined('BASE_PATH') OR exit('No direct script access allowed');

$_ENV['debug'] = [
  'enable' => true,
  'user'   => [
    [
      'enable' => true,
      'ip'     => 'all',
      'pages'  => 'all'
    ]
  ]
];

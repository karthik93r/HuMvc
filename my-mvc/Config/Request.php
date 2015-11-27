<?php

defined('BASE_PATH') OR exit('No direct script access allowed');

$_ENV['session'] = [
  'enable'    => true,
  'front_end' => [
    'name'   => 'USER_SESSION',
    'key'    => 'session front end key'
  ],
  'back_end' => [
    'name'   => 'ADMIN_SESSION',
    'key'    => 'session back end key'
  ]
];

$_ENV['request'] = [
  'post'   => true,
  'get'    => true,
  'put'    => true,
  'delete' => true
];

$_ENV['security_key'] = [
  'enable' => 'false',
  'post'   => 'post security key here',
  'get'    => 'get security key here',
  'put'    => 'put security key here',
  'delete' => 'delete security key here'
];

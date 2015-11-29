<?php

defined('BASE_PATH') OR exit('No direct script access allowed');

$_ENV['page'] = [
    'base_url'   => $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['HTTP_HOST'].str_replace('index.php', '', $_SERVER['SCRIPT_NAME']),

    'assets_url' => $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['HTTP_HOST'].str_replace('index.php', '', $_SERVER['SCRIPT_NAME']).'resources/',

    'page_url'   => $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']
];

/*

$_ENV['maintainance_page'] = [
    'enable' => false,
    'user'   => [
        [
            'enable' => false,
            'ip'     => 'all',
            'page'   => 'all'
        ]
    ]
];

$_ENV['blocked_user'] = [
    'enable' => false,
    'user'   => [
        [
            'enable' => false,
            'ip'     => '',
            'page'   => ''
        ]
    ]
];
*/

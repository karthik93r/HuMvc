<?php

defined('BASE_PATH') OR exit('No direct script access allowed');

/*
 * Creates 404 Error Page.
 */
function errorPage($page = null) {
    header('HTTP/1.0 404 Not Found');
    echo $page != null ? $page : '404 Error.....';
}

/*
 * Creates Maintanance Page.
 */
function maintanancePage($page = null) {
    errorPage($page != null ? $page : 'Page Under Maintanance.');
}

/*
 * Creates Maintanance Page.
 */
function blockedPage($page = null) {
    errorPage($page != null ? $page : 'You have no Access to view this Page.');
}

/*
 * Checkes Ajax Page or not.
 */
function isAjaxPage() {
    if(!  empty($_SERVER['HTTP_X_REQUESTED_WITH'])
        && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'
    ) {
        return true;
    }
    return false;
}

/*
 * Initiates Twig classes.
 */
function callTwig() {
    return createInstance('MyMvc\Core\View\TwigCore');
}
function render($page = [], $array = []) {
    echo getInstance('MyMvc\Core\View\TwigCore')->render($page, $array);
}
function renderPhp($page = [], $array = []) {
    echo getInstance('MyMvc\Core\View\TwigCore')->renderPhp($page, $array);
}

/*
 * Initiates AltoRouter classes.
 */
function callAltoRouter() {
    return createInstance('MyMvc\Core\Routing\RoutingCore');
}

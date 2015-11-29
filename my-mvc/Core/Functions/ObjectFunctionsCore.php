<?php

defined('BASE_PATH') OR exit('No direct script access allowed');

use MyMvc\Core as Core;

/*
 * Creates Instance for Class.
 */
function createInstance($class_name = null, $params = null) {
    return Core\SingletonCore::createInstance($class_name, $params);
}

/*
 * Retirns Class Instance.
 */
function getInstance($class_name = null) {
    return Core\SingletonCore::getInstance($class_name);
}

/*
 * Retirns All Class Instance.
 */
function getAllInstance() {
    return Core\SingletonCore::getAllInstance();
}

/*
 * Retirns All Class Instance Backtrack.
 */
function getAllBacktrace() {
    return Core\SingletonCore::getAllBacktrace();
}

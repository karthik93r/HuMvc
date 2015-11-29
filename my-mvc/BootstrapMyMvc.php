<?php
$app_run_time      = microtime();
$app_memory_size   = memory_get_usage();
$declared_classes  = get_declared_classes();
$defined_functions = get_defined_functions()['user'];
$included_files    = get_included_files();

require_once dirname(__DIR__).'/vendor/autoload.php';
defined('BASE_PATH') OR exit('No direct script access allowed');

/*
 * Initialize Twig.
 */
callTwig();

/*
 * Initialize AltoRtouter.
 */
callAltoRouter();

/*
 * Debug Functions.
 */
if(isDebuger()) {
    dump(microtime()-$app_run_time.' Time / '.round((memory_get_usage() - $app_memory_size)/1048576,2).' mb');
    dump(errors());
    dump($_ENV);
    //dump(getAllInstance());
    //dump($_SERVER);
    //dump(array_diff(get_defined_functions()['user'], $defined_functions));
    //dump(array_diff(get_declared_classes(), $declared_classes));
    //dump(array_diff(get_included_files(), $included_files));
}

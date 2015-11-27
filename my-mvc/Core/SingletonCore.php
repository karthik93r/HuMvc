<?php

namespace MyMvc\Core;

defined('BASE_PATH') OR exit('No direct script access allowed');

abstract class SingletonCore {
	private static $instances = array();
	private static $backtrack = array();

	protected function __construct() {}
	final private function __clone() {}
	final private function __wakeup() {}

	/*
	 *
	 */
	final public static function createInstance($class_name = NULL, $params = null) {
		$class_name === NULL ? $class_name = get_called_class() : NULL;

		if (! isset(self::$instances[$class_name])) {
			//self::$backtrack[$class_name] = self::$instances[$class_name]->get_called_backtrace();
			self::$instances[$class_name] = new $class_name($params);
			self::$backtrack[$class_name] = debug_backtrace();;
		}
		return self::$instances[$class_name];
	}

	/*
	 *
	 */
	final public function callBacktrace() {
		return debug_backtrace();
	}

	/*
	 *
	 */
	final public static function getInstance($class_name = NULL) {
		if($class_name !== NULL) {
			return self::$instances[$class_name];
		} else {
			return self::$instances[get_called_class()];
		}
	}

	/*
	 *
	 */
	final public function getBacktrace($class_name = NULL) {
		if($class_name !== NULL) {
			return self::$backtrack[$class_name];
		} else {
			return self::$backtrack[get_called_class()];
		}
	}

	/*
	 *
	 */
	final public static function getAllBacktrace() {
		return self::$backtrack;
	}

	/*
	 *
	 */
	final public static function getAllInstance() {
		return self::$instances;
	}
}

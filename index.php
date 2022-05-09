<?php

ini_set('display_errors', '1');

if (version_compare(PHP_VERSION, '8.1.0', '<')) {
    die('This application needs PHP >= 8.1.0 but your PHP version is ' . PHP_VERSION . '.');
}

function autoload($class_name) {
    require_once(__DIR__ . '/classes/' . $class_name . '.php');
}

spl_autoload_register('autoload');

Router::route();

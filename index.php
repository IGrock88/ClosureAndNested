<?php
/**
 * User: IGrock
 * Date: 15.06.2018
 * Time: 10:29
 */

spl_autoload_register(function ($className) {
    require_once __DIR__ . DIRECTORY_SEPARATOR . str_replace('\\', DIRECTORY_SEPARATOR, $className) . '.php';
});

(\components\App::getInstance())->init();
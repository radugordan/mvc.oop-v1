<?php
session_start();

spl_autoload_register(function ($class) {
    $pathLibs = 'classes/' . $class . '.php';
    $pathModels = 'models/' . $class . '.php';
    $pathContorllers = 'controllers/' . $class . '.php';

    if (file_exists($pathContorllers)) {
        require_once $pathContorllers;
    } elseif (file_exists($pathLibs)) {
        require_once $pathLibs;
    } elseif (file_exists($pathModels )) {
        require_once $pathModels ;
    }
});
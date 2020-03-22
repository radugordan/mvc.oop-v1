<?php
require('config.php');
require('autoload.php');

$router = new Router($_GET);

$controller = $router->createController();

if ($controller){
    $controller->executeAction();
}
<?php
$autoload = 'src/Library/config/autoload.php';
require $autoload;

$router = new \Library\Router\Router;
$router->route();

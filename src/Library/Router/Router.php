<?php

namespace Library\Router;

class Router
{

    public function route()
    {
        $route = $_SERVER['PATH_INFO'] ?? '/';
        // Récupération des routes de l'application
        $routes = require 'src/Library/config/routes.php';

        if (isset($routes[$route])) {
            // $action = $routes[$route];
            // $controllerName = $action[0];
            // $method = $action[1];
            list($controllerName, $method) = $routes[$route];

            // Instanciation magique du contrôleur
            $controller = new $controllerName();
            $controller->$method();
        } else {
            // Page 404
            header('HTTP/1.0 404 Not Found');
        }
    }
}

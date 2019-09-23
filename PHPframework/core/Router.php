<?php

namespace App\Core;

use Exception;

class Router
{
    protected $routes = [
        'GET' => [],
        'POST' => []
    ];

    public static function load($file)
    {
        $router = new static;
        require $file;
        return $router;
    }
    public function get($uri, $controller)
    {
        $this->routes['GET'][$uri] = $controller;
    }
    public function post($uri, $controller)
    {
        $this->routes['POST'][$uri] = $controller;
    }
    public function direct($uri, $requestType)
    {
        try {
            if (array_key_exists($uri, $this->routes[$requestType])) {
                //PagesController@home
                return $this->callAction(
                    ...explode('@', $this->routes[$requestType][$uri])
                );
                //return $this->routes[$requestType][$uri]
            }
    
            throw new Exception("<h1>404</h1>No routes defined for this uri: ".$uri);
        } catch (Exception $e) {
            echo $e->getMessage();
            die();
        }
    }

    protected function callAction($controller, $action)
    {
        $controller = "App\\Controllers\\{$controller}";

        $controller =new $controller;
        try {
            if (!method_exists($controller, $action)) {
                throw new Exception("{$controller} does not respond to {$action} action", 1);
            }
            return $controller->$action();
        } catch (Exception $e) {
            echo 'Message: ' .$e->getMessage();
            die();
        }
    }
}
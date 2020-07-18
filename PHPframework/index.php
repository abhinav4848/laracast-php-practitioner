<?php

require 'vendor/autoload.php';
require 'core/bootstrap.php';

use App\Core\Router;
use App\Core\Request;

//use App\Core\{Router, Request};

// dd(Request::method());

Router::load('app/routes.php')
    ->direct(Request::uri(), Request::method());

/**
 * index.php begins by getting bootstrap, router, request
 * Request returns the url path and request type, by analysing the global variable $_SERVER
 * Router class is active. The static load method is called and it loads ie. requires the routes file
 * and returns a static $router
 * ?????????????????????
 * The routes from the routes file then use the $router populate the protected routes variables.
 *
 * Then "direct" checks if the uri is present in the request type array.
 * If yes, calls callAction to directly execute the method of the mathcing controller
 * ?????????????????????
 *
 */
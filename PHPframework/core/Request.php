<?php

namespace App\Core;

class Request
{
    public static function uri()
    {
        # return str_replace("/learn/php/classes/refactoring/","",$_SERVER['REQUEST_URI']);

        # $url = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '');

        //return str_replace("/laracast/refactoring/", "", $url);
        
        return trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
    }

    public static function method()
    {
        return $_SERVER['REQUEST_METHOD'];
    }
}
<?php

use App\Core\App;
use App\Core\Database\QueryBuilder;
use App\Core\Database\Connection;

App::bind('config', require 'config.php');

//testing
//die(var_dump(App::get('config')));

App::bind(
    'database',
    new QueryBuilder(
        Connection::make(
            App::get('config')['database']
        )
    )
);
<?php

return [
    'database'=> [
        'name'=>'spsdaurm_users',
        'username'=>'spsdaurm_user',
        'password'=>'12345',
        'connection'=>'mysql:host=localhost',
        'options'=>[
            PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION]
    ]
];
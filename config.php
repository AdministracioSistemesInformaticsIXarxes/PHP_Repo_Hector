<?php

$config = [
    'database' => [
    'user' => get_env('DB_USERNAME'),
    'password' => get_env('DB_PASSWORD'),
    'databasetype' => get_env('DB_CONNECTION'),
    'host' => get_env('HOST'),
    'name' => get_env('DB_DATABASE'),
    ]
];


//        'database' => [
//    'user' => get_env'debian-sys-maint',
//    'password' => get_env'GUykDTgIdevbmYSf',
//    'databasetype' => get_env'mysql',
//    'host' => get_env'localhost',
//    'name' => get_env'phplaraveldevs',
//    ]
//];
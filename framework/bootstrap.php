<?php

use framework\App;
use framework\Database\Connection;
use framework\Database\Database;
use Framework\Route;

$routes = require '../routes.php';

$ddtenv = Dotenv::createImmutable(__DIR__ . '/app');
$ddtenv->load();   

require 'framework/helpers.php';

App::bind('config', require 'config.php');

App::bind('database', Database::make(
    Connection::make(App::get('config')['database'])
));

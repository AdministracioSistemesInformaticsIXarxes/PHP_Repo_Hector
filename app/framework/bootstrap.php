<?php

use Framework\App;

$app = new App();

//Laravel Sevice Providers
$app->bind('config', require 'config.php');
<?php

require 'config.php';

require 'app/helpers.php';

require 'app/Task.php';

$tasks = fetchAllTasks(connectDB($config));

$greeting = greet();

//$greeting = 'Hola ' . $_GET['name'] . ' ' . $_GET['name'] . '!';
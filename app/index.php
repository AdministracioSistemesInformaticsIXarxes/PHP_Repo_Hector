<?php

require 'config.php';

require 'app/helpers.php';

require 'app/Task.php';

$dbh = connectDB($config);

$statement = $dbh->prepare('SELECT * FROM tasks;');

$statement->execute();

//Fetch all tasks
$tasks = $statement->fetchAll(PDO::FETCH_CLASS, 'Task');

$greeting = greet();

//$greeting = 'Hola ' . $_GET['name'] . ' ' . $_GET['name'] . '!';
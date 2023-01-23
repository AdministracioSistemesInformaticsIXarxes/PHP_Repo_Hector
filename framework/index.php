<?php

use Framework\App;


require 'app/helpers.php';


$tasks = App::get('database')->selectAll('tasks');

//$database = new Database(App::get('config')['database']); // -> Laravel no utilitzem gairebé mai new -> DI i Container
//$tasks = Database::selectALl('tasks'); //Crida estàtica -> sense ús de new
//$tasks = Task::selectAll('tasks'); -> Laravel Eloquent

$greeting = greet();
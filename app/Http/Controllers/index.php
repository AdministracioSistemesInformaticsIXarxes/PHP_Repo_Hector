<?php

use Framework\App;

$tasks = App::get('database')->selectAll('tasks');
//tasks = Task::selectAll('tasks'); - Laravel Eloquent

require '../resources/views/index.blade.php';

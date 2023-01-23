<?php

namespace framework\Database;

use framework\Task;
use PDO;

class Database
{
    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }
    public static function selectAll($table){

        $statement = static::$dbh->prepare("SELECT * FROM $table;");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS, Task::class);
    }


    function insert(){
        // TODO
    }
}
<?php

namespace framework;

use Exception;

class App {

    private $container = [];

    public static function bind ($key, $value) {
        static::$container[$key] = $value;
    }

    public function get ($key) {
        if (! array_key_exists($key, $this->container)) {
            throw new Exception("No {$key} is bound in the container.");
        }
        return $this->container[$key];
    }
}
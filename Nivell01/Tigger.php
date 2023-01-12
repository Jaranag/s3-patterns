<?php

class Tigger{

    private static $instances = [];
    private static $roarNumber = 0;

    protected function __construct() {
        echo "Building character..." . '<br>' . PHP_EOL;
    }
    protected function __clone() {}
    public function __wakeup() {
        throw new \Exception("Cannot unserialize a singleton.");
    }

    public static function getInstance(): Tigger{
        $cls = static::class;
        if (!isset(self::$instances[$cls])) {
            self::$instances[$cls] = new static();
        }

        return self::$instances[$cls];
    }

    public function roar() {
        
        self::$roarNumber++;
        echo "Grrr!" . '<br>' . PHP_EOL;
    }

    public function getCounter() {

        echo 'Tigger has roared '. self::$roarNumber . ' times.' . '<br>' . PHP_EOL;

    }

}



?>
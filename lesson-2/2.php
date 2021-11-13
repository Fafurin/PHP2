<?php

trait Singleton {
    static protected $self;
    private function __construct(){
    }

    public static function getInstance()
    {
        if (self::$self === null) {
            self::$self = new self();
        }
        return self::$self;
    }
}

class SingletonClass {
use Singleton;
}
$singletonObject = SingletonClass::getInstance();
var_dump($singletonObject);
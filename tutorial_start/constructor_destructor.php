<?php

class Cars{


    public $wheel_count=4;
    static $door_count=2;

    function __construct(){
        echo $this->wheel_count;
        echo self::$door_count++;
    }

//    destruktory sa bardzo rzadko uzywane w PHP
//    function __destruct(){
//        echo $this->wheel_count;
//        echo self::$door_count--;
//    }
}

$bmw = new Cars();
$bmw2 = new Cars();
$bmw3 = new Cars();






<?php

class Cars{

    var $wheels = 4;

    function greetings(){
        echo "hello";
    }

}

$bmw = new Cars();

class Trucks extends Cars{

    var $wheels=5; // nadpisze to co jest w klasie, po której dziedziczy

}

$tacoma = new Trucks();
echo $tacoma->wheels;

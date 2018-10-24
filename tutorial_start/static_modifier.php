<?php

class Cars{

    // niestatyczne - działamy na obiekcie (na instancji), nie potrzebny znak '$'
    // statyczne (properties, methods) - nie potrzeba obiektu, odnosimy się do nich po klasie, konieczny znak '$'
    static $wheel_count=4;
    static $door_count=4;

    // pola musza byc statyczne
    static function car_detail(){
        echo Cars::$wheel_count;
        //echo self::$wheel_count;//<-- zamiast nazwy klasy mozna uzyc slowka kluczowego 'self'
        echo Cars::$door_count;
    }
}

$bmw = new Cars();
echo 'Cars::$door_count <br>';
echo Cars::$door_count;
echo "<br>car_detail() <br>";
Cars::car_detail();
















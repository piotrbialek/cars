<?php

class Cars{

    //wewnatrz klasy slowko kluczowe 'var' jest wymagane przy tworzeniu zmiennych
    var $wheel_count=4;
    var $door_count=4;

    function car_detail(){
        return "this car has ".$this->wheel_count." wheels";
    }
}

// poza klasą słówko kluczowe 'var' nie jest wymagane, ale w klasie juz tak
$bmw = new Cars();
$mercedes = new Cars();

echo $bmw->door_count;
echo "<br>";
echo $mercedes->door_count=3;
echo "<br>";
echo $mercedes->car_detail();




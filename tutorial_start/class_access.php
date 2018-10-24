<?php

class Cars{


    public $wheel_count=4; //dostep wszedzie
    private $door_count=4; //dostep wewnatrz klasy
    protected $seat_count=2; //dostep wew klasy i klas dziedziczacych

    function car_detail(){
        echo $this->wheel_count;
        echo $this->door_count;
        echo $this->seat_count;
    }
}

$bmw = new Cars();

//echo $bmw->wheel_count;
//echo "<br>";
//echo $bmw->door_count=3;
//echo "<br>";
//echo $bmw->seat_count;
//echo "<br>";
$bmw->car_detail();





<?php

class Cars{


    private $wheel_count=4;

    function get_values(){
        echo $this->wheel_count;
    }

    function set_values($value){
        $this->wheel_count=$value;
    }

}

$bmw = new Cars();
//echo "<br>";
$bmw->set_values(443);
$bmw->get_values();




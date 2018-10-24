<?php

class Cars{

    function greetings(){

    }

    function greetings2(){
        echo "greetings2";
    }
}

$my_methods=get_class_methods('Cars');


foreach ($my_methods as $method){
    echo "$method<br>";
//    echo $class.'<br>';
}
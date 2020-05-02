<?php



class Cars {

    function greetings(){

    }
    function name(){

    }


}

$my_methods = get_class_methods('Cars');

foreach($my_methods as $method){

    echo $method . "<br>";
}


?>
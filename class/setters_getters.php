<?php

class Cars {

    private $drivers = 1;


    function get_values(){

        echo $this->drivers;


    }

    function set_values(){


        $this->drivers = 10;

    }


}

$bmw = new Cars();

$bmw->set_values();
$bmw->get_values();

?>
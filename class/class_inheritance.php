<?php



class Cars {

    var $wheels = 4;
    var $drivers = 1;
    var $pass = 4;
    var $doors = 4;


    function car_details(){

        return "Hello this is class inheritance";

    }


}

$bmw = new Cars();

class Truck extends Cars{


}

$toyota = new Truck();

echo $toyota->wheels;


?>
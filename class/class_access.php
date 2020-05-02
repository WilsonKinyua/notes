<?php



class Cars {

    public $wheels = 4;
    private $drivers = 1;
    protected $pass = 4;
    var $doors = 4;


    function car_details(){

        echo $this->wheels;
        echo $this->drivers;
        echo $this->pass;



    }


}

$bmw = new Cars();

echo $bmw->wheels;



class Truck extends Cars{

}


$toyota = new Truck();
echo $toyota->wheels;

?>
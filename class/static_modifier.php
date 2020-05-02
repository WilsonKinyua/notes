<?php



class Cars {


    static $drivers = 1;
    static $pass = 10;


    static function car_details(){


        echo Cars::$drivers;
        echo Cars::$pass;



    }


}

$bmw = new Cars();


echo Cars::$drivers;

echo "<br>";

Cars::car_details();

?>
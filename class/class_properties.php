<?php



class Cars {

    var $wheel_count = 4;
    var $door_count = 5;

    function car_details(){

        echo "This is car has " . $this->wheel_count . " wheels.";

    }

    function nmw_details(){

        echo "This is car has " . $this->door_count . " doors.";

    }



}

$bmw        = new Cars();

$mecerdes   = new Cars();

echo $bmw->wheel_count;
echo "<br>";
echo $mecerdes->wheel_count = 10;
echo "<br>";
echo $mecerdes->car_details();
echo "<br>";
echo $mecerdes->nmw_details();
?>
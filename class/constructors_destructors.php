<?php



class Cars {

    public $wheels = 4;
    static $doors =12;

    function __construct(){

        echo $this->wheels;
        echo self::$doors++;

        
    }

}

$bmw = new Cars();
$kawasaki = new Cars();
$tiger = new Cars();

?>
<?php


// parent static class
class Cars {

    // class properties
    static $pass = 10;

// class methods
    static function car_details(){

        return self::$pass;

    }


}


// child class inheriting from the parent class

class truck extends Cars{

    static function truck_details() {
        
        echo parent::car_details();

    }

}

// class inheriting from the truck
class train extends truck {

    static function train_details(){

        echo parent::truck_details();

    }
}


train::train_details();

?>
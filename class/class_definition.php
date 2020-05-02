<?php



class Cars {

}

$my_classess = get_declared_classes();

foreach($my_classess as $class){
    echo $class . '<br>';
}

?>
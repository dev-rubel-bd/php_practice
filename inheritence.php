<?php

class car{
    public $name, $model;
    function __construct($name,$model){
        $this->name=$name;
        $this->model=$model;
    }
    function print(){
        echo "This car name is".$this->name ." and model ".$this->model;

    }
}
class car_info extends car{
    public $color;
    function __construct($color){
        $this->color=$color;
    }
    function print(){
        echo "This car name is ".$this->name ." and model ".$this->model." and color ". $this->color;
    }
}
$bmw=new car_info("bmw","i5","black");

$bmw->print();

?>
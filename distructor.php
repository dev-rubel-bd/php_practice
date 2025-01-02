<?php
class traffic{
    public $name, $seats;
    function __construct($name,$seats){
        $this->name=$name;
        $this->seats=$seats;
    }
    function __destruct(){
        echo "The traffic name".$this->name.". There have ". $this->seats. " seats";
    }
}
$bus= new traffic("Bus","48");

?>
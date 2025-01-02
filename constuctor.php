<?php
class flowers{
    public $name,$color;                            // crteate a class
    function __construct($name,$color){            // construction

        $this->name=$name;
        $this->color=$color;
    }

    function get_name(){
        return $this->name;

    }
    function get_color(){
        return $this->color;
    }
}

$lily= new flowers("Lily","white");                 // create an object for flowers class  
echo $lily->get_name();
echo "<br>";
echo $lily->get_color();

echo "<br>";


class car{
    public $brand,$model,$color,$price;
    function __construct($brand,$model,$color,$price){
        $this->brand=$brand;
        $this->model=$model;
        $this->color=$color;
        $this->price=$price;
    }

    function car_info(){
        echo "This car model is " . $this->model." and brand is " . $this->brand . ". For " . $this->color . " color price " . $this->price . ".";
    }
}
$car1=new car("BMW","BMW i5","black","25 lakh");
$car1->car_info();
echo "<br>";
$car2=new car("BMW","BMW i5","Red","27 lakh");
$car2->car_info();
echo "<br>";
$car3=new car("Toyota","Toyota Avalon","blue","21 lakh");
$car3->car_info();

echo "<br>";
echo "<br>";
echo "<br>";

class calculation{
    public $num1, $num2,$result;

    public function __construct($num1,$num2){
        $this->num1=$num1;
        $this->num2=$num2;
    }
    function sum(){
        $this->sum=$this->num1+$this->num2;
        echo $this->sum;
    }
    function sub(){
        $this->sub=$this->num1 - $this->num2;
        echo $this->sub;
    }
}
$sum= new calculation(20,30);
$sum->sum();
echo "<br>";
$sub= new calculation(20,30);
$sub->sub();

?>
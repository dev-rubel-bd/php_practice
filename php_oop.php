<?php
class calculation{           //creeate a a class 
    public $a,$b,$c;        //propertys

    function sum(){             //Methodes

        $this->c=$this->a+$this->b;
        return $this->c;
    }


    function sub(){       //Methodes

        $this->c=$this->a-$this->b;
        return $this->c;
    }


}
$c1=new calculation();              //create an object
$c1->a=20;
$c1->b=30;
echo "sum of value c1 =" .$c1->sum() ."<br>";

echo "sub of value c1 =" .$c1->sub()."<br>";


$c2=new calculation();              //create an object 
$c2->a=60;
$c2->b=20;
echo "sub of value c1 =" .$c2->sub()."<br>"  ;






class fruits{                          // create Class
    public $name,$color;              // propertys

    function set_name($name){         // create Method
        $this->name=$name;
    }
    function get_name(){
        return $this->name ;
    }
}
$apple= new fruits();                //creat object
$apple->set_name("Apple");
$banana= new fruits();
$banana->set_name("Banana");


echo $apple->get_name();
echo "<br>";
echo $banana->get_name();

?>


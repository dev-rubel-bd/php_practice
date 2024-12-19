<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //Echo/print
    $example="Hello";  
    echo $example."<br>"; 
    //variables
    //variables creating
    $x = 10 ;

    //for geting variables types:(.gettype , var_dump)

    echo "Data type of x: " . gettype($x) . "<br/>";
    $y = 10.55;
    echo "Data type of y: " . gettype($x) . "<br>";
    $z = "54";
    echo "Data type of z:" . gettype($z) . "<br>";
    $w = [23,45,9,32,12];
    echo "Data type of w:".gettype($w)."<br>";

    $o="banglsdsh";
    $s=[3,9,7,5,6];
    var_dump($o);
    var_dump($s);
    var_dump(is_numeric($s)); //boolean 
    var_dump(is_array($s));
    var_dump(is_float($s)); echo "<br>";
    var_dump(is_long($s));

    echo "<br>";

    //srting all methodes:
    $word= "hello world";
    echo strlen($word)."<br>";
    echo str_word_count($word) ."<br>";
    echo strtoupper($word)."<br>";
    echo strtolower($word)."<br>";
    echo str_replace("world", "Rupom", $word) ."<br>";
    echo strrev($word). "<br>";

    $arr= explode(" ",$word); //convert string to array
    print_r($arr);
    echo substr($word,2,7) ."<br>";

    $e = "one";
    $f = "two";
    $g = $e . $f; //Concatenate Strings
    echo $g;
    echo "<br>";
    echo substr($g, 2,3); echo "<br>";

    //all Numbers and boolean
    $r=1020.45;
    $convert_integer = (int)$r;
    echo $convert_integer ;
    $convert_string = (string)$r;
    echo $convert_string ;
    $convert_boolean = (bool)$r;
    echo $convert_boolean ;
    $convert_array= (array)$r;
    var_dump($convert_array);

    //all math methodes
    echo(pi() . "<br>"); //The pi() function returns the value of PI
    echo (rand() ."<br>"); //for  get a random rumber
    echo(rand(40, 80)); // for get a random number from a declairing renge.
    echo(min(0, 150, 30, 20, -8, -200) . "<br>");  //PHP min()  Functions for min number
    echo(max(0, 150, 30, 20, -8, -200) . "<br>"); //PHP max() Functions for max number
    echo(abs(-6.7) . "<br>"); //returns the  positive value of a number.
    echo(sqrt(64) . "<br>");  //returns the root of a number.
    echo(round(0.60). "<br>"); // converting a floating-point number to its nearest integer.

    // ***********************************************************8******************************************************************* */



    $time=date("H");
if($time<"9"){
echo "Now breakfast Time" ;
}
elseif($time>"13"){
echo "Now Lunch time" ;
}
else{
echo "Now Dinner Time" ;
}

$x=20;
$y=$x<50 ? "$x is less than 50": "$x is greater than 50";
echo $y;

echo "<br>";
$cars=array("volvo","Mahindra","Toyota");
var_dump($cars);
echo "<br>";
echo $cars[0];

echo "<br>"; 

$fruits=array("Mango","apple","Orange");
$fruits[1]="guava";
var_dump($fruits);
echo "<br>";


$flower=array("rose", "lily","amni");
foreach ($flower as $x){
    echo "$x <br>";
}

echo "<br>";
$fruits=array("Mango","apple","Orange");
echo count($fruits);

echo "<br>";
$name=["rupom","Roni"];
$name[]="Rumon";
var_dump($name);

echo "<br>";

$name=["Rupom","roni"];
array_push($name, "Rumon");
var_dump($name);

echo "<br>";
$arr=[40,60,30,20];
array_pop($arr);
var_dump($arr);

echo "<br>";

foreach($arr as $r){
    echo $r;
}

echo "<br>";
$arr=[40,70,90,30];
array_splice($arr,1,2);
var_dump($arr);

$arr=[40,70,90,30];
array_splice($arr,1,2,50);
var_dump($arr);

echo "<br>";

$fruit_pot=["apple","banana","orange"];
if(in_array("apple",$fruit_pot)){
    echo "Got Apple"."<br>";
}
else{
    echo "There have no Apple"."<br>";
}
if(in_array("banana",$fruit_pot)){
    echo "Got Banana"."<br>";
}
else{
    echo "There have no Banana"."<br>";
}
if(in_array("Guava",$fruit_pot)){
    echo "Got Guava"."<br>";
}
else{
    echo "There have no Guava"."<br>";
}

$rrr=[1,"2",3];
$key=in_array(3,$rrr);
if ($key!==false){
    echo "value found: $key";
}
else{
    echo "value not found";
}

echo "<br>";

$yyy=[29,30,"cow",71];
$xxx= array_keys($yyy);
print_r($xxx);


$lll = ["a" => 1, "b" => 2];
$values=array_values($lll);
print_r($values);

echo "<br>";

$nm = [3, 1, 2,6,5];
asort($nm);
print_r($nm);

echo "<br>";

$ab=["a"=>"apple","c"=>7,"e"=>5,"b"=>1];
ksort($ab);
print_r($ab);

echo "<br>";

$name="toofan";
$birth=2024;
$new_array=compact("name","birth");
print_r($new_array);

$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
extract($car);
echo $brand;

echo "<br>";

$pm=array_fill(1,3,"rubel");
print_r($pm);


$key=["a","b","c"];
$arry=array_fill_keys($key,"rubel");
echo "<pre>";
print_r($arry);
echo "<pre>";

echo "<br>";

// $data=[3,4,6,7,9,3];
// function myFun($v){
//     return($v==3);
// }
// $filter_data=array_filter($data,"myFun");
// print_r($filter_data);

echo "<br>";

$data=[23,45,65,20,40,21,26];
function myFun($var){
return($var==65);
}
$filter_data=array_filter($data,function ($var){
    return($var==65);
    });
print_r($filter_data);

$data=[23,45,65,20,40,21,26];
$filter_data=array_filter($data,function($var){
return $var % 2==0;
});

echo "Even Number:";
print_r($filter_data);

echo "<br>";

$number=[21,12,5,7,"rupom","17"];
echo array_sum($number);
echo "<br>";
$numbers=[21,12,5,7];
echo array_product($numbers);

echo "<br>";

$add_num=[3,4,7,8];
$result=array_reduce($add_num,function($num1,$num2){
    return $num1+$num2;
},1);
echo $result;

echo "<br>";
$myNumber=[2,4,6,1,7];
$map_number=array_map(function($x){
    return $x+$x;

},$myNumber);
print_r($map_number);

$strings = ["hello", "world"];
$uppercased = array_map('strtoupper', $strings);

print_r($uppercased);

$key=["rubel","rupom","rakib"];
$value=[20,30,40,];
$result= array_combine($key,$value);
print_r($result);


$input=["rupon"=>20,"rubel"=>30,"anondo"=>40];
$result=array_flip($input);
print_r($result);

$arr22=[1,5,4,3,5];
$results=array_unique($arr22); //problem
print_r($results);


$fruit_pot1=["apple","banana","orange"];
$fruit_pot2=["paineapple","banana","charry"];
$result=array_diff($fruit_pot1,$fruit_pot2);
print_r($result);



$fruit_pot3=[1=>"apple","2"=>"banana","3"=>"orange"];
$fruit_pot4=[1=>"paineapple","2"=>"banana","4"=>"charry"];
$result3=array_diff_key($fruit_pot3,$fruit_pot4);
print_r($result3);

$fruit_pot1=["apple","banana","orange"];
$fruit_pot2=["paineapple","banana","charry"];
$result=array_intersect($fruit_pot1,$fruit_pot2);
print_r($result);

shuffle($fruit_pot1);
print_r($fruit_pot1);


$fruits = ["apple", "banana", "cherry", "date"];
$randomKey = array_rand($fruits,2);
foreach($randomKey as $x){
    echo  $fruits[$x]."<br>";
};



    ?>  
</body>
</html>  
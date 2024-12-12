
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

    echo "Data type of x: " . gettype($x) . '<br/>';
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
    echo(pi()); //The pi() function returns the value of PI
    echo(min(0, 150, 30, 20, -8, -200) . "<br>");  //PHP min()  Functions for min number
    echo(max(0, 150, 30, 20, -8, -200)); //PHP max() Functions for max number

    $u=50.46;


  


    ?>  
</body>
</html>  
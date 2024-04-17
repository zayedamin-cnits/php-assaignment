<?php
echo "Hallo World";

$a=10;
$b=20;
echo $a+$b;

echo "<br>";

echo phpversion();

echo "<br>";
$number=50;
echo $number;


function result() {
    $h = "A+" ;
        echo " <p> my resul is : $h </p>" ;  
}
result();



if ($a > $b) {
    echo "a is bigger than b";
} elseif ($a == $b) {
    echo "a is equal to b";
} else {
    echo "a is smaller than b";
}


echo "<br>";



echo "<br>";
$j = 80;
$k = 90;
if($j ==80){
    echo "$j is right ";
}else{
    echo "Worng";
}


echo "<br>";
if($j > $k){
    echo"$j is small than $k";
}else{
    echo "error";
    
}


echo "<br>";
$l = "Hello World!";
echo str_replace( "World", "Someone",$l);







echo "<br>";
echo "<input value='" . $l ."'>";
echo "<br>";
echo substr($l, 6, 6 );

echo "<br>";
$z = 5443;
var_dump(is_int($z));
echo "<br>";
var_dump($l);
echo "<br>";
var_dump(is_int($j));
echo "<br>";
var_dump(is_int($l));

$q = acos(50);

echo "<br>";
var_dump($q);

$w = 2548.245;

echo "<br>";
$ints_cast = (int)$w ;
echo $ints_cast;

$re = 1523;


echo "<br>";
$re= (string)$re;
var_dump($re);


echo "<br>";
$re = (array)$re;
var_dump($re);

echo "<br>";


class Car {
public $color;
public $model;
public function __construct($color, $model) {
$this->color = $color;
$this->model = $model;
}
public function message() {
 return "My car is a " . $this->color . " " . $this->model . "!";
}
  }
  $myCar = new Car("red", "Volvo");
  
$myCar = (array) $myCar;
var_dump($myCar);


echo "<br>";

echo (pi());

echo "<br>";
$r = date("H");
if ($r>"20") {
echo "  have a good day";
}else{
    echo "have a good night";
 }
 




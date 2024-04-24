<?php

define( "NAME", " How are you ?");
echo NAME;

echo "<br>";

const me = "zayed" ;
echo me ;
 echo"<br>";
define( "info",[
    "my name Zayed",
    "17",
    "radhanagar"
]);
echo info[0];
echo"<br>";
  function my(){
    echo NAME ;
  }
my();

echo"<br>";
class marcidies{
    public function myCar(){
        return __class__;
    }
};
$kki = new marcidies();
echo $kki -> myCar();

echo"<br>";
echo __DIR__;

echo"<br>";
echo __FILE__;
echo"<br>";

function myName(){
    return __FUNCTION__;
}
echo myName();

echo"<br>";
echo __LINE__;

echo"<br>";
class name{
  public function Rohan(){
    return __METHOD__;
  }
}
$goe = new name();
echo $goe -> Rohan();

echo"<br>";

trait manage1{
  public function man1(){
    echo __TRAIT__;
  }
}
class Come{
  use manage1;
}
$obs = new Come();
$obs ->man1();
echo"<br>";

$x = 50;
$y = 150;
echo $x+$y;
echo"<br>";
echo $y-$x;
echo"<br>";
echo $y*$x;
echo"<br>";
echo $y/$x;
echo"<br>";
echo $x%$y;
echo"<br>";
echo $y**$x;

echo"<br>";

if ($x <= $y){
  echo "true";
}else{
  echo "false";
};
echo"<br>";

echo $x . $y;
echo"<br>";




$t ="30";

if ($t > "20") {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}
echo"<br>";
if ($t > 10) {
  echo "Above 10";
  if ($t > 20) {
    echo " and also above 20";
  } else {
    echo " but not above 20";
  }
}

echo"<br>";
?>  
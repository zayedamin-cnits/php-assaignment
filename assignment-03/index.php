<?php

$fav = "blue";

switch ($fav){
  case "red":
  echo "  color is red";
  break;
  case "blue":
  echo "color is blue"; 
  break;
case "green":
echo "color is green";
break;
}
echo"<br>";
$dat = 5;

switch ($dat) {
  case 1:
  case 2:
  case 3:
  case 4:
  case 5:  
    echo "The week feels so long!";
    break;
  case 6:
  case 0:
    echo "Weekends are the best!";
    break;
  default:
    echo "Something went wrong";
}
echo"<br>";
$num = 1;
while($num < 50){
  echo $num;
  $num++;
} 

echo"<br>";
 $ban = 1;
while ($ban < 15){
  if($ban == 5) break;
  echo $ban;
  $ban++;
}


$w = 1;
while ($w < 20){
  $w++;
  if($w == 10) continue;
  echo $w ;
  
}

echo"<br>";
$r = 0; 
while ( $r < 100){
  $r+=10;
echo "$r <br>";
}
echo"<br>";
$t= 1;
do{
  echo $t;
  $t++;
} while($t < 5);

echo"<br>";
for ( $a = 0; $a<= 15 ; $a++){
  echo " $a ";
}

echo"<br>";
for ( $b = 0; $b<= 100 ; $b+=10){
  echo " $b ";
}
echo"<br>";
$colors = array("blue","black","parple");

foreach ($colors as $x){
    echo"$x <br>";
}
echo"<br>";
$members = array("zayed"=>"35", "santo"=>"37", "sohan"=>"43");

foreach ($members as $x => $y) {
  echo "$x : $y <br>";
}
?>  
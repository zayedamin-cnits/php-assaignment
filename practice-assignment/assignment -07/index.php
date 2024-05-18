<?php



$a = 1;
while ($a < 26) {
//   if ($a == 3) continue;
  echo $a;
  $a++;
}

echo "<br>";

$d = 1;
do{
    echo $d;
    $d++;

}while($d < 15);    




echo "<br>"; 

for ($x = 0; $x <= 10; $x++) {
   
    echo "The number is: $x <br>";
  }

  $i = 1;
 
  echo "<br>";

  $fruit = array("mango", "banana", "äpple");

  foreach($fruit as $z){
    echo " $z <br>";
  }


  $members = array("rohan"=>"35", "shohan"=>"37", "arafat"=>"43");

  foreach ($members as $x => $y) {
    echo "$x : $y <br>";
  }


  for ($x = 0;$x < 10; $x++) {
    if ($x == 4) {
      break;
    }
    echo "The number is: $x <br>";
  }

  for($s = 0; $s< 100; $s+=10){
      if($s == 3) continue;
    echo "number is : $s  <br>";
  }
  

  $colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) {
  echo "$x <br>";
}

?>
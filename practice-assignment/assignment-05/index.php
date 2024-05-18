<?php



// if else condition

echo "<br>";
echo "<br>";


$mar = 75 ;

if ($mar >= 80 && $mar <= 100){
    echo "your grade is A+";
}elseif($mar >= 70 && $mar < 80){
    echo "your grade is A";
}elseif($mar > 60 && $mar < 70){
    echo "your grade is A-";
}elseif($mar >= 50 && $mar < 60){
    echo "ÿour grade is B";
}elseif($mar >= 40 && $mar < 50){
    echo " your grade is B-";
} elseif($mar >=33 && $mar < 40){
    echo " your grade is C";
}elseif($mar >=0 && $mar < 33){
    echo " your grade is fail";
} else{
    echo " not found";
}

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";


// switch
$num = 75 ;

switch (true){
    case($num >= 80 && $num <= 100):
        echo "your grade is A+";
        break;

     case($num >= 70 && $num < 80):
        echo "your grade is A";
         break;
     case($num >= 60 && $num < 70):
         echo "your grade is A-";
         break;

     case($num >= 50 && $num < 60):
         echo "your grade is B";
         break;
     case($num >= 40 && $num < 50):
         echo "your grade is B-";
         break;
      case($num >= 33 && $num <= 40):
          echo "your grade is C";
         break;
       case($num >= 0 && $num <= 33):
          echo "your grade is F";
          break;
       default :
       echo "not found";
}

?>
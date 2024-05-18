<?php
echo "<br>";
echo "<br>";

$temperature = 30 ;

if($temperature <= 0){
    echo "The Weather is Freezing";
}elseif($temperature > 0 && $temperature <=10){
    echo "The Weather is Cold";
}elseif($temperature > 10 && $temperature <= 20){
    echo "The Weather is Moderate";
}elseif($temperature > 20 && $temperature <= 30){
    echo "The Weather is Worm";
}elseif($temperature > 30){
    echo "The Weather is Hote";
}


?>  
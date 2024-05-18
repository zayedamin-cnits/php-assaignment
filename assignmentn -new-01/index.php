<?php
echo "<br>";
echo "<br>";


$weight = 8;
$kilometer = 120;

if($weight <= 5 && $kilometer <= 100 ){
    echo " Total Shipping Cost :". $kilometer * 5;
}elseif($weight <= 5 && $kilometer > 100 ){
    echo " Total Shipping Cost :".  $kilometer * 4;
}elseif($weight > 5 && $kilometer <= 100 ){
    echo " Total Shipping Cost :". $kilometer * 6;
}elseif($weight > 5 && $kilometer > 100 ){
    echo " Total Shipping Cost :".  $kilometer * 5;
}

?>
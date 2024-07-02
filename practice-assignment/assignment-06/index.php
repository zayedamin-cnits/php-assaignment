<?php

function sum($math,$phy , $che){
   $s = $math + $phy + $che;
   return $s;
}

function presrntage($sa){
    $pre = $sa / 3;
    echo $pre;
}

$total = sum(55,53,65);

presrntage ($total);


echo "<br>";
function there(& $string){
$string .= "there is a beautiful women.. ";
}

$str = "who you are...";

there($str);

echo $str;


echo "<br>";

function wow($am){
    echo " Who are you..? $am";
}

$func = "wow";
$func( "I am" );



echo "<br>";

$sayHello = function ($am){
    echo " Who are you..? $am";
};

$sayHello( "I am" );



?>
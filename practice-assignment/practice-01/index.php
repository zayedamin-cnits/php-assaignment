<?php


// Write a program that prompts the user to enter the original price of an item.
// Use an if statement to check if the price is greater than or equal to $100.
// If the price is $100 or more, apply a 10% discount (use multiplication).
// Display the original price and the discounted price (if applicable).

$price = 1200;


if($price >=100){
    $discount = $price * 0.9 ;
    echo " discount price (10%) : $discount";
}else {
    echo " no discount";
}



?>

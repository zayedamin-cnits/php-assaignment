<?php 

// count() & sizeof()

// $food = array('orange', 'mango', 'banana');

// echo count($food);
// echo sizeof($food);





// $food = array(
//     'fruist' => array( 'orange', 'mango', 'banana'),
//    ' veggie' => array( 'carrot', 'collard', 'pea')
// );
// echo count($food['fruist'] , 1);



// $food = array('orange', 'mango', 'banana', 'grapes');

// $len =  count($food);

// for ( $i = 0 ; $i < $len ; $i++){
//     echo $food[$i]. "<br>";
// }



$food = array('orange', 'mango', 'banana', 'grapes','orange');

echo "<pre>";
print_r(array_count_values($food));
echo "</pre>";







?>
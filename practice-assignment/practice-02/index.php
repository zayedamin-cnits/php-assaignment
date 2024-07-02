<?php

$emp = [
    [1, "Rohan", "Manager",50000],
    [2, "Robi", "Manager", 55000],
    [3, "Arafat","Salesman", 20000],
    [4, "sohan","salesman",18000]
];

// for($row = 0 ; $row < 4 ; $row++){
//     for($col = 0 ; $col < 4 ; $col++){
//         echo $emp [$row][$col] . "";
//     }
//     echo "<br>";
// }

echo "<table border = '2px' cellpadding = '5px' cellspacing = '0'>";

echo "<tr>
     <th>Emp Id.</th>
          <th>Emp Name</th>
               <th>Emp Designation</th>
                    <th>Emp Salary</th>
</tr>";

// foreach($emp as $v1){
//     echo "<tr>";
//     foreach($v1 as $v2){
// echo "<td> $v2 </td>";
//     }
//     echo "</tr>";   
// };

foreach ( $emp as list( $id, $name, $designation , $salary)){
    echo " <tr><td>$id </td> <td> $name </td> <td>$designation </td>  <td>$salary</td></tr> ";
};

echo "</table>";


?>
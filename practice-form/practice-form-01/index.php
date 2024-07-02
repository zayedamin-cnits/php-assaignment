


<!DOCTYPE html>
<html>
<body>

<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<label for="name"> Name :</label>
<input type="namber" name="fname" >
<input name="submit" type="submit">
</form>

<?php


if(isset($_POST['submit'])){

  $namber = $_POST['fname'] ;
    
if ($namber >= 80 && $namber <= 100){
    echo "<h2>your grade is A+</h2>";
}elseif($namber >= 70 && $namber < 80){
    echo "<h2>your grade is A</h2>";
}elseif($namber > 60 && $namber < 70){
    echo "<h2>your grade is A-</h2>";
}elseif($namber >= 50 && $namber < 60){
    echo "<h2> your grade is B</h2>";
}elseif($namber>= 40 && $namber < 50){
    echo "<h2> your grade is B-</h2>";
} elseif($namber >=33 && $namber < 40){
    echo " <h2>your grade is C </h2>";
}elseif($namber>=0 && $namber < 33){
    echo "<h2> your grade is fail</h2>";
} else{
    echo "<h2> not found </h2>";
}
}



?>

</body>
</html>

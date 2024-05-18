<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form   style="text-align: center; margin-top : 30px; "action="<?php $_SERVER['PHP_SELF'];?>" method="POST">
    <input type="text"style="padding: 10px; border:none; background-color: aquamarine; " class="from-control" name="evenoddNumber" required placeholder="check even and odd">
    <button type="submit" style="padding: 9px;background-color: aquamarine; border:none;" name="even_odd" class="btn btn-primary">Submit</button>
</form>


<?php
if(isset($_POST['even_odd'])){
    
    $evenoddNumber = $_POST['evenoddNumber'];
    if ($evenoddNumber >= 80 && $evenoddNumber <= 100){
        echo "<h2>your grade is A+</h2>";
    }elseif($evenoddNumber >= 70 && $evenoddNumber < 80){
        echo "<h2>your grade is A</h2>";
    }elseif($evenoddNumber > 60 && $evenoddNumber < 70){
        echo "<h2>your grade is A-</h2>";
    }elseif($evenoddNumber >= 50 && $evenoddNumber < 60){
        echo "<h2>ÿour grade is B</h2>";
    }elseif($evenoddNumber>= 40 && $evenoddNumber < 50){
        echo "<h2> your grade is B-</h2>";
    } elseif($evenoddNumber >=33 && $evenoddNumber < 40){
        echo " <h2>your grade is C </h2>";
    }elseif($evenoddNumber>=0 && $evenoddNumber < 33){
        echo "<h2> your grade is fail</h2>";
    } else{
        echo "<h2> not found </h2>";
    }
    
}
?>
</body>
</html>
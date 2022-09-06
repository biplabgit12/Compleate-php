<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While Loops</title>
</head>
<body>

<?php
    echo "while loops in php";echo"<br>";
    // echo 1;echo"<br>";
    // echo 2;echo "<br>";
    // echo 3;echo "<br>";
    // echo 4;echo "<br>";
    // echo 5;echo "<br>";

    /* 
    while (condition){
        some lines of code here;
    }
    */

    $i = 0; 
    while($i<5){
        echo "The value of i is ";
        echo $i;  
        echo "<br>";
        $i++; //increment kora kolo
                // OR
        // $i+=1; //increment kora kolo
    } 
?>
  
</body>
</html>

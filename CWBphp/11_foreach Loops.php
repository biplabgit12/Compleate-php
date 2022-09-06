<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>foreach Loops</title>
</head>
<body>

<?php
    echo "Welcome to the world of foreach loops <br>";
    $arr = array("Bananas", "Apples", "Harpic", "Bread", "Butter");

    // for ($i=0; $i < count($arr); $i++) {  //"count()" method/function element/array er length diye dai 
    //     echo $arr[$i];
    //     echo "<br>";
    // }


    // Better way to do this - foreach loops
    foreach ($arr as  $value){   //eai khane "$arr" er value "$value" er modhye chole gheche "one by one"
        echo "$value <br>";
    }

?>
    
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multi-Dimensional Arrays in php</title>
</head>
<body>

<?php

    echo "Welcome to multi dimensional arrays in php <br>";

    //Syntax
    // array (
    //     array (elements...),
    //     array (elements...),
    //    ...
    // ) 


    // Creating a 2 dimensional array
    $multiDim = array(array(2,5,7,8),
                    array(1,2,3,1),
                    array(4,5,0,1));


    // echo var_dump($multiDim);
    // echo $multiDim[1][2];

    // Printing the contents of a 2 dimensional array

    // for ($i=0; $i < count($multiDim); $i++) { 
    //     echo var_dump($multiDim[$i]);
    //     echo "<br>";
    // }

    for ($i=0; $i < count($multiDim); $i++) { 
        for ($j=0; $j < count($multiDim[$i]); $j++) { 
            echo $multiDim[$i][$j];
            echo " ";
        }
        echo "<br>";
    }

?>

</body>
</html>
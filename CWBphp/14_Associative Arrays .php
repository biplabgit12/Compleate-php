<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Array in php</title>
</head>
<body>
 <?php

echo "Welcome to associative arrays in php ";
// These are called indexed arrays:
// $arr = array('this', 'that', 'what');
// echo $arr[0];
// echo $arr[1];
// echo $arr[2]; 


// Associative arrays
$favCol = array('kaushik' => 'red','Pritam'=> 'green',
                    'Biplab'=> 'brown', 8=>'this' );

                    // echo $favCol['Biplab'];
                    // echo "<br>";
                    // echo $favCol['Pritam'];
                    // echo "<br>";
                    // echo $favCol[8]; 
foreach ($favCol as $key => $value) {
    echo "<br>Favorite color of $key is $value";
}

?>

</body>
</html>
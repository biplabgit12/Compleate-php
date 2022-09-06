<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Case Statements</title>
</head>
<body>
<?php

$age = 56;

switch($age){   //ekhane variable deya thake ar niche case deya thake oi case er songe je value mile jabe sei ta execute hobe

    case 12:

        echo "You are 12 years old <br>";

        break;

    case 45:

        echo "You are 45 years old <br>";

        break;

    case 56:

        echo "You are 56 years old boy <br>";

        break;

     default:

        echo "Your age is weird <br>";

        break;
    }
    
?>  
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For Loops</title>
</head>
<body>

    <?php
        echo "This is for loop in action <br>";

        for ($index=1; $index < 6; $index++) { 
            // for(initialization;condition; updation)
            echo "The number is $index <br>";
        }

        // Avoid running into infinite loops
        // for ($i=0; $i < 87; ) { 
        //     echo $i;
        // }

        echo "For loop has ended";
    ?>
    
</body>
</html>

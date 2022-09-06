<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connecting to MySQL Database from Php</title>    
</head>
<body>
    
<?php
    echo "Welcome to the stage where we are ready to get connected to a database <br>";
    /* 
    Ways to connect to a MySQL Database
    1. MySQLi extension
    2. PDO
    */
    // Connecting to the Database
    $servername = "localhost";
    $username = "root";
    $password = "";

    // Create a connection
    $conn = mysqli_connect($servername, $username, $password);

    // Die if connection was not successful
    if (!$conn){
        die("Sorry we failed to connect: ". mysqli_connect_error());
    }
    else{
        echo "Connection was successful";
    }

?>

</body>
</html>
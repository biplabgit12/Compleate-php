<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creating a MySQL Database using php</title>
</head>
<body>
    
<?php
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
        echo "Connection was successful<br>";
    }

    // Create a db
    $sql = "CREATE DATABASE dbBiplab";
    $result = mysqli_query($conn, $sql);

    // Check for the database creation success
    if($result){
        echo "The db was created successfully!<br>";
    }
    else{
        echo "The db was not created successfully because of this error ---> ". mysqli_error($conn);
    }
    
?>

</body>
</html>
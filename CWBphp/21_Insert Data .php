<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Data Into MySQL Using MySQLi using php</title>
</head>
<body>
<?php

    // Connecting to the Database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "dbBiplab";

    // Create a connection
    $conn = mysqli_connect($servername, $username, $password, $database);
    // Die if connection was not successful
    if (!$conn){
        die("Sorry we failed to connect: ". mysqli_connect_error());
    }
    else{
        echo "Connection was successful<br>";
    }

    // Variables to be inserted into the table
    $name = "Pritam";
    $destination = "Delhi";

    // Sql query to be executed
    $sql = "INSERT INTO `phptrip` (`name`, `dest`) VALUES ('$name', '$destination')";
    $result = mysqli_query($conn, $sql);

    // Add a new trip to the Trip table in the database
    if($result){
        echo "The record has been inserted successfully successfully!<br>";
    }
    else{
        echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
    }
?>

</body>
</html>
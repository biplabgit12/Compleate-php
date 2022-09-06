<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selecting and Displaying Data From Mysql</title>
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

    
   //data select korar query run kora holo
    $sql = "SELECT * FROM `phptrip`";
    $result = mysqli_query($conn,$sql);

    //Find the number of records returned
     $num = mysqli_num_rows($result);
     echo $num;
      echo "<br>";
      
      //Displaying the rows returnedby the sql query
      if ($num > 0) {
        //   $row = mysqli_fetch_assoc($result);
        //   echo var_dump($row);
        //   echo "<br>";
        //   $row = mysqli_fetch_assoc($result);
        //   echo var_dump($row);
        //   echo "<br>";
        //   $row = mysqli_fetch_assoc($result);
        //   echo var_dump($row);
        //   echo "<br>";
        //   $row = mysqli_fetch_assoc($result);
        //   echo var_dump($row);
        //   echo "<br>";
        //   $row = mysqli_fetch_assoc($result);
        //   echo var_dump($row);
        //   echo "<br>";


        //We can fetch better way using while loop
          while ($row = mysqli_fetch_assoc($result)) {
            // echo var_dump($row);
             echo $row["sno"]." my name is ". $row["name"]. " and  destination is ".$row["dest"];
              echo "<br>";
          }

     }
 
 
   ?>
   
</body>
</html>
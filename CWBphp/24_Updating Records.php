<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Updating and Records data using php</title>
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

   
    //Ekhane "WHERE" Clause use hoeache data select korar jonno "SELECT" query dara 
     $sql = "SELECT * FROM `phptrip` WHERE `dest` = 'Delhi'";
     $result = mysqli_query($conn,$sql);

     $num = mysqli_num_rows($result);
     echo $num . "record found in the database";
     echo "<br>";

     //select data gulo print kora holo 
      $no = 1;
     if ($num > 0) {
          while ($row = mysqli_fetch_assoc($result)) {
             echo $no." my name is ". $row["name"]. " and  destination is ".$row["dest"];
             $no++;
              echo "<br>";
          }

     }


     //Ekhane "WHERE" Clause use hoeache data Update korar jonno "UPDATE" query dara 
    $sql = "UPDATE `phptrip` SET `dest` = 'Delhi' WHERE `dest` = 'Kalkat'";
    $result = mysqli_query($conn,$sql);
    echo var_dump($result);
    
    
    $aff = mysqli_affected_rows($conn);
    echo "<br> Number of affected rows: $aff";

   if ($result) {
    echo "<br> We updated the record successfully";
}
else {
    echo "We could not update the record successfully";
}


    ?>
</body>
</html>
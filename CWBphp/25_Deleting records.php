<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deleting records from database in php</title>
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


  
     //Ekhane "WHERE" Clause use hoeache data Update korar jonno "UPDATE" query dara 
     $sql = "DELETE FROM `phptrip` WHERE `dest` = 'Delhi' LIMIT 2";
     $result = mysqli_query($conn,$sql);
     echo var_dump($result);
     
     
     $aff = mysqli_affected_rows($conn);
     echo "<br> Number of affected rows: $aff";
 
    if ($result) {
     echo "<br> We Deleted the record successfully";
 }
 else {
     echo "We could not Delete the record successfully";
 }
 
 

?>
</body>
</html>
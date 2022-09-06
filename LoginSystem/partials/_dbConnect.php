<?php
   $server = "localhost";
   $username = "root";
   $password = "";
   $database = "user";

   $con = mysqli_connect($server,$username,$password,$database);

    if (!$con) {
       die("Database is not connected".mysqli_connect_error());
    } 
   //  else {
   //     echo "Database is connected";
   //  }
    

?>
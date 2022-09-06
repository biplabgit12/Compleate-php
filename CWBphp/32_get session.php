<?php
   //Start session and get the data
    session_start();
  if (isset($_SESSION['username'])){
        echo "Welcome to " . $_SESSION['username']. "<br>";
        echo "And favorite color is " . $_SESSION['favcat'];

  }
 else {
    echo "Please login to continue";
  }
  
    

?>
<?php
//What is session ?
 //Used to manage information across difference pages
 
 //Verify the user login info
   session_start();  
     $_SESSION['username'] = "Biplab";
     $_SESSION["favcat"] = "Bags";
      echo "We have saved your session";
    

?>
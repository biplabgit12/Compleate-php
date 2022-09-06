<?php
   echo "Welcome to cookie in php  <br>";
    setcookie("chatagory","Phones",time() + 86400,"/");
     echo "Cookie is set <br>";


 //Get the cookie value
 $cat = $_COOKIE["chatagory"];
  if (!$_COOKIE["chatagory"]) {
    echo "Cookies value no found because Cookie is not set";
}
 else {
    echo "Cookie value is $cat";
  }


  
  //cookies delete process
//   setcookie("chatagory","Phones",time() - 86400,"/");
?>
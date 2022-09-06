<?php
  //fgets and fgetc in php
   $fptr = fopen("myfile.txt","r");
//  echo  fgets($fptr);
//  echo  fgets($fptr);
//  echo  fgets($fptr);
//  echo  var_dump(fgets($fptr));

//Reading file line by line
 /* while ($a = fgets($fptr)) {
    echo $a . "<br>";
 }
 echo "End of the file";
*/


//Reading file charecter by charecter
   /* while ($a = fgetc($fptr)) {
        echo $a . "<br>";
     }
    echo "End of the file";
  */


  //Write a programme which read the content of file until . has been encountered.
   while ($a = fgetc($fptr)) {
    echo $a . "<br>";
    if ($a == ".") {
       break;
    }
   }
   
   fclose($fptr);
?>

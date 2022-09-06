<?php
   $fptr = fopen("myfile.txt","a"); //"fopen" method kono file ke open kore
//    echo var_dump($fptr);
 if (!$fptr) {
    die("Unable to open this file. please enter valid filename.");
 }

 $content = fread($fptr,filesize("myfile.txt")); //"fread" method kono file ke read kore //filesize method kono file er vitorer contenter size diye dai
  fclose($fptr);  //"fclose" method kono file ke close kore dai
  echo $content;

?>
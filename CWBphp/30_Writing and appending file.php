<?php
 echo "writing and appending file in php";
//  $fptr = fopen("myfile2.txt","w");

//  fwrite($fptr,"This is my create file text.\n");
//  fwrite($fptr,"This is my create file text2.\n");
//  fwrite($fptr,"This is my create file text3.");


$fptr = fopen("myfile2.txt","a");
fwrite($fptr,"This is being appended to the file.");
 fclose($fptr);
 
?>
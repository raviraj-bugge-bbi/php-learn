<?php

/*****************************/
echo "<h3>--PHP Check End-Of-File - feof()--</h3>";
// The feof() function checks if the "end-of-file" (EOF) has been reached.
// The feof() function is useful for looping through data of unknown length.

// Syntax : feof($file);

$file = fopen("text.txt","r");

while(!feof($file)) {
    echo fgets($file) . "<br>";
  }
  fclose($file);
  
?>
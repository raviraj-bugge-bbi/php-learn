<?php

/*****************************/
echo "<h3>--PHP Read Single Character - fgetc()--</h3>";
// The fgetc() function is used to read a single character from a file.

$file = fopen("text.txt","r") or die("unable to open");

while(!feof($file)) {
    echo fgetc($file) . "<br>";
}

fclose($file);

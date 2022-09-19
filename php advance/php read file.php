<?php

/*****************************/
echo "<h3>--PHP Read File - fread()--</h3>";
// The fread() function reads from an open file.
// The first parameter of fread() contains the name of the file to read from and the second parameter specifies the maximum number of bytes to read.

// Syntax : fread($file,filesize("webDictionary.txt"));

$file = fopen("text.txt","r") or die("unable to open");
echo fread($file,filesize("text.txt"));

?>
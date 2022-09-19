<?php

/*****************************/
echo "<h3>--PHP Create File - fopen()--</h3>";
// The fopen() function is also used to create a file. Maybe a little confusing, but in PHP, a file is created using the same function used to open files.
// If you use fopen() on a file that does not exist, it will create it, given that the file is opened for writing (w) or appending (a).

// Syntax : $file = fopen("testFile.txt", "w")

$file = fopen("textCreate.txt","w") or die ("unable to open file");
echo fread("text.txt",filesize("text.txt")); // this will create text.txt file in the same directory

?>
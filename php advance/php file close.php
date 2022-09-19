<?php

/*****************************/
echo "<h3>--PHP Close File - fclose()--</h3>";
// The fclose() function is used to close an open file.
// The fclose() requires the name of the file (or a variable that holds the filename) we want to close:

// Syntax : fclose($file);

$file = fopen("text.txt","r") or die("cant open file or file not found");
echo fread($file, filesize("text.txt"));
fclose($file);

echo "<br>--------------------------<br>";
// below command will not execute because the file is already closed
echo fread($file, filesize("text.txt"));


?>
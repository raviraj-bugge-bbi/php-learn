<?php

/*****************************/
echo "<h3>--PHP Read Single Line - fgets()--</h3>";
// The fgets() function is used to read a single line from a file.

// Syntax : fgets($file);

$file = fopen("text.txt","r") or die ("unable to open");

echo fgets($file);

?>
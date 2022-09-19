<?php

/*****************************/
echo "<h3>--PHP Write to File - fwrite()--</h3>";
// The fwrite() function is used to write to a file.
// The first parameter of fwrite() contains the name of the file to write to and the second parameter is the string to be written.

$file = fopen("textCreate.txt","w") or die ("unable to open");

$txt = "This text is injected to this file using fwrite()\n";
fwrite($file, $txt);
fread($file,filesize("textCreate.txt"));

?>
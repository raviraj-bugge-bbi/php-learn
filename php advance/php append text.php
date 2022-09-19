<?php

/*****************************/
echo "<h3>--PHP Write to File - fwrite()--</h3>";
// You can append data to a file by using the "a" mode. The "a" mode appends text to the end of the file, while the "w" mode overrides (and erases) the old content of the file.

$file = fopen("textCreate.txt","a");
$txt = "\nThis text is appended to this file using (a - append mode)";
fwrite($file,$txt);
fclose($file);

?>
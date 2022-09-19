<?php

/*****************************/
echo "<h3>--PHP Overwriting--</h3>";
// Now that "newFile.txt" contains some data we can show what happens when we open an existing file for writing. All the existing data will be ERASED and we start with an empty file.

$file = fopen("textCreate.txt","w");
$txt = "overwriting the previous text with this sentence";
fwrite($file,$txt);
fclose($file);


?>
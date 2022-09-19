<?php
//-----------------------------------------------------------------------------------------
echo "<h1>--PHP File Open/Read/Close--</h1><br><br>";
// A better method to open files is with the fopen() function. This function gives you more options than the readfile() function.
// The first parameter of fopen() contains the name of the file to be opened and the second parameter specifies in which mode the file should be opened.

// The first parameter of fopen() contains the name of the file to be opened and the second parameter specifies in which mode the file should be opened.

$file = fopen("php file read open close.php","r") or die("unable to open");

// Modes	Description
// r	Open a file for read only. File pointer starts at the beginning of the file
// w	Open a file for write only. Erases the contents of the file or creates a new file if it doesn't exist. File pointer starts at the beginning of the file
// a	Open a file for write only. The existing data in file is preserved. File pointer starts at the end of the file. Creates a new file if the file doesn't exist
// x	Creates a new file for write only. Returns FALSE and an error if file already exists
// r+	Open a file for read/write. File pointer starts at the beginning of the file
// w+	Open a file for read/write. Erases the contents of the file or creates a new file if it doesn't exist. File pointer starts at the beginning of the file
// a+	Open a file for read/write. The existing data in file is preserved. File pointer starts at the end of the file. Creates a new file if the file doesn't exist
// x+	Creates a new file for read/write. Returns FALSE and an error if file already exists

// ?>
<?php

$serverName = "localhost";
$userName = "root";
$password = "root";

$connection = new mysqli($serverName, $userName, $password);

if($connection -> connect_error){
  die ("Connection failed: " . $connection -> connect_error . "\n");
}

// CREATING DATABASE
$sql = "CREATE DATABASE practice";


if($connection -> query($sql) === true){
    echo "Database created Successfully.\n";
}
else{
    echo "Failed to create Database. \n";
}

// // DELETING DATABASE
// $sql = "DROP DATABASE database name";

// if($connection -> query($sql) === true){
//     echo "Database deletion successful.\n";
// }
// else{
//     echo "Failed to delete database. \n";
// }

$connection -> close();
?>
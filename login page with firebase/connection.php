<?php

$serverName = "localhost";
$userName = "root";
$password = "root";
$databaseName = "users";

$connection = new mysqli($serverName, $userName, $password, $databaseName);

if($connection -> connect_error){
    die ("Could not connect: " . $connection -> connect_error . "\n");
}
?>
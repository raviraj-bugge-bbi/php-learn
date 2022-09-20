<?php

$serverName = "localhost";
$userName = "root";
$password = "root";

// create connection
$connection = new mysqli($serverName, $userName, $password);

// check connection
if($connection -> connect_error){
  die ("Connection failed: " . $connection -> connect_error);
}
else{
  echo "Connection Successful";
}

$connection -> close();
?>
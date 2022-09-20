<?php

$serverName = "localhost";
$userName = "root";
$password = "root";
$databaseName = "practice";

$connection = new mysqli($serverName, $userName, $password, $databaseName);


$sql = "UPDATE MyGuests SET firstname='ravi' WHERE id='29'";

if($connection->query($sql)){
    echo "update successful";
}
else{
    echo "update unsuccessful";
}
$connection->close();

?>
<?php

$serverName = "localhost";
$userName = "root";
$password = "root";
$databaseName = "practice";

$connection = new mysqli($serverName, $userName, $password, $databaseName);


$sql = "DELETE FROM MyGuests WHERE id='30'";

if($connection->query($sql)){
    echo "deletion successful";
}
else{
    echo "deletion unsuccessful";
}
$connection->close();

?>
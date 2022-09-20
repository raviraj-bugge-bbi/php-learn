<?php
$serverName = "localhost";
$userName = "root";
$password = "root";
$databaseName = "practice";

$connection = new mysqli($serverName, $userName, $password, $databaseName);

$name = $_POST['name'];

$sql = "UPDATE MyGuests SET firstname='$name' WHERE id='29'";
if($connection->query($sql)){
    echo "update successful";
}
else{
    echo "update unsuccessful";
}
$connection->close();
?>
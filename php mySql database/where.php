<?php

$serverName = "localhost";
$userName = "root";
$password = "root";
$databaseName = "practice";

$connection = new mysqli($serverName, $userName, $password, $databaseName);


$sql = "SELECT * FROM MyGuests WHERE id='30'";
$result = $connection->query($sql);

if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
}
else {
    echo "0 results";
}
$connection->close();

?>
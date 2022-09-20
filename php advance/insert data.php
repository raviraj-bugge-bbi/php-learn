<?php

$serverName = "localhost";
$userName = "root";
$password = "root";
$databaseName = "practice";

$connection = new mysqli($serverName, $userName, $password, $databaseName);


$sql = "INSERT INTO MyGuests (firstname, lastname, email)
        VALUES ('abc', 'def', 'abc@def.com')";

if($connection -> query($sql) === true){
    echo "data inserted successfully";
}
else{
    echo "failed to insert data into table" . $sql . $connection->error;
}

$connection->close();
?>
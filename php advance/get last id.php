<?php

$serverName = "localhost";
$userName = "root";
$password = "root";
$databaseName = "practice";

$connection = new mysqli($serverName, $userName, $password, $databaseName);


$sql = "INSERT INTO MyGuests (firstname, lastname, email)
        VALUES ('abc', 'def', 'abc@def.com')";

if($connection -> query($sql) === true){
    $last_id = $connection->insert_id;
    // $last_name = $connection->insert_firstname;
    echo "New record created successfully. Last inserted ID is: " . $last_id /*. $last_name*/;
}
else{
    echo "failed to insert data into table" . $sql . $connection->error;
}

$connection->close();
?>
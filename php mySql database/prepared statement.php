<?php

$serverName = "localhost";
$userName = "root";
$password = "root";
$databaseName = "practice";

$connection = new mysqli($serverName, $userName, $password, $databaseName);

// prepare and bind
$stmt = $connection->prepare("INSERT INTO MyGuests (firstname, lastname, email) VALUES (?, ?, ?);");
$stmt->bind_param("sss", $firstname, $lastname, $email);

// The argument may be one of four types:

// i - integer
// d - double
// s - string
// b - BLOB

// set parameters and execute
$firstname = "John";
$lastname = "Doe";
$email = "john@example.com";
$stmt->execute();

$firstname = "Mary";
$lastname = "Moe";
$email = "mary@example.com";
$stmt->execute();

$firstname = "Julie";
$lastname = "Dooley";
$email = "julie@example.com";
$stmt->execute();

echo "New records created successfully";

$stmt->close();
$connection->close();
?>
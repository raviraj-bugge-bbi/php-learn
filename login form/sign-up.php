<?php
    
    $serverName = "localhost";
    $userName = "root";
    $password = "root";
    $databaseName = "users";

    $connection = new mysqli($serverName, $userName, $password, $databaseName);

    if($connection -> connect_error){
        die ("could not connect: " . $connection -> connect_error . "\n");
    }

    $user = $_POST['userName'];
    $pass = $_POST['password'];

    $sql = "INSERT INTO user_details (username, usr_Password) VALUES ('$user', '$pass')";

    if($connection -> query($sql) === true){
        echo '<h1 style="size: 30px;" >Account created successfully</h1>';
    }
    else{
        echo '<h1 style="size: 30px;" >failed to create account</h1>' . $sql . $connection->error;
    }
    echo "\n";
    echo '<a href="sign-in.html"> goto login page </a>';
    $connection->close();
?>

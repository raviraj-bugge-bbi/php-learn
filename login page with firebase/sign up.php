<?php
    include 'connection.php';

    $user = $_REQUEST['userName'];
    $pass = $_REQUEST['password'];

    $sql = "INSERT INTO user_details (username, usr_Password) VALUES ('$user', '$pass')";

    if($connection -> query($sql) === true){
        echo '<p style="color: green;">Account successfully created!</p>';
    }
    else{
        echo '<p style="color: red;">Failed to create account</p>';
    }

    $connection->close();
?>
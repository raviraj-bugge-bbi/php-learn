<?php
    include 'connection.php';

    $user = $_POST['userName'];
    $pass = $_POST['password'];

    $sql = "INSERT INTO user_details (username, usr_Password) VALUES ('$user', '$pass')";

    if($connection -> query($sql) === true){
        <script>
        </script>
    }
    else{
        echo '<h1 style="size: 30px;" >failed to create account</h1>' . $sql . $connection->error;
    }
    echo "\n";
    echo '<a href="sign-in.html"> goto login page </a>';
    $connection->close();
?>
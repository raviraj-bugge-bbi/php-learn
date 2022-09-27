<?php
    include 'connection.php';

    $user = $_REQUEST['userName'];
    $pass = $_REQUEST['password'];

    $sql = "SELECT * FROM user_details WHERE username='$user' AND usr_Password='$pass';";

    $result = $connection->query($sql);
    
    if($countRows = $result->fetch_assoc() > 0){
        echo '<p style="color:green;">Successfully signed in!</p>';
    }
    else{
        echo '<p style="color:red;">Wrong username or password!</p>';
    }

    $connection->close();
?>
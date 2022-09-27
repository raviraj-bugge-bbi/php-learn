<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Sign up page</title>
</head>

<body>
<?php
    
    $serverName = "localhost";
    $userName = "root";
    $password = "root";
    $databaseName = "users";

    $connection = new mysqli($serverName, $userName, $password, $databaseName);

    if($connection -> connect_error){
        die ("could not connect: " . $connection -> connect_error . "\n");
    }
?>
    <div id="heading">
        <h1>Create new Account!</h1>
    </div>
    <div id="form">
        <form method="post">
            <div id="field">
                User Name: <input type="text" name="userName" required>
                Password: <input type="password" name="password" required>
            </div>
            <div id="btn">
                <button name="login" formaction="sign-up.php">Create Account</button>
            </div>

            <?php
            $user = $_POST['userName'];
            $pass = $_POST['password'];

            $sql = "INSERT INTO user_details (username, usr_Password) VALUES ('$user', '$pass')";

            if($connection -> query($sql) === true){
                echo '<p style="size: 30px;">Account created successfully</p>';
            }
            else{
                echo '<p style="size: 30px;">failed to create account</p>' . $sql . $connection->error;
            }
            ?>

        </form>
    </div>

    
    <?php
    $connection->close();
    ?>

</body>

</html>
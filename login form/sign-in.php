<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login Page</title>
</head>

<body>
    <div id="heading" class="centre">
        <h1>Login to Account</h1>
    </div>

    <div id="form" class="centre">
        <form method="post">
            <div id="field">
                <p>User Name: <input type="text" name="userName" required></p>
                <p>Password: <input type="password" name="password" required></p>
            </div>
            <div id="btn">
                <button name="login" formaction="sign-in.php">login</button>
                <a href="sign-up.html">Create an Account</a>
            </div>
        </form>
    </div>
    

</body>

</html>
<?php

$serverName = "localhost";
$userName = "root";
$password = "root";
$databaseName = "users";

$connection = new mysqli($serverName, $userName, $password, $databaseName);

if($connection -> connect_error){
    die ("could not connect: " . $connection -> connect_error . "\n");
}

$getUsr = $_POST['userName'];
$getPass = $_POST['password'];

$getUsrSql = "SELECT * FROM user_details WHERE username='$getUsr' AND usr_Password='$getPass';";

$result = $connection->query($getUsrSql);

if($countRows = $result->fetch_assoc() > 0){
    echo '<h1 style="
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    size: 50px;
    margin-top: 50px;
    ">login successful.</h1>';
}
else{
    if($getUsr && $getPass == " "){
        echo null;
    }
    else{
        echo '<h1 style="
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        size: 50px;
        margin-top: 50px;
        ">username or password is wrong.</h1>';
    }
}
?>
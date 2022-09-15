<html>
<body>
<?php
//-----------------------------------------------------------------------------------------
echo "<h1>--PHP - A Simple HTML Form-</h1><br><br>";
//below is a simple html form

?>


<form action="form data.php">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>

<?php
$name = $_POST['name'];
echo $name;
?>

</body>
</html>
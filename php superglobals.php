<html>
    <body>
    <?php

//-----------------------------------------------------------------------------------------
echo "<h1>--PHP Global Variables - Superglobals--</h1><br><br>";
// Some predefined variables in PHP are "superglobals", which means that they are always accessible, regardless of scope - and you can access them from any function, class or file without having to do anything special.

// The PHP superGlobal variables are:

// $GLOBALS
// $_SERVER
// $_REQUEST
// $_POST
// $_GET
// $_FILES
// $_ENV
// $_COOKIE
// $_SESSION


/*****************************/
echo "<h3>--PHP $ GLOBALS--</h3>";
// Super global variables are built-in variables that are always available in all scopes.
// PHP stores all global variables in an array called $GLOBALS[index]. The index holds the name of the variable.

$x = 75;
$y = 25;
 
function addition() {
  $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}
 
addition();
echo $z;

/*****************************/
echo "<h3>--PHP $ _SERVER--</h3>";
// $_SERVER is a PHP super global variable which holds information about headers, paths, and script locations.

echo $_SERVER['PHP_SELF'];
//Returns the filename of the currently executing script
echo "<br>";
echo $_SERVER['GATEWAY_INTERFACE'];
//Returns the version of the Common Gateway Interface (CGI) the server is using
echo "<br>";
echo $_SERVER['SERVER_ADDR'];
//Returns the IP address of the host server
echo "<br>";
echo $_SERVER['SERVER_NAME'];
//Returns the name of the host server (such as www.w3schools.com)
echo "<br>";
echo $_SERVER['SERVER_SOFTWARE'];
//Returns the server identification string (such as Apache/2.2.24)
echo "<br>";
echo $_SERVER['SERVER_PROTOCOL'];
//Returns the name and revision of the information protocol (such as HTTP/1.1)
echo "<br>";
echo $_SERVER['REQUEST_METHOD'];
//Returns the request method used to access the page (such as POST)
echo "<br>";
echo $_SERVER['REQUEST_TIME'];
//Returns the timestamp of the start of the request (such as 1377687496)
echo "<br>";
echo $_SERVER['QUERY_STRING'];
//Returns the query string if the page is accessed via a query string
echo "<br>";
echo $_SERVER['HTTP_ACCEPT'];
//Returns the Accept header from the current request
echo "<br>";
echo $_SERVER['HTTP_ACCEPT_CHARSET'];
//Returns the Accept_Charset header from the current request (such as utf-8,ISO-8859-1)
echo "<br>";
echo $_SERVER['HTTP_HOST'];
//Returns the Host header from the current request
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
//Returns the complete URL of the current page (not reliable because not all user-agents support it)
echo "<br>";
echo $_SERVER['HTTPS'];
//Is the script queried through a secure HTTP protocol
echo "<br>";
echo $_SERVER['REMOTE_ADDR'];
//Returns the IP address from where the user is viewing the current page
echo "<br>";
echo $_SERVER['REMOTE_HOST'];
//Returns the Host name from where the user is viewing the current page
echo "<br>";
echo $_SERVER['REMOTE_PORT'];
//Returns the port being used on the user's machine to communicate with the web server
echo "<br>";
echo $_SERVER['SCRIPT_FILENAME'];
//Returns the absolute pathname of the currently executing script
echo "<br>";
echo $_SERVER['SERVER_ADMIN'];
///Returns the value given to the SERVER_ADMIN directive in the web server configuration file (if your script runs on a virtual host, it will be the value defined for that virtual host) (such as someone@w3schools.com)
echo "<br>";
echo $_SERVER['SERVER_PORT'];
//Returns the port on the server machine being used by the web server for communication (such as 80)
echo "<br>";
echo $_SERVER['SERVER_SIGNATURE'];
//Returns the server version and virtual host name which are added to server-generated pages
echo "<br>";
echo $_SERVER['PATH_TRANSLATED'];
//Returns the file system based path to the current script
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
//Returns the path of the current script
echo "<br>";
echo $_SERVER['SCRIPT_URI'];
//Returns the URI of the current page
echo "<br>";

/*****************************/
echo "<h3>--PHP $ _REQUEST--</h3>";
// PHP $_REQUEST is a PHP super global variable which is used to collect data after submitting an HTML form.
?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $name = $_REQUEST['fname'];
  if (empty($name)) {
    echo "Name is empty";
  } else {
    echo $name;
  }
}
?>

<?php
/*****************************/
echo "<h3>--PHP $ _POST--</h3>";
// PHP $_POST is a PHP super global variable which is used to collect form data after submitting an HTML form with method="post". $_POST is also widely used to pass variables.
?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $name = $_POST['fname'];
  if (empty($name)) {
    echo "Name is empty";
  } else {
    echo $name;
  }
}
?>

<?php

/*****************************/
echo "<h3>--PHP $ _GET--</h3>";
// PHP $_GET is a PHP super global variable which is used to collect form data after submitting an HTML form with method="get".
// $_GET can also collect data sent in the URL.
?>

<a href="test_get.php?subject=PHP&web=W3schools.com">Test $GET</a>

<?php
echo "Study " . $_GET['subject'] . " at " . $_GET['web'];
?>

    </body>
</html>
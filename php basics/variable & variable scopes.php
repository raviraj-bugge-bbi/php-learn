<!-- 
    --to use PHP--
install a web server
install PHP
install a database, such as MySQL 
-->

<?php

// // html syntax can be used in php but cant use php syntax in html

// //-----------------------------------------------------------------------------------------
// echo "<h1>--variables--</h1><br><br>";

// // a variable declared in php is starts with $ sign
// // variable name must start with a letter or the underscore character
// // variable name cannot start with a number
// // variable names are case sensitive

// $var = "Hello World!";
// $num1 = 5;
// $num2 = 6;

// // in php echo is used to output data to screen

// echo $var . "<br>";
// echo $var1 + $var2;

// // PHP is loosely typed language


// //-----------------------------------------------------------------------------------------
// echo "<h1>--PHP variable scope--</h1><br><br>";

// // php has three different variable scope
// // 1)global
// // 2)local
// // 3)static

// /*****************************/
// echo "<h3>--Global & Local scope--</h3>";
// // A variable declared outside a function has a GLOBAL SCOPE and can only be accessed outside a function

// $x = 5; // global declaration

// function globalAndLocal(){
//     echo "value of x is: " . $x . "<br>";
// }

// globalAndLocal();

// echo "value of x is: ".$x;

// /*****************************/
// echo "<h3>--Local scope--</h3>";
// // A variable declared outside a function has a GLOBAL SCOPE and can only be accessed outside a function

// function Local(){
//     $y = 5; //local declaration
//     echo "value of y is: ".$y."<br>";
// }

// Local();

// echo "value of y is: ".$y;

// /*****************************/
// echo "<h3>--Global scope--</h3>";
// // The global keyword is used to access a global variable from within a function.
// // To do this, use the global keyword before the variables (inside the function)

// $z = 5; //global declaration

// function globalVar(){
//     global $z;
//     echo "value of z is: ".$z."<br>";
// }

// globalVar();

// echo "value of z is: ".$z;

// /*****************************/
// echo "<h3>--Globals index--</h3>";
// // PHP also stores all global variables in an array called $GLOBALS[index].
// // The index holds the name of the variable.
// // This array is also accessible from within functions and can be used to update global variables directly.

// $G = 5; //global declaration

// function globalsIndex(){
//     echo "value of G is: ".$GLOBALS['G']."<br>";
// }

// globalsIndex();

// echo "value of G is: ".$z;

// /*****************************/
// echo "<h3>--Static variables--</h3>";
// // when a function is completed/executed, all of its variables are deleted.
// // However, sometimes we want a local variable NOT to be deleted.
// // We need it for a further job.
// // To do this, use the static keyword when you first declare the variable

// function staticKeyword(){
//     static $num = 0;    // if we don't declare num static here then after every call the value of num will be set 0.
//     echo $num."<br>";
//     $num ++;
// }   

// staticKeyword();
// staticKeyword();
// staticKeyword();

?>
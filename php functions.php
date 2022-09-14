<?php declare(strict_types = 1);

//-----------------------------------------------------------------------------------------
echo "<h1>--PHP Built-in Functions--</h1><br><br>";

// php has so many in built functions

//-----------------------------------------------------------------------------------------
echo "<h1>--PHP User Defined Functions--</h1><br><br>";

// A function is a block of statements that can be used repeatedly in a program.
// A function will not execute automatically when a page loads.
// A function will be executed by a call to the function.

/*****************************/
echo "<h3>--Create a User Defined Function in PHP--</h3>";
// A user-defined function declaration starts with the word function:

// Syntax : function functionName() {
//              code to be executed;
//          }
//          functionName(); //this will call function

function writeMsg() {
    echo "Hello world!";
  }
  
  writeMsg();

/*****************************/
echo "<h3>--PHP Function Arguments--</h3>";

function familyName($fname) {
    echo "$fname Refsnes.<br>";
  }
  
  familyName("Jani");
  familyName("Hege");
  familyName("Stale");
  familyName("Kai Jim");
  familyName("Borge");

/*****************************/
echo "<h3>--strict declaration--</h3>";

// function addNumbers(int $a, int $b) {
//     return $a + $b;
// }

// echo addNumbers(5, "5 days");

function addNumbers1(int $a, int $b) {
    $c = $a + $b;
    return $c;
}
echo addNumbers1(5, 5);

/*****************************/
echo "<h3>--PHP Default Argument Value--</h3>";

function addNumbers2(int $a, int $b = 5) {
    $c = $a + $b; 
    return $c;
}
echo addNumbers2(5);

/*****************************/
echo "<h3>--PHP Functions - Returning values--</h3>";
// To let a function return a value, use the return statement:

function addNumbers3(int $a, int $b = 5) {
    $c = $a + $b; 
    return $c;
}
echo addNumbers3(5);

/*****************************/
echo "<h3>--PHP Return Type Declarations--</h3>";
// To declare a type for the function return, add a colon ( : ) and the type right before the opening curly ( { )bracket when declaring the function.

function addNumbersA(float $a, float $b) : float {
    return $a + $b;
}
echo addNumbersA(1.2, 5.2) . " addNumA";

echo "<br>";

function addNumbersB(float $a, float $b) : int {
    return (int)($a + $b);
  }
  echo addNumbersB(1.2, 5.2) . " addNumB";

  /*****************************/
echo "<h3>--Passing Arguments by Reference--</h3>";
// In PHP, arguments are usually passed by value, which means that a copy of the value is used in the function and the variable that was passed into the function cannot be changed.
// When a function argument is passed by reference, changes to the argument also change the variable that was passed in. To turn a function argument into a reference, the & operator is used:

function passRef(&$value) { //using & to send reference
    $value += 5;
  }
  
  $num = 2;
  passRef($num);
  echo $num;
?>
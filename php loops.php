<?php

//-----------------------------------------------------------------------------------------
echo "<h1>--Loops--</h1><br><br>";
// Loops are used to execute the same block of code again and again, as long as a certain condition is true.

/*****************************/
echo "<h3>--While Loop--</h3>";

//The while loop executes a block of code as long as the specified condition is true.

// Syntax : while (condition is true) {
//              code to be executed;
//          }

$x = 1;

while($x <= 5) {
  echo "The number is: $x <br>";
  $x++;
}

/*****************************/
echo "<h3>--do while Loop--</h3>";

// The do...while loop - Loops through a block of code once, and then repeats the loop as long as the specified condition is true.

// Syntax : do {
//              code to be executed;
//          } while (condition is true);

$x = 1;

do {
  echo "The number is: $x <br>";
  $x++;
} while ($x <= 5);

/*****************************/
echo "<h3>--for Loop--</h3>";
// The for loop - Loops through a block of code a specified number of times.

// Syntax : for (init counter; test counter; increment counter) {
//              code to be executed for each iteration;
//          }

for ($x = 0; $x <= 10; $x++) {
    echo "The number is: $x <br>";
}

/*****************************/
echo "<h3>--foreach Loop--</h3>";
// The foreach loop - Loops through a block of code for each element in an array.

// Syntax : foreach ($array as $value) {
//              code to be executed;
//          }

$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {
  echo "$value <br>";
}

/*****************************/
echo "<h3>--Break and Continue--</h3>";

// You have already seen the break statement used in an earlier chapter of this tutorial. It was used to "jump out" of a switch statement.
//The break statement can also be used to jump out of a loop.

for ($x = 0; $x < 10; $x++) {
    if ($x == 4) {
      break;
    }
    echo "The number is: $x <br>";
}

// The continue statement breaks one iteration (in the loop), if a specified condition occurs, and continues with the next iteration in the loop.

for ($x = 0; $x < 10; $x++) {
    if ($x == 4) {
      continue;
    }
    echo "The number is: $x <br>";
}




?>
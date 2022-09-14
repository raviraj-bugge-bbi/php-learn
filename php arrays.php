<?php

//-----------------------------------------------------------------------------------------
echo "<h1>--PHP Arrays--</h1><br><br>";
// An array stores multiple values in one single variable:

$cars = array("Volvo", "BMW", "Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";

/*****************************/
echo "<h3>--Create an Array in PHP--</h3>";
// In PHP, the array() function is used to create an array:
array();

/*****************************/
echo "<h3>--Count() function--</h3>";
// The count() function is used to return the length (the number of elements) of an array:

$cars = array("Volvo", "BMW", "Toyota");
echo count($cars);

//-----------------------------------------------------------------------------------------
echo "<h1>--PHP Indexed Arrays--</h1>";
// it is a array of elements with index
// ways to create indexed arrays
// 1.
$cars = array("Volvo", "BMW", "Toyota"); // index will be assigned automatically starts from 0

//2.
$cars[0] = "Volvo"; // user specifies the the index of element
$cars[1] = "BMW";
$cars[2] = "Toyota";

// 3.
$cars = array("Volvo", "BMW", "Toyota"); //can use loops to assign indx
$arrLength = count($cars);

for($x = 0; $x < $arrLength; $x++) {
  echo $cars[$x];
  echo "<br>";
}

//-----------------------------------------------------------------------------------------
echo "<h1>--PHP Associative Arrays--</h1><br><br>";
// Associative arrays are arrays that use named keys that you assign to them.
// ways to create associative arrays

// 1. 
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

// 2.
$age['Peter'] = "35";
$age['Ben'] = "37";
$age['Joe'] = "43";

/*****************************/
echo "<h3>--Loop Through an Associative Array--</h3>";
// To loop through and print all the values of an associative array, you could use a foreach loop, like this:

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}

//-----------------------------------------------------------------------------------------
echo "<h1>--PHP Multidimensional Arrays--</h1><br><br>";
// A multidimensional array is an array containing one or more arrays.
// PHP supports multidimensional arrays that are two, three, four, five, or more levels deep. However, arrays more than three levels deep are hard to manage for most people.

$cars = array (
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
  );

    echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
    echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
    echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
    echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";

//-----------------------------------------------------------------------------------------
echo "<h1>--PHP Sort Functions For Arrays--</h1><br><br>";
// The elements in an array can be sorted in alphabetical or numerical order, descending or ascending.

// sort() - sort arrays in ascending order
// rsort() - sort arrays in descending order
// asort() - sort associative arrays in ascending order, according to the value
// ksort() - sort associative arrays in ascending order, according to the key
// arsort() - sort associative arrays in descending order, according to the value
// krsort() - sort associative arrays in descending order, according to the key


/*****************************/
echo "<h3>--Sort Array in Ascending Order - sort()--</h3>";
// The following example sorts the elements of the $cars array in ascending alphabetical order:

$cars = array("Volvo", "BMW", "Toyota");
echo sort($cars);

/*****************************/
echo "<h3>--Sort Array in Descending Order - rsort()--</h3>";
// The following example sorts the elements of the $cars array in descending alphabetical order:

$numbers = array(4, 6, 2, 22, 11);
echo rsort($numbers);

/*****************************/
echo "<h3>--Sort Array (Ascending Order), According to Value - asort()--</h3>";
// The following example sorts an associative array in ascending order, according to the value:

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
echo asort($age);

/*****************************/
echo "<h3>--Sort Array (Ascending Order), According to Key - ksort()--</h3>";
// The following example sorts an associative array in ascending order, according to the key:

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
echo ksort($age);

/*****************************/
echo "<h3>--Sort Array (Descending Order), According to Value - arsort()--</h3>";
// The following example sorts an associative array in descending order, according to the value:

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
echo arsort($age);

/*****************************/
echo "<h3>--Sort Array (Descending Order), According to Key - krsort()--</h3>";
// The following example sorts an associative array in descending order, according to the key:

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
echo krsort($age);

?>
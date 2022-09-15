<?php

// //-----------------------------------------------------------------------------------------
// echo "<h1>--PHP data types--</h1><br><br>";
// // PHP supports the following data types
// // 1. String
// // 2. Integer
// // 3. Float (floating point numbers - also called double)
// // 4. Boolean
// // 5. Array
// // 6. Object
// // 7. NULL
// // 8. Resource

// /*****************************/
// echo "<h3>--PHP String--</h3>";
// $x = "Hello world!";
// echo $x;
// echo "<br>";

// /*****************************/
// echo "<h3>--PHP Integer--</h3>";
// $x = 5985;
// echo $x;
// echo "<br>";
// var_dump($x);
// echo "<br>";

// /*****************************/
// echo "<h3>--PHP Float--</h3>";
// $x = 10.365;
// echo $x;
// echo "<br>";
// var_dump($x);
// echo "<br>";

// /*****************************/
// echo "<h3>--PHP Boolean--</h3>";
// $x = true;
// $y = false;
// echo $x;
// echo "<br>";
// echo $y;
// echo "<br>";

// /*****************************/
// echo "<h3>--PHP Array--</h3>";
// $cars = array("Volvo", "BMW", "Toyota");
// var_dump($cars);
// echo $cars[1];

// /*****************************/
// echo "<h3>--PHP Object--</h3>";

// // Classes and objects are the two main aspects of object-oriented programming.
// // A class is a template for objects, and an object is an instance of a class.
// // When the individual objects are created, they inherit all the properties and behaviors from the class, but each object will have different values for the properties.
// // Let's assume we have a class named Car. A Car can have properties like model, color, etc. We can define variables like $model, $color, and so on, to hold the values of these properties.
// // When the individual objects (Volvo, BMW, Toyota, etc.) are created, they inherit all the properties and behaviors from the class, but each object will have different values for the properties.
// // If you create a __construct() function, PHP will automatically call this function when you create an object from a class.

// class car
// {
//     public $name;
//     public $color;
//     public $topSpeed;

//     public function __construct($color, $name, $topSpeed)
//     {
//         $this->color = $color;
//         $this->name = $name;
//         $this->topSpeed = $topSpeed;
//     }

//     public function info(){
//         return "My car is a " . $this->color . " " . $this->name . "with top speed of " . $this->topSpeed . "Kmph";
//     }

// }

// $myCar = new Car("black", "BMW", 350);
// echo $myCar->info();

// /*****************************/
// echo "<h3>--PHP NULL Value--</h3>";

// // A variable of data type NULL is a variable that has no value assigned to it.

// $x = "Hello world!";
// $x = null;
// var_dump($x);

?>
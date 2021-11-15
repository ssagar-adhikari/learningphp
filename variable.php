<?php

/* What is variable 
- container that stores a value 
- in php variable dont have type
- php is loosely typed language
- variable have dynamic types which chang value while assign
 */

/* Variable Types
    -String 
    -Integer
    -Float/Double
    -Boolean
    -NULL
    -Array
    -Object
    -Resource
*/
 //Declare Variable
  $name = 'pushpa';
  $age = 28;
  $isMale = true;
  $height = 5.6;
  $salary = null;

//Print The Variable
echo $name.'<br>';
echo $age.'<br>';
echo $isMale .'<br>'; // Boolean Value if true converted into 1 if false converted into empty string
echo $height .'<br>';
echo $salary .'<br>'; //Null value is converted into empty string


//Print The type of the variables
 echo gettype($name).'<br>';
 echo gettype($isMale).'<br>';
 echo gettype($height).'<br>';

//Print The Whole Variable
var_dump($name,$age,$height,$isMale,$salary);

//Change the value of variable
$name = false;

//Print the type of variable
echo '<br>';
var_dump($name);

//Variable Checking Function
echo '<br>';
echo is_string($name).'<br>'; //false
echo is_int($age).'<br>';
echo is_bool($isMale).'<br>';
echo is_float($height);

//Check if variable is defined or not
echo '<br>';
echo isset($name); // true
echo isset($sagar); // false

//Constant - variable whose value cant be change
echo '<br>';
define('PI' , 3.14);
echo PI . '<br>';

//Using PHP built-in constant
echo SORT_ASC.'<br>';
echo PHP_INT_MAX.'<br>';
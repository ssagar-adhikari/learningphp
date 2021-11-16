<?php 

//Declaring Numbers
$a = 5;
$b = 4;
$c = 2.3;

//Airthmetic Operations
echo $a + $b .'<br>';
echo $a + $b * $c .'<br>';
echo ($a + $b) * $c .'<br>';

//Assignment With math operator
$a += $b;
echo $a .'<br>';
echo $a -= $b ;

//Increment Operator
$a++;
echo '<br>'. $a .'<br>';
++$a;
echo '<br>'. $a .'<br>';

//Decrement Operator
echo $a-- . '<br>';
echo --$a . '<br>';

//Number Checking Function
is_float(1.25); //true

//Conversion
$strNumber = '1.23';
$number = (float)$strNumber;
echo $number . '<br>';
var_dump($number);

//Number Function

//Formatting Numbers
$number = 123456789.12345;
echo number_format($number , '2' , '.' , ',');

//For more : https://www.php.net/manual/en/ref.math.php
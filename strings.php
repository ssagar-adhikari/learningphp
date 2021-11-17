<?php

//create simple string
$string = 'Hello';
$string2 = 'Sagar';
echo $string . '<br>';
echo $string2 . '<br>';

//string concatenation
echo $string.$string2 . '<br>';

//String Functions
$string = ' Sagar ';

echo "1 - " . strlen($string) . '<br>';
echo "2 - " . trim($string) . '<br>';
echo "3 -" . ltrim($string) . '<br>';
echo "4 -" . rtrim($string) . '<br>';

//Multiline text and line breaks

$longText = "
Hello, my name is Sagar
I am 26,
I love my daughter
";

echo '<br>'. $longText . '<br>';
echo nl2br($longText).'<br>';

$longText = "
Hello, my name is <b>Sagar</b>
I am <b>26</b>,
I love myself
";
echo '<br>'. "1 - ". $longText . '<br>';
echo "2 - ". nl2br($longText).'<br>';
echo "3 -".  nl2br(htmlentities($longText));
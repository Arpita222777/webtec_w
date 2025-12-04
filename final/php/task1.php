<?php

$stringVar = "Hello, PHP!";
$integerVar = 100;
$floatVar = 25.5;
$booleanVar = true;

echo "Arithmetic Operations<br>";
$num1 = 50;
$num2 = 10.5;

$sum = $num1 + $num2;
echo "Addition: " . $sum . "<br>";

$difference = $num1 - $num2;
echo "Subtraction: " . $difference . "<br>";

$product = $num1 * $num2;
echo "Multiplication: " . $product . "<br>";

$quotient = $num1 / $num2;
echo "Division: " . $quotient . "<br>";
echo "<br>";


echo "Output Statements<br>";
$numberA = 15;
$numberB = 5;
$totalSum = $numberA + $numberB;


echo "The sum of " . $numberA . " and " . $numberB . " using echo is: " . $totalSum . "<br>";
print "The sum of " . $numberA . " and " . $numberB . " using print is: " . $totalSum . "<br>";

echo "Variable Types and Values (using var_dump())<br>";

var_dump($stringVar);
echo "<br>";
var_dump($integerVar);
echo "<br>";
var_dump($floatVar);
echo "<br>";
var_dump($booleanVar);
echo "<br><br>";
?>
<?php

echo "<h2>Loops and Iteration</h2>";

echo "<h3>1. Numbers from 1 to 20 for loop:</h3>";
echo "<ul>";
for ($i = 1; $i <= 20; $i++) {
    echo "<li>Number: $i</li>";
}
echo "</ul>";

echo "<hr>";
echo "<h3>2. Even numbers from 1 to 20 while loop:</h3>";
echo "<ul>";
$j = 1;
while ($j <= 20) {
    if ($j % 2 == 0) {
        echo "<li>Even Number: $j</li>";
    }
    $j++;
}
echo "</ul>";
echo "<hr>";

echo "<h3>3. Fruits and Colors foreach loop with break:</h3>";
$fruits = [
    "apple" => "red",
    "banana" => "yellow",
    "grape" => "purple",
    "lime" => "green",
    "orange" => "orange",
    "strawberry" => "red"
];

$count = 0;
echo "<ul>";
foreach ($fruits as $fruitName => $color) {
    echo "<li>The $fruitName is $color</li>";
    $count++;
    if ($count >= 5) {
        echo "<li>Loop stopped after 5 items break statement.</li>";
        break;
    }
}
echo "</ul>";

echo "<br>";
?>
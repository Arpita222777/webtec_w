<?php

$temperature= 18; 


if (!is_numeric($temperature)) {
    echo "<p>Error: \$temperature must be a number.</p>";
} else {
    echo "<p>Current Temperature: {$temperature}°C</p>";
    
    if ($temperature < 10) {
        echo "<p>It's cold.</p>";
    } elseif ($temperature >= 10 && $temperature <= 25) {
        echo "<p>It's warm.</p>";
    } else { 
        echo "<p>It's hot.</p>";
    }
}
echo "<hr>";
$day = 3; 
echo "<p>Day number: $day</p>";
if (!is_numeric($day) || $day < 1 || $day > 7) {
    echo "<p>Error: \$day must be an integer between 1 and 7.</p>";
} else {
    $dayName = "";
    switch ($day) {
        case 1:
            $dayName = "Monday";
            break;
        case 2:
            $dayName = "Tuesday";
            break;
        case 3:
            $dayName = "Wednesday";
            break;
        case 4:
            $dayName = "Thursday";
            break;
        case 5:
            $dayName = "Friday";
            break;
        case 6:
            $dayName = "Saturday";
            break;
        case 7:
            $dayName = "Sunday";
            break;
        default:
            $dayName = "Invalid Day"; 
    }
    echo "<p>Today is $dayName.</p>";
}
echo "<br>";
?>
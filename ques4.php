<?php

function calculateAverage($numbers) {
    $sum = 0;
    $count = count($numbers);

    foreach ($numbers as $number) {
        $sum += $number;
    }

    if ($count > 0) {
        return $sum / $count;
    } else {
        return 0; 
    }
}


$numbers = [10, 20, 30, 40, 50];
$average = calculateAverage($numbers);

echo "The average is: " . $average;
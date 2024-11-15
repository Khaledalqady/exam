<?php
function filterEvenNumbers(&$numbers) {
    $i = 0;
    $n = count($numbers);
    for ($j = 0; $j < $n; $j++) {
        if ($numbers[$j] % 2 != 0) {
            $numbers[$i] = $numbers[$j];
            $i++;
        }
    }
    $numbers = array_slice($numbers,0,$i);
}


$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

filterEvenNumbers($numbers);

print_r($numbers);
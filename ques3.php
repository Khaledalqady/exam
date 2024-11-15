<?php

$arr = [2, 4, 3, 1, 6, 7, 5, 8, 0, 9];

for($i = 0; $i < count($arr); $i++ ) {
    for($j = 0; $j < count($arr)-1; $j++) {
    if($arr[$j+1] < $arr[$j]){
    $temp = $arr[$j+1];
    $arr[$j+1] = $arr[$j];
    $arr[$j] = $temp;
    }
    }
   }
   print_r($arr);
   echo '<br>';

   for($i = 0; $i < count($arr); $i++ ) {
    for($j = 0; $j < count($arr)-1; $j++) {
    if($arr[$j+1] > $arr[$j]){
    $temp = $arr[$j+1];
    $arr[$j+1] = $arr[$j];
    $arr[$j] = $temp;
    }
    }
   }
   print_r($arr);

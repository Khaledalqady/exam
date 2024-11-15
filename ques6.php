<?php 

$array = [10,30,20];

  $max = $array[0];

    foreach($array as $number){
        if ($number > $max){
            $max = $number;
        }
    }

  echo "max number is :" . $max;




?>
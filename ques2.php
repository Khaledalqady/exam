<?php

function printDiamond($rows) {
   
    for ($i = 1; $i <= $rows; $i++) {
       
        for ($j = 1; $j <= $rows - $i; $j++) {
            echo "&nbsp;";
        }

        
        for ($k = 1; $k <= $i - 1; $k++) {
            echo "*";
        }

       
        for ($j = 1; $j <= $rows - $i; $j++) {
            echo "&nbsp;";
        }

        echo "<br>";
    }

   
    for ($i = $rows - 1; $i >= 1; $i--) {
        
        for ($j = 1; $j <= $rows - $i; $j++) {
            echo "&nbsp;";
        }

        
        for ($k = 1; $k <=  $i - 1; $k++) {
            echo "*";
        }

       
        for ($j = 1; $j <= $rows - $i; $j++) {
            echo "&nbsp;";
        }

        echo "<br>";
    }
}

$rows = 6;

printDiamond($rows);

echo '<hr>';

$x=1;
for ($i=1 ; $i <=5 ; $i++) {

for ($j=1 ; $j<=$x ; $j++) {
    echo "*";
}
echo "<br>";
$x++;
}
$x=5;
for ($i=5 ; $i>=1 ; $i--) {
for ($j=1 ; $j<=$x ; $j++){
    echo "*";
}
echo '<br>';
$x--;
}

echo '<hr>';



?>
<?php 

function prime($n){

 for ($x=2 ; $x<$n ; $x++){


    if($n%$x ==0){

        return 0;

    }
 }

return 1;

}

$num = prime(69);
  if ($num == 0){

    echo 'this not prime number';
  }else{
    echo 'this is prime number';
  }





?>
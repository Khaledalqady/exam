<?php 

   $word = '/[^\w]honda\s/';
   
   if (preg_match($word, 'the honda is the best car manufactuer in the world ')){
       
    echo "'honda' is found";
   }else{
    echo "'honda' is not found";
   }





?>
<?php 
$date = '2012-12-21';

$time = strtotime($date);

$newtime = strtotime('+1 month', $time);

$newdate= date ('Y-M-d',$newtime);

echo $newdate;




?>
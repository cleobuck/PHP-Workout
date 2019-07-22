<!-- 
Afficher la date du jour - 22 jours
 -->

 <?php

$today = date("d-m-Y");
$todayStamp = strtotime("$today");
$future = $todayStamp - (20*60*60*24);

echo date('d-m-Y', $future);

?>
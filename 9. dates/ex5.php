<!-- 
Afficher le nombre de jour qui sépare la date du jour avec le 16 mai 2016.
 -->

<?php

$currentDate = time();
echo $currentDate."<br>";
$previousDateStr = date("d-m-Y", mktime(0,0,0, 5, 16, 2016));
$previousDate = strtotime("$previousDateStr");
echo $previousDateStr. "<br>";
$difference = $currentDate - $previousDate;
echo floor($difference/(60*60*24));


?>
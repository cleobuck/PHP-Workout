<!-- 
Afficher le nombre de jour dans le mois de février de l'année 2017.
 -->

<?php

$d=cal_days_in_month(CAL_GREGORIAN,2,2017);

echo $d;
?>
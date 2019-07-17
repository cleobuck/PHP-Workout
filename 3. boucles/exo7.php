<!-- 
En allant de 1 à 100 avec un pas de 15, afficher le message On tient le bon bout. Combien de fois le message s'affiche-il ?
 -->

<?php

 $pas = 1;
 $fois = 1;

 while($pas<=100) {
    echo "on tient le bon bout $fois <br/>";
    $pas = $pas + 15;
    $fois++;

 }

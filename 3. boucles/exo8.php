<!-- 
En allant de 200 à 0 avec un pas de 12, afficher le message Enfin !!!!. Combien de fois le message s'affiche-il ?
 -->

<?php

$pas = 200;
$fois = 1;

while($pas>=0) {
    echo "Enfin!!! $fois <br/>";
    $pas = $pas-12;
    $fois++;
}


?>

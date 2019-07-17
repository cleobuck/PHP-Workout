<!-- 

En allant de 20 à 0 avec un pas de 1, afficher le message C'est presque bon. Combien de fois le message s'affiche-il ?
 -->

<?php 

$pas = 20;
$fois = 1;

while ($pas!=0) {
    echo "c'est presque bon $fois <br/>";
    $pas--;
    $fois++;
}
<!-- 
Faire une fonction qui prend en paramètre trois nombres et qui retourne la somme de ces nombres. Tous les paramètres doivent avoir une valeur par défaut.
 -->

<?php

function sum($num1 = 3, $num2 = 1, $num3 = 1) {
    return $num1*$num2*$num3;
}

echo sum();

?>
<!-- 
Faire une fonction qui prend en paramètre deux nombres. La fonction doit retourner :

Le premier nombre est plus grand si le premier nombre est plus grand que le deuxième
Le premier nombre est plus petit si le premier nombre est plus petit que le deuxième
Les deux nombres sont identiques si les deux nombres sont égaux
 -->



<?php 

function compareNumbers($num1, $num2) {
    $result = ($num1>$num2? "le premier nombre est plus grand": ($num1<$num2? "le premier nombre est plus petit": "les deux nombres sont identiques"));
    return $result;
}

echo compareNumbers(1,1);

?>
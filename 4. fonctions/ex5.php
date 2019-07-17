<!-- 
Faire une fonction qui prend en paramètre un nombre et une chaine de caractères et qui retourne la concaténation de ces deux paramètres.
 -->

<?php 

function concatTypes($string, $number) {
    if (gettype($string) == string && gettype($number) == integer) {
        return "$string  $number";
    } else {
        return "error";
    }
}

echo concatTypes("hello", 4);

?>


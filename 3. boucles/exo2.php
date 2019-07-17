<!-- 
Créer deux variables. Initialiser la première à 0 et la deuxième avec un nombre compris en 1 et 100. Tant que la première variable n'est pas supérieur à 20 :

multiplier la première variable avec la deuxième
afficher le résultat
incrementer la première variable
 -->

 <?php 

$var1 = 0;
$var2 = 48;

while($var1<=20) {
    $result = $var1*$var2;
    echo "$result<br/>";
    $var1++;
}

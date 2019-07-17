<!-- 
Faire une fonction qui prend en paramètre deux chaines de caractères (prénom et nom de famille) et qui retourne la concaténation de ces deux chaines.
 -->

<?php 

function sayHello($nom, $prenom) {
    return "hello $prenom $nom";
}

echo sayHello("Buck", "Cleo");
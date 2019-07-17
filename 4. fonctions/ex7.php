<!-- 
Faire une fonction qui prend deux paramètres : age et genre. Le paramètre genre peut prendre comme valeur :

Homme
Femme

La fonction doit renvoyer en fonction des paramètres :

Vous êtes un homme et vous êtes majeur
Vous êtes un homme et vous êtes mineur
Vous êtes une femme et vous êtes majeur
Vous êtes une femme et vous êtes mineur

Gérer tous les cas.
 -->


 <?php

 function person($age, $genre) {
     $status = ($age >= 18? majeur: mineur);
     $pronom = ($genre == "femme"? une: un);
     return "vous êtes $pronom $genre et vous êtes $status";
 }

echo person(28, "femme");

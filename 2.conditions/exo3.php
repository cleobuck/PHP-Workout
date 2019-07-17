<!-- 
Créer deux variables age et genre. La variable genre peut prendre comme valeur :

Homme
Femme

En fonction de l'âge et du genre, afficher la phrase correspondante :

Vous êtes un homme et vous êtes majeur
Vous êtes un homme et vous êtes mineur
Vous êtes une femme et vous êtes majeur
Vous êtes une femme et vous êtes mineur

Gérer tous les cas.
 -->

 <?php

 $age = 29;
 $genre = "femme";
 
 if($age>18) {
     $statut = "majeur";
 } else {
     $statut = "mineur";
 }

 if ($genre === "femme") {
     $pronom = "une";
 } else {
     $pronom = "un";
 }



 echo "vous êtes $pronom $genre et vous êtes $statut";

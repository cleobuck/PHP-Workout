<!-- 
Avec le tableau de l'exercice 1,

afficher la valeur de la troisième ligne de ce tableau.
afficher la valeur de l'index 5.
modifier le mois de aout pour lui ajouter l'accent manquant.
 -->

<?php 

$mois = ["janvier", "février", "mars", "avril", "mai","juin","juillet","aout","septembre","octobre","novembre","decembre"];

echo $mois[5];
$mois[7] = août;
echo $mois[7];



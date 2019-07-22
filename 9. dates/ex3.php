<!-- 
Afficher la date courante avec le jour de la semaine et le mois en toutes lettres (ex : mardi 2 août 2016)

Bonus : Le faire en français.
 -->

 <?php

setlocale (LC_TIME, 'fr_FR.utf8','fra'); 
echo "Aujourd'hui nous sommes " . strftime("%A %d %B %G");

?>
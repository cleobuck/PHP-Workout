

<!-- 
Afficher le timestamp du jour. Afficher le timestamp du mardi 2 août 2016 à 15h00.
 -->

<?php
// setlocale (LC_TIME, 'fr_FR.utf8','fra'); 
echo "Aujourd'hui nous sommes " . strftime("%A %d %B %G %X", mktime(15, 0, 0, 8, 2, 2016));



?>
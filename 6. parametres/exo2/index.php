<!-- 
Faire une page index.php. Tester sur cette page que le paramètre age existe et si c'est le cas l'afficher sinon le signaler : index.php?nom=Nemare&prenom=Jean
 -->

<?php
 if (isset($_GET['age'])) {
    $age = $_GET['age'];
    echo $age;
 } else {
     echo "l'age est manquant";
 }
    
?>
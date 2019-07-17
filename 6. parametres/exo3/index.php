<!-- 
Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher: index.php?dateDebut=2/05/2016&dateFin=27/11/2016
 -->




<?php

if (isset($_GET['dateDebut']) && isset($_GET['dateFin'])) {
    $dateDebut = $_GET['dateDebut'];
    $dateFin = $_GET['dateFin'];
    echo "date de début:$dateDebut <br> date de fin: $dateFin";
}


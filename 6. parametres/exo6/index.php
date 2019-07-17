
<!-- 

Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher: index.php?batiment=12&salle=101
 -->

 <?php

if(isset($_GET["batiment"]) && isset($_GET["salle"])) {

    echo "batiment: ".$_GET["batiment"];
    echo "<br>";
    echo "salle: ".$_GET["salle"];

}

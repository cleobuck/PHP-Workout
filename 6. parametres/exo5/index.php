<!-- 
Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher: index.php?semaine=12
 -->


<?php 

if(isset($_GET["semaine"])) {

    echo "semaine:".$_GET["semaine"];

}
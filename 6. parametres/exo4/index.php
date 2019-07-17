<!-- 
Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher: index.php?langage=PHP&serveur=LAMP
 -->

<?php 

if (isset($_GET['langage']) && isset($_GET['serveur'])) {
    echo "langage:".$_GET['langage'];
    echo '<br>';
    echo "serveur:" .$_GET['serveur'];
}

?>
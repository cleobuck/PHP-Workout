<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ex1</title>
</head>
<body>
<!-- 
Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher: index.php?nom=Nemare&prenom=Jean
 -->

<?php

if (isset($_GET['nom']) && isset($_GET['prenom'])) {
    $nom = $_GET['nom'];
    $prenom = $_GET['prenom'];
    echo "hello $prenom $nom";
}



?>
</body>
</html>
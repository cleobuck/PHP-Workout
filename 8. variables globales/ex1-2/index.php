<!-- 
Faire une page HTML permettant de donner à l'utilisateur :

son User Agent
son adresse ip
le nom du serveur
 -->


<!--

 Sur la page index, faire un lien vers une autre page. Passer d'une page à l'autre le contenu des variables nom, prenom et age grâce aux sessions. Ces variables auront été définies directement dans le code. Il faudra afficher le contenu de ces variables sur la deuxième page.
 -->

 <?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
    echo "Your user agent is: ".$_SERVER['HTTP_USER_AGENT']."<br>";
    echo "Your IP adress is: ".$_SERVER['REMOTE_ADDR']."<br>";
    echo "Your server is: ".$_SERVER['SERVER_NAME']."<br>";
    $_SESSION["nom"] = "Buck";
    $_SESSION["prenom"] = "Cleo";
    $_SESSION["age"] = 29;
    ?>
    <a href="page2.php">Let's go to the next page </a>
</body>
</html>



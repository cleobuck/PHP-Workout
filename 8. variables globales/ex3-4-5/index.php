<!-- 
Exercice 3

Faire un formulaire qui permet de récupérer le login et le mot de passe de l'utilisateur. A la validation du formulaire, stocker les informations dans un cookie.

Exercice 4

Faire une page qui va récupérer les informations du cookie créé à l'exercice 3 et qui les affiche.

Exercice 5

Faire une page qui va pouvoir modifier le contenu du cookie de l'exercice 3.
 -->



<!DOCTYPE html>

<?php
if(isset($_POST['login']) && isset($_POST['password'])) {
    setcookie('login', $_POST['login']);
    setcookie('password', $_POST['password']);
}
    
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action=""#" method="post">

Login: <input type="text" name="login">
Mot de passe: <input type="password" name="password">
<input type="submit" name="submit">
</form>




    <?php 
    if(isset($_POST['login']) && isset($_POST['password'])) {
        echo "your login is: ".$_POST['login']."<br>";
        echo "your password is: ".$_POST['password']."<br>";
        echo "<a href=\"page2.php\">Maintenant aller à la deuxième page</a>";
    } else if (isset($_COOKIE['login']) && isset($_COOKIE['password'])) {
        echo "your login is: ".$_COOKIE['login']."<br>";
        echo "your password is: ".$_COOKIE['password']."<br>";
        echo "<a href=\"page2.php\">Maintenant aller à la deuxième page</a>";
    }
   

    ?>



</body>
</html>


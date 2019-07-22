<!DOCTYPE html>

<?php
setcookie('login', $_POST['login']);
setcookie('password', $_POST['password']);
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form action="#" method="post">
    Login: <input type="text" name="login">
    Mot de passe: <input type="password" name="password">
    <input type="submit" name="submit">
    </form>

    <?php 
    
 

    if (isset($_POST['login']) && isset($_POST['password']))  {
        echo "your login is ".$_POST['login']."<br>";
        echo "your password is" .$_POST['password'];

    }
  

?>

<a href="index.php">Go back</a>

 

</body>
</html>
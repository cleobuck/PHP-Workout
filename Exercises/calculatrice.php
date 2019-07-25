<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculatrice</title>

    <style> 

section  {
    top: 0;
    position: absolute;
    height: 100vh;
    width: 100vw;
    background-color: rgba(0,0,0,0.5);
    display: flex;
    justify-content: center;
  
    align-items: center;

}
.modal {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    font-size: 3em;
    height: 80%;
    width: 80%;
    background-color: turquoise;

}
    </style>

</head>

<body>

<h1> If statement calculator </h1>
<form action="#" method="post">
    Chiffre 1: <input type="text" name="chiffre1">
    Chiffre 2: <input type="text" name="chiffre2">
    <input type="submit" name="submit2" value="+">
    <input type="submit" name="submit2" value="-">
    <input type="submit" name="submit2" value="*">
    <input type="submit" name="submit2" value="/">
</form> 

<?php

$modal = true;

if (isset($_POST['button'])) {
    $modal = false;
}

if (isset($_POST['submit2']) && $modal == true) { ?>

<section>

<form method="post" class="modal" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">


    <?php
        $operation2 = $_POST['submit2'];
        if ($_POST['chiffre1'] == "" || $_POST['chiffre2'] == "") {
            echo "erreur - il manque des chiffres";
        } else if ($operation2 == "+") {
            echo $_POST['chiffre1'] +  $_POST['chiffre2'];
        } else if ($operation2 == "-") {
            echo $_POST['chiffre1'] - $_POST['chiffre2'];
        } else if ($operation2 == "/" && $_POST['chiffre2'] != 0) {
            echo $_POST['chiffre1'] /  $_POST['chiffre2'];
        } else if ($operation2 == "/") {
            echo "erreur - on ne peut pas diviser par 0!";
        }
           else  {
            echo $_POST['chiffre1'] *  $_POST['chiffre2'];
        }
    ?>
    <input type="submit" name="button" value= "X">
</form>
</section>
    <?php }

    ?>





</body>
</html>
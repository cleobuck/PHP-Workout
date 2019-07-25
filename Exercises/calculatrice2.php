<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculatrice</title>


</head>

<body>
<h2> Switch statement calculator </h2>
<form method="post" class="modal" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Chiffre 1: <input type="text" name="chiffre1">
    Chiffre 2: <input type="text" name="chiffre2">
    <input type="submit" name="submit" value="+">
    <input type="submit" name="submit" value="-">
    <input type="submit" name="submit" value="*">
    <input type="submit" name="submit" value="/">
</form> 

<p>
    <?php
$operation = $_POST['submit'];

if ($_POST['chiffre1'] == "" || $_POST['chiffre2'] == "") {
    echo "erreur - il manque des chiffres";
} else {
    switch($operation) {
        case "+":
            echo $_POST['chiffre1'] +  $_POST['chiffre2'];
            break;
        case "-":
            echo $_POST['chiffre1'] - $_POST['chiffre2'];
            break;
        case "/":
            if ($_POST["chiffre2"] == 0) {
                echo "erreur - on ne peut diviser par 0";
            } else {
                echo $_POST['chiffre1'] /  $_POST['chiffre2'];
            }
           
            break;
        case "*":
            echo $_POST['chiffre1'] *  $_POST['chiffre2'];
            break;
    }
}
    
    ?>
</p>



</body>
</html>
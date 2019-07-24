<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="#" method="post">
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


    switch($operation) {

        case "+":
            echo $_POST['chiffre1'] +  $_POST['chiffre2'];
            break;
        case "-":
            echo $_POST['chiffre1'] - $_POST['chiffre2'];
            break;
        case "/":
            echo $_POST['chiffre1'] /  $_POST['chiffre2'];
            break;
        case "*":
            echo $_POST['chiffre1'] *  $_POST['chiffre2'];
            break;
            

    }


    ?>

</p>

</body>
</html>
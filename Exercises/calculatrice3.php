<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculatrice</title>

    <style> 
.modal {

}
    </style>

</head>

<body>


<section class="function">
<h2> function calculator </h2>
<form method="post" class="modal" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Chiffre 1: <input type="text" name="chiffre1">
    Chiffre 2: <input type="text" name="chiffre2">
    <input type="submit"  name="submit3" value="+">
    <input type="submit"   name="submit3" value="-">
    <input type="submit"   name="submit3" value="*">
    <input type="submit"   name="submit3" value="/"><br><br>
    Résultat :<input type="text" value="<?php calc(); ?>">
</form> 


    <?php
        function calc() {

            $operation3 = $_POST['submit3'];
            if ($operation3 == "+") {
                echo $_POST['chiffre1'] +  $_POST['chiffre2'];
            } else if ($operation3 == "-") {
                echo $_POST['chiffre1'] - $_POST['chiffre2'];
            } else if ($operation3 == "/") {
                echo $_POST['chiffre1'] /  $_POST['chiffre2'];
            } else {
                echo $_POST['chiffre1'] *  $_POST['chiffre2'];
            }


        }
    ?>
    
</section>

</body>
</html>
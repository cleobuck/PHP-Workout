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

if (!$_COOKIE["login"]) {
    echo "error";
}
    echo "your login is: ".$_COOKIE["login"]."<br>";
    echo "your password is: ".$_COOKIE["password"];
  
?>

<a href="page3.php">Click to change login</a>
    
</body>
</html>
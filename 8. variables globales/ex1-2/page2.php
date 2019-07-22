<?php

session_start();

echo "Bonjour, encore vous ".$_SESSION['prenom']." ".$_SESSION['nom']."! Vous devez toujours avoir ".$_SESSION['age']." ans à l'heure qu'il est."


?>
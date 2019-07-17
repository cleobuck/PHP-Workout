<!-- 
    
Camille se marie et doit envoyer des mails à ses amis.

En utilisant ce tableau, faites en sorte que chaque personne de cette liste reçoit le même mail en faisant en sorte qu'il soit personnalisé.

array("Alex", "Max", "Dominique", "Claude", "Leslie", "Charlie", "Lou");

Mail : "Salut prénom, devine quoi ! Je me marie dans samedi dans deux semaines ! J'espère te compter parmi les invités ! Gros bisous :)"
 
 -->

<?php 

$guests = ["Alex", "Max", "Dominique", "Claude", "Leslie", "Charlie", "Lou"];

foreach ($guests as $value) {
    echo "Salut $value, Devine devine quoi ! Je me marie dans samedi dans deux semaines ! J'espère te compter parmi les invités ! Gros bisous :)<br><br>";
}

?>
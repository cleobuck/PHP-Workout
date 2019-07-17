<!-- 

Faire une fonction qui prend trois paramètres : nom, prenom et age. Elle doit retourner une chaine de la forme : "Bonjour" + nom + prenom + ",tu as" + age + "ans".

-->


<?php

function greeting($nom, $prenom, $age) {
    return "Bonjour $nom $prenom, tu as $age ans.";
}

echo greeting ("Buck", "Cleo", "29");
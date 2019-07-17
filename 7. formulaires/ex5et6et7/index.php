<?php
    function putForm2(){
    $myForm = "<form name='form2' method='post' action='#'><table border='1'><tr><td>form 2 is here!<br></td></tr><tr><td><input type='text' name='txt123' id='txt123'></td></tr> <tr><td><input type='submit' name='sendtwo' id='sendtwo' value='TwoClick'></td></tr></table></form>";
    return $myForm;
    }
?>


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
$displayForm = true;
if(isset($_POST["submit"])) {
    $displayForm = false;
}

if($displayForm) { ?>
    <form action="#" method="post">
        Civilité: <select name="civil">
                    <option value="mlle">Mlle</option>
                    <option value="mrs">Mrs</option>
                    <option value="mr">Mr</option>
                    </select><br>
        Nom: <input type="text" name="nom"><br>
        Prenom: <input type="text" name="prenom"><br><br>
        Fichier:  <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" name="submit">
    </form>
<?php
}

if(isset($_POST["civil"]) && isset($_POST["nom"]) && isset($_POST["prenom"]) && isset($_POST["fileToUpload"])) {
    echo $_POST["civil"] ." ".$_POST["nom"] ." ".$_POST["prenom"]."<br> le fichier est ".$_POST["fileToUpload"]."<br>";
    $file = $_POST["fileToUpload"];
    if(substr($file, strlen($file)-3, strlen($file)+1) === "pdf") {
        echo "Fichier ok";
    } else {
        echo "Le fichier n'est pas un pdf!";
    }
}

?>


<pre>


Exercice 5

Créer un formulaire sur la page index.php avec :

    Une liste déroulante pour la civilité (Mr ou Mme)
    Un champ texte pour le nom
    Un champ texte pour le prénom

Ce formulaire doit rediriger vers la page index.php. Vous avez le choix de la méthode.

EXERCICE 6

Avec le formulaire de l'exercice 5, si des données sont passées en POST ou en GET, le formulaire ne doit plus être affiché. Par contre les données transmises doivent l'être. Si aucune donnée ne sont passées en POST ou GET, le formulaire reste visible. Utiliser qu'une seule page.

EXERCICE 7

Au formulaire de l'exercice 5, ajouter un champ d'envoi de fichier. Afficher, en plus de ce qui est demandé à l'exercice 6, le nom et l'extension du fichier.

EXERCICE 8

Sur le formulaire de l'exercice 6, en plus de ce qui est demandé sur les exercices précédents, vérifier que le fichier transmis est bien un fichier pdf.</pre>
</pre>
</body>
</html>
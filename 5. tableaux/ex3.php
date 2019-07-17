
<!-- 

Voici la liste des départements de la région Auvergne-Rhône-Alpes : Ain (01), Allier (03), Ardèche (07), Cantal (15), Drôme (26), Isère (38), Loire (42), Haute-Loire (43), Puy-de-Dôme (63), Rhône (69), Savoie (73), Haute-Savoie (74)

Créer un tableau associatif avec comme index le numéro des départements et en valeur leur nom.
Afficher la valeur de l'index 69.
Ajouter la ligne correspondant au département de la ville de Metz.
Afficher toutes les valeurs ainsi que les clés associées grâce à une boucle sous la forme : "Le département" + nom_departement + "a le numéro" + num_departement

 -->

 <?php

$AuvRhoAlp = [

01 => "Ain",
03 => "Allier",
07 => "Ardèche",
15 => "Cantal",
26 => "Drôme",
38 => "Isère",
42 => "Loire",
43 => "Haute-Loire",
63 => "Puy-de-Dôme",
69 => "Rhône",
73 => "Savoie", 
74 => "Haute-Savoie"

];

echo $AuvRhoAlp[69];
echo "<br/>";
$AuvRhoAlp[57] = "Moselle";

foreach ($AuvRhoAlp as $key => $value) {
    echo "Le département $value a le numéro $key<br/>";
}
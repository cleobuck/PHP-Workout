<!-- 
Traduire ce code avec des if et des else :

<?php 
// echo ($maVariable != 'Homme') ? 'C\'est une développeuse !!!' : 'C\'est un développeur !!!';
?>

 -->

<?php 

$maVariable = "femme";

if ($maVariable != "Homme") {
    echo "C'est une développeuse!!!";
} else {
    echo "C'est un développeur!!!!";
}
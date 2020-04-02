<html>
<h1>TP_n°6_langage_PHP</h1>
<hr>
<h2>Exercice_2</h2>

<?php include("Exercice_2.php");

$form = new Exercice_2('Exercice_2.php','post');
$form->ajouterzonetexte(nom);
$form->ajouterzonetexte(code);
$form->ajouterbouton();
$form->getform();
?>

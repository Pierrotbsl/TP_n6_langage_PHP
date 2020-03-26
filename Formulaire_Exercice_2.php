<?php include("Exercice_2.php");

$form = new Exercice_2('Exercice_2.php','post');
$form->ajouterzonetexte(nom);
$form->ajouterzonetexte(code);
$form->ajouterbouton();
$form->getform();
?>

<h1>Voici la page Test du Formulaire</h1>

<?php include("Formulaire_Exercice_2.php");


$form = new Exercice_2();
$form->ajouterzonetexte(nom);
$form->ajouterzonetexte(code);
$form->ajouterbouton();
$form->getform();
?>

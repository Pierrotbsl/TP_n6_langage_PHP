<?php


class Formulaire
{
    public function __construct($_nom, $methode)
    {
        echo "<form action=\"\" method=$methode></form>";
    }
    public function ajouterzonetexte($nom)
    {
       echo "Votre ".$nom.": <input type=\"text\" id=$nom name=\"user_\".$nom >";
       echo "\r";
    }
    public function ajouterbouton()
    {
        echo "<input type=\"submit\" name=\"valider\" value=\"Valider\"/>";
    }
    public function getform()
    {
        $page = file_get_contents("TestFormulaire.php");
        echo '<pre>';
        echo $page;
        echo '</pre>';
    }
}


$form = new Formulaire("Formulaire",post);
$form->ajouterzonetexte(nom);
$form->ajouterzonetexte(code);
$form->ajouterbouton();
$form->getform();
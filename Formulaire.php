<?php


class Formulaire
{
    public function __construct($_nomfichier, $_methode)
    {
        echo "<form action=\"$_nomfichier\" method=\"$_methode\"></form>";
    }
    public function ajouterzonetexte($_nom)
    {
        echo "<div>";
        echo "Votre ".$_nom.": <input type=\"text\" id=$_nom name=\"user_\".$_nom><br>";
        echo "\n";
        echo "</div>";

    }
    public function ajouterbouton()
    {
        echo "<div>";
        echo "<input type=\"submit\" name=\"valider\" value=\"Valider\"/><br>";
        echo "</div>";

    }
    public function getform()
    {
        echo "<div>";
        echo "code HTML : <br>";
        $page = file_get_contents("TestFormulaire.php");
        print_r($page);
        echo "</div>";
    }
}

$form = new Formulaire();
$form->ajouterzonetexte(nom);
$form->ajouterzonetexte(code);
$form->ajouterbouton();
$form->getform();

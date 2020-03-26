<?php

class Exercice_2
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
        echo "</div><br>";

    }
    public function ajouterbouton()
    {
        echo "<div>";
        echo "<input type=\"submit\" name=\"valider\" value=\"Valider\"/><br>";
        echo "</div><br>";

    }
    public function getform()
    {
        echo "<div>";
        echo "function getform() : <br><br>";
        $page = file_get_contents("Formulaire_Exercice_2.php");
        echo $page;
        echo "</div>";
    }
}

?>
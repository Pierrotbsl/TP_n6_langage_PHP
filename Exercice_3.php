<?php


class Exercice_3
{
    private $nom;
    private $prenom;
    private $mail;
    private $age;
    private $sex;

    public function __construct()
    {
        echo "<h3>Récapitulatif de votre fiche d'information personnelle :</h3> ";
        echo "Vous êtes " . $_POST['user_prenom'] . " " . $_POST['user_nom'] . "<br>";
        echo "Votre adresse mail est " . $_POST['user_mail'] . "<br>";
        echo "Vous avez entre " . $_POST['user_age'] . " ans<br>";
        echo "Vous êtes un/une: ";
        foreach ($_POST["sexe"] as $checkoptions) {
            echo $checkoptions;
        }
    }
    public function getprenom()
    {
        return $this->prenom = $_POST['user_prenom'];
    }
    public function getnom()
    {
        return $this->nom = $_POST['nom'];
    }
    public function getmail()
    {
        return $this->mail=$_POST['user_mail'];
    }
    public function getage()
    {
        return $this->age=$_POST['user_age'];
    }
    public function getsex()
    {
        foreach ($_POST["sexe"] as $checkoptions) {
            return $this->sex = $checkoptions;
        }
    }
}

$form = new Exercice_3();
$form->getprenom();
$form->getnom();
$form->getmail();
$form->getage();
$form->getsex();

?>



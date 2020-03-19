<?php


class Soccer_Team
{
    public $_nom;
    public $_nbr_titres;
    static $_nbEquipes=0;
    const TXT = "Nombre d'équipes :";

    static function nbEquipes()
    {
        echo self::TXT.self::$_nbEquipes."\n";
    }
    public function __construct($_nom, $_nbr_titres)
    {
        echo "Constructeur\n";
        $this->setNom($_nom);
        $this->setTitres($_nbr_titres);
        self::$_nbEquipes++;
    }
    function __destruct(){
        echo "Destructeur\n";
    }


    function display()
    {
        echo "L'équipe ".$this->getNom()." a ".$this->getTitres()." titres\n";
    }

    public function setNom($_nom)
    {
        if (!is_string($_nom))
        {
            trigger_error('Le nom d\'une équipe doit être un string', E_USER_WARNING);
            return;
        }

        $this->_nom = $_nom;
    }
    public function setTitres($_titres)
    {
        if (!is_int($_titres))
        {
            trigger_error('Le nombre de titres d\'une équipe doit être un int', E_USER_WARNING);
            return;
        }

        $this->_nbr_titres = $_titres;
    }

    public function getNom()
    {
        return $this->_nom;
    }

    public function getTitres()
    {
        return $this->_nbr_titres;
    }
}

$_team1 = new Soccer_Team("FC Nantes",8);
$_team2 = new Soccer_Team("Girondins Bordeaux",6);
$_team3 = new Soccer_Team("Angers SCO",3);
$_team4 = new Soccer_Team("Pars Saint Germain",15);
$_team1->display();
$_team2->display();
$_team3->display();
$_team4->display();

Soccer_Team::nbEquipes();

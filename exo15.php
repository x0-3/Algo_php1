<?php

// Créer une classe Personne (nom, prénom et date de naissance).
// Instancier 2 personnes et afficher leurs informations : nom, prénom et âge.


class Personne
{

    // Attribute
    public $nom;
    public $prenom;
    public $birthday;

    function __construct($nom, $prenom, $birthday,){
        $this->name =$nom;
        $this->prenom =$prenom;
        $this->birthday = $birthday;
    }

    function get_name(){
        return $this->name;
    }

    function get_prenom(){
        return $this->prenom;
    }

    function get_birthday(){
        return $this->birthday;
    }

    function calculerAge(){
        $date = new Datetime(); //current date
        $anniv = new DateTime($this-> get_birthday());
        $dif = $anniv->diff($date)->format("%Y ans");
    
        return $dif;
    }

}


$p1= new Personne("DUPONT ", " Michel ", " 1980-02-19 ",);

echo $p1->get_prenom();
echo $p1->get_name();
echo $p1->calculerAge();

echo "<br>";

$p2= new Personne("DUCHEMIN ", " Alice ", " 1985-01-17 ");

echo $p2->get_prenom();
echo $p2->get_name();
echo $p2->calculerAge();

?>
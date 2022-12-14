<?php

// Créer une classe Personne (nom, prénom et date de naissance).
// Instancier 2 personnes et afficher leurs informations : nom, prénom et âge.


class Personne
{
    public $personne;

    function set_name($personne){
        $this->name = $personne;
        $this->name = $personne;
    }


}

$p1= new Personne ();
$p1-> set_name("Michel");


echo $p1->name;

?>
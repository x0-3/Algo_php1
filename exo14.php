<?php

// Calculer l'âge exact d'une personne à partir de sa date de naissance (en années, mois, jours).

function calculerAge(){
    $birthday = new DateTime('17-01-1985'); // Your date of birth
    $date = new Datetime('21-05-2018'); //chosen date
    // $date = new Datetime(); //current date

    $dif = $birthday->diff($date)->format("%Y ans %m mois %d jours");

    return $dif;
}

echo "Age de la personne : ".calculerAge();


// echo date_format($date, "Y-M-D");
// $age = $date->diff($birthday); //calculate the difference between the $date and $birthday

//"%d" treats the argument like an interger and is presented as a decimal number
// "printf" outputs a formatted string
// printf('Age de la personne : %d ans, %d mois, %d jours', $age->y, $age->m, $age->d);

?>
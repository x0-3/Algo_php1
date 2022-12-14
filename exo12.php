<?php

// A partir d’une fonction personnalisée et à partir d’un tableau de prénoms et de langue associée
// (tableau contenant clé et valeur), dire bonjour aux différentes personnes dans leur langue
// respective (français ➔ « Salut », anglais ➔ « Hello », espagnol ➔ « Hola »)
// Exemple : tableau ➔ Mickaël -> FRA, Virgile -> ESP, Marie-Claire -> ENG


$table= array('Salut'=>'Mickaël' ,'Hola'=>'Virgile' ,'Hello'=>'Marie-Claire');

asort ($table);// put name into alphabetical order

foreach($table as $value => $key){ // value= language and key = name
    echo "<br>". $value ." "; 
    echo $key;
}
?>
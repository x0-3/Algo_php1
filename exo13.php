<?php

// Calculer la moyenne générale d'un élève dont les notes sont renseignées dans un tableau (pas de
// coefficient). Elle devra être affichée avec 2 décimales.

$note = array ("10", "12", "8", "19", "3", "16", "11", "13", "9");
$moy= array_sum($note)/count($note);// summary of the grades
$formatted_moy = number_format((float)$moy,2,'.','');//2 decimals

echo "Les notes obtenues par l’élève sont : ";
//foreach to print the value from the table
foreach($note as $value){
   echo $value ." ";
}
echo "<br> Sa moyenne générale est donc de : $formatted_moy" ;




?>
<?php 

// Ecrire un algorithme qui déclare une valeur en francs et qui la convertit en euros.
// Attention, la valeur générée devra être arrondie à 2 décimales.

$franc = 100;
$euro = ($franc/ 6.55957);//divide the value of $franc by 6.55957
$roundedNumber = number_format((float)$euro,2,'.','');//round to 2 decimals

echo "Montant en francs : $franc <br> 100 francs = $roundedNumber € ";

?>
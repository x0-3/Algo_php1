<?php

// Initialiser un tableau de x marques de voitures. Ecrire un algorithme permettant de parcourir ce
// tableau et d’en afficher le contenu (une marque de voiture par ligne). Il est également demandé
// d’afficher le nombre de marques de voitures présentes dans le tableau.
// Exemple : tableau ➔ « Peugeot », « Renault », « BMW », « Mercedes »

$x =array ("Peugeot", "Renault", "BMW", "Mercedes");

//sizeof is there to write how many value is stored inside of our array
echo "Il y a "; echo sizeof($x); echo " marques de voitures dans le tableau :";

//count used to return the lenght of the array
for($i=0; $i< count($x); $i++){
    echo "<br>".$x[$i];
}


?>
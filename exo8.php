<?php

//Ecrire un algorithme qui renvoie la table de multiplication d’un nombre passé en paramètre sous la
//forme :

$number= 9;
$range= 11;
$i =1;

echo "Affichage (pour la table de $number) : <br>";
echo "<br> while loop method : <br> ";

while ($i <= $range) {
    echo "$number * $i = ", $number * $i, "<br>";
    $i++; 
}

echo "<br>this is th for loop option : <br>";
for ($i = 1; $i <= $range; $i++){
    echo "$number * $i = ", $number * $i, "<br>";
}


?>
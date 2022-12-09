<?php

// Ecrire un algorithme permettant de renvoyer la catégorie d’un enfant en fonction de son âge :
// Poussin : entre 6 et 7 ans
// Pupille : entre 8 et 9 ans
// Minime : entre 10 et 11 ans
// Cadet : à partir de 12 ans
// Si la catégorie n’est pas gérée, merci de le préciser.


$age= 6;
$text ="L’enfant qui a $age ans appartient à la catégorie « Poussin »";

//if the age is between 6 and 7 then show the text that is present in the variable
if ($age >=6 && $age<= 7){
    echo $text;
}elseif($age >=8 && $age<= 9){ //if the age is between 8 and 9 the replace poussin with pupille
    echo str_replace("« Poussin »","« Pupille »",$text);
}elseif($age >=10 && $age<= 11){ //same
    echo str_replace("« Poussin »","« Minime »",$text);
}elseif($age >= 12){ //same
    echo str_replace("« Poussin »","« Cadet »",$text);
}
else{ //if the age doesn't enter in any category
    echo "Cette catégorie n'est pas gérée";
}

?>
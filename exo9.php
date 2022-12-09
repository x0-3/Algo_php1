<?php

// Nous souhaitons savoir si une personne est imposable en fonction de son âge et de son sexe.
// Si la personne est une femme dont l’âge est compris entre 18 et 35 ans ou si c’est un homme de
// plus de 20 ans, alors celle-ci est imposable (sinon ce n’est pas le cas, « non imposable »).

$age = 68;
$gender= "F";


echo "Age : $age <br>";
echo "Sexe : $gender <br>";
$imposable =  "La personne est imposable ";

//if a girl between 18 and 35 
if($gender == "F" && $age >=18 && $age <=35){
    echo $imposable;
}if($gender == "M" && $age >=20){//man over 20 
    echo $imposable;
}else{
    echo "La personne est non imposable";
}

?>
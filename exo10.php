<?php

// A partir d’un montant à payer et d’une somme versée pour régler un achat, écrire l’algorithme qui
// affiche à un utilisateur un rendu de monnaie en nombre de billets de 10 € et 5 €, de pièces de 2 € et
// 1 €.

$price = 152;//price to pay
$paid = 200;
$pay = $paid - $price;
$change =$pay; //change is egual to pay so that we can write the price of the change to give

$nb10 = 0;
$nb5 = 0;
$nb2 = 0;
$nb1 = 0;

while($change>=10){
    $change=$change-10;
    $nb10++;
}

while($change>=5){
    $change=$change-5;
    $nb5++;
}

while($change>=2){
    $change=$change-2;
    $nb2++;
}


echo "Montant à payer : $price € <br>"; 
echo "Montant versé : $paid € <br>"; 
echo "Reste à payer : $pay € <br>"; 
echo "*********************************************<br>"; 
echo "Rendue de monnaie : <br> $nb10 billet de 10 €  - $nb5 billet de 5 € - $nb2 pieces de 2 € - $change pieces de 1 € <br>";

?>
<?php

// Ecrire un algorithme permettant de calculer un montant de facture à régler à partir de la quantité
// d’articles, son prix hors taxe et un taux de TVA (exprimé en décimal. Ex : 20 % -> 0.2)

$price = 9.99;
$quantity = 5;
$tax= 0.2;
$priceWT = ($price*$tax);// calculate tax price added on the price
$formatted_number = number_format((float)$priceWT,2,'.','');//round the result of priceWT to 2 decimals
$priceAddTotax = $price+$formatted_number;// add the tax price to the price of one product
$facture = $priceAddTotax * $quantity;// multiplie the price of 1 product tax included to the quantity 

echo "Prix unitaire de l'article : $price € <br>Quantité : $quantity <br> Taux de TVA : $tax <br> Le montant de la facture à régler est de : $facture €";
?>
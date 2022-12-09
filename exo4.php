<?php

// Ecrire un algorithme permettant de savoir si une phrase est palindrome.

$text = "« Engage le jeu que je le gagne »";
$palindrome = strrev($text);// strrev reverses the variable $text

echo "$text";

if ($text == $palindrome){ // if $text has the same input as $palindrome then 
    echo "<br> palindrome";// write palindrome in a new line
}else{
    echo "<br> Not palindrome"; // if not then write not a palindrome in a new line
}
?>
<?php

//A partir de la phrase de l’exercice 1, écrire l’instruction permettant de compter le nombre de mots
//contenus dans celle-ci.

$text = "« Notre formation DL commence aujourd'hui »";
$numText = str_word_count($text);

echo "La phrase $text contient $numText mots.";

?>
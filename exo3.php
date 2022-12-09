<?php

// A partir de la phrase de l’exercice 1, écrire l’instruction permettant de remplacer le mot
// « aujourd’hui » par le mot « demain ». Afficher l’ancienne et la nouvelle phrase

echo $text = "« Notre formation DL commence aujourd'hui » ";

echo str_replace("aujourd'hui","demain",$text); //replace a word inside the sentence stored in $text

?>
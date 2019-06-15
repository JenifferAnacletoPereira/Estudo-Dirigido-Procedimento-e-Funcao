<?php

print "Digite uma distância em polegadas:";
$polegadas= (float) fgets (STDIN);

function conversao ($polegadas){

    $cm= $polegadas*2.54;

    return $cm;
}

$cm = conversao ($polegadas);
print "A distância convertida em cm é de: $cm cm.";


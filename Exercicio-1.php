<?php

print "Digite uma temperatura em Fahrenheit:";
$Fahrenheit = (float) fgets (STDIN);

conversor ($Fahrenheit);

function conversor ($Fahrenheit)
{

    $celsius = ($Fahrenheit-32) * 5/9;
     return $celsius;

}

$celsius= conversor ($Fahrenheit);
print "A temperatura em Celsius é de $celsius";





<?php

print "Digite o cateto A:";
$catetoa= (float) fgets (STDIN);

print "Digite o cateto B:";
$catetob= (float) fgets (STDIN);

function hipotenusa ($catetoa,$catetob) {

    $hipo= sqrt ($catetoa*$catetoa + $catetob*$catetob);
  
    return $hipo;

}

$hipo= hipotenusa ($catetoa, $catetob);
Print "Hipotenusa é igual a $hipo \n";
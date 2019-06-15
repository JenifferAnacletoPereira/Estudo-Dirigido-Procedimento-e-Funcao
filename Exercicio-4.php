<?php

print "Digite sua altura:";
$altura= (float) fgets (STDIN);

print "Digite 1 para Feminino e 2 para Masculino:";
$sexo= (int) fgets (STDIN);

function pesoideal ($altura, $sexo){

    if ($sexo==1){

        
        $pesoideal=(62.1*$altura)-44.7;
        print "Seu peso ideal é: $pesoideal";
    }

    else {

        $pesoideal= (72.7*$altura)-58;
        print "Seu peso ideal é: $pesoideal";
    }
    
}

$pesoideal = pesoideal ($altura, $sexo);



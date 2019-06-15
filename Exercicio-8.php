<?php

print "Digite um número que corresponde a um Dia da Semana:";
$num= (int) fgets (STDIN);

function dias_semana ($num) {

    if ($num==1){
        print "DOM";
    }

    elseif ($num==2){
        print "SEG";
    }

    elseif ($num==3){
        print "TER";
    }

    elseif ($num==4){
        print "QUA";
    }

    elseif ($num==5){
        print "QUI";
    }

    elseif ($num==6){
        print "SEX";
    }

    elseif ($num==7){
        print "SAB";
    }

    else{
        print "O número não corresponde a um dia da semana";

    }
    
}

dias_semana ($num);
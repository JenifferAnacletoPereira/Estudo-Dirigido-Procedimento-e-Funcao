<?php

print "Escreva um número que corresponda a um mês:";
$num= (int) fgets (STDIN);

function meses ($num) {

    if ($num==1){
        print "Janeiro";
    }

    elseif ($num==2){
        print "Fevereiro";
    }

    elseif ($num==3){
        print "Março";
    }

    elseif ($num==4){
        print "Abril";
    }

    elseif ($num==5){
        print "Maio";
    }

    elseif ($num==6){
        print "Junho";
    }

    elseif ($num==7){
        print "Julho";
    }

    elseif ($num==8){
        print "Agosto";
    }

    elseif ($num==9){
        print "Setembro";
    }

    elseif ($num==10){
        print "Outubro";
    }

    elseif ($num==11){
        print "Novembro";
    }

    elseif ($num==12) {
        print "Dezembro";
    }

    else {
        print "O número digitado não corresponde a um mês";
    }

}

meses ($num);
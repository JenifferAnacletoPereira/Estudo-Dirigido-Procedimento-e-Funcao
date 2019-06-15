<?php

 print "Digite um número:";
 $num1= (float) fgets (STDIN);

 print "Digite um número:";
 $num2= (float) fgets (STDIN);

 function maior ($num1, $num2) {

    if ($num1>$num2){
        print "O maior número é: $num1";
    }

    else {
        print "O maior número é: $num2";
    }
 }

 maior ($num1, $num2);
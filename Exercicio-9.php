<?php

 print "Digite um valor (inteiro) para x:";
 $valorx= (int) fgets (STDIN);

 print "Digite um valor (inteiro) para y:";
 $valory= (int) fgets (STDIN);

 function divisao ($valorx, $valory) {

    if ($valorx%$valory==0){
        print " 1- $valorx é divisível por $valory";
    }

    else {
        print "0- $valorx não é divisível $valory";
    }

 }

 divisao ($valorx, $valory);
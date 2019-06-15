<?php

 print "Digite o número de lados do polígono regular que desejar:";
 $num_lados= (int) fgets (STDIN);

 print "Digite a medida dos lados (em cm):";
 $medida= (float) fgets (STDIN);

 function poligono ($num_lados, $medida) {

     if ($num_lados==3){

        $conta=$medida*$num_lados;
        print "Triângulo de perimetro igual a: $conta cm";
     }

     elseif ($num_lados==4) {

        $conta=$medida*$medida;
        print "Quadrado de area igual a: $conta cm";
     }

     else {

        print "Pentágono";
    }

}

poligono ($num_lados, $medida);

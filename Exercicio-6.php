<?php


print "Digite o primeiro número: ";
$n1 = (float) fgets (STDIN);


print "Digite o segundo número: ";
$n2 = (float) fgets (STDIN);

function intervalo ($n1,$n2){

    if ($n1>$n2){

      for ($i=$n2; $i<=$n1; $i++) {

          if ($i!=$n1 and $i!=$n2){

        $intervalo= $intervalo+$i;

          }
       }

       return $intervalo;
    }

    if ($n2>$n1){

        for ($i=$n1; $i<=$n2; $i++) {
  
            if ($i!=$n1 and $i!=$n2){
  
          $intervalo= $intervalo+$i;
  
            }
         }
         return $intervalo;
      }

      else {
          print "Os números são iguais";
          exit();
      }

}

$intervalo =  intervalo ($n1,$n2);

print "A soma dos números que ficam entre $n1 e $n2 é igual a: $intervalo";
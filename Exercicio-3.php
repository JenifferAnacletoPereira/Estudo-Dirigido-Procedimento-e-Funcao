

<?php
// <!-- Escreva um programa para ler as notas das duas avaliações de um aluno no semestre.
// Faça uma função que receba as duas notas por parâmetro e calcule e escreva a média
// semestral e a mensagem “PARABÉNS! Você foi aprovado!” somente se o aluno foi
// aprovado (considere 6.0 a média mínima para aprovação). -->


print"Digite a primeira nota:";
$nota1= (float) fgets (STDIN);

print "Digite a segunda nota:";
$nota2= (float) fgets (STDIN);

function media ($nota1,$nota2) {

$media= ($nota1+$nota2)/2;

If ($media>=6) {

     print "Parabéns, você foi aprovado com média $media";
}

Else {

    print "Infelizmente você não conseguiu, sua média foi $media";
}

}

media ($nota1,$nota2);
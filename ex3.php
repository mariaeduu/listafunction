Escreva um programa para ler as notas das duas avaliações de um aluno no semestre.
Faça uma função que receba as duas notas por parâmetro e calcule e escreva a média
semestral e a mensagem “PARABÉNS! Você foi aprovado!” somente se o aluno foi
aprovado (considere 6.0 a média mínima para aprovação).

<?php 

function media ($nota1, $nota2) { 

    $media = ($nota1 + $nota2/2);

    if ($media >= 6){
        $mensagem = "PARABÉNS! Você foi aprovado!". $media;
    }

    else {
        $mensagem = "QUE TRISTE! Você foi reprovado!". $media;
    }

    return $mensagem; 

}

print "Digite a primeira nota:";
$nota1 = (float) fgets (STDIN);

print "Digite a segunda nota:";
$nota2 = (float) fgets (STDIN);

$mensagem = media ($nota1, $nota2);
print $mensagem;




<?php 

function divi ($x, $y){
    if ($x%$y==0){
        $resposta = 1; 
    }
    else {
        $resposta = 0;
    }
    return $resposta; 
}

print "Digite o valor de x:";
$x=(float) fgets(STDIN);

print "Digite o valor de y:";
$y=(float) fgets(STDIN);

$resposta = divi($x, $y);

print $resposta . "\n";

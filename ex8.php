<?php 

function dias ($num) {

    if ($num == 1){
        $dia = "domingo";
    }  
    elseif ($num == 2){
        $dia = "segunda";
    }
    elseif ($num == 3){
        $dia ="terça";
    }  
    elseif ($num == 4){
        $dia = "quarta";
    }  
    elseif ($num == 5){
        $dia = "quinta";
    }  
    elseif ($num == 6){
        $dia = "sexta";
    }
    elseif ($num == 7){
        $dia = "sábado";
    }
    
    else {
        $dia = "ERRO!";
    }
    return $dia; 
} 

print "Digite um número:";

$num=(float) fgets(STDIN);

$dia= dias ($num);

print $dia . "\n";


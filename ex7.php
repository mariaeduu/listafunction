<?php 

function meses ($num) {

    if ($num == 1){
        $mes = "janeiro";
    }  
    elseif ($num == 2){
        $mes = "fevereiro";
    }
    elseif ($num == 3){
        $mes ="março";
    }  
    elseif ($num == 4){
        $mes = "abril";
    }  
    elseif ($num == 5){
        $mes = "maio";
    }  
    elseif ($num == 6){
        $mes = "junho";
    }
    elseif ($num == 7){
        $mes = "julho";
    }
    elseif ($num == 8){
        $mes = "agosto";
    }
    elseif ($num == 9){
        $mes = "setembro";
    }
    elseif ($num == 10){
        $mes = "outubro";
    }
    elseif ($num == 11){
        $mes = "novembro";
    } 
    elseif ($num == 12){
        $mes = "dezembro";
    }
    else {
        $mes = "ERRO!";
    }
    return $mes; 
} 

print "Digite um número:";

$num=(float) fgets(STDIN);

$mes= meses ($num);

print $mes . "\n";


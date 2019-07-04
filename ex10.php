<?php 

    function Maior ($numero1,$numero2){
        if ($numero1>$numero2){
            $resposta= "O primeiro número digitado, ".$numero1.", é o número maior"; 
        }
        elseif ($numero1<$numero2){
            $resposta= "O segundo número digitado, ".$numero2.", é o múmero maior";
        }
        else{
            $resposta= "Os valores são iguais";
        }
        return $resposta;
    }
    print "Digite o primeiro número:";
    $numero1= (float) fgets(STDIN);
    print "Digite o segundo número:";
    $numero2= (float) fgets(STDIN);
    $resposta= maior ($numero1,$numero2);
    print $resposta . "\n";
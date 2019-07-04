<?php 

function numeros ($numero1,$numero2){
    $soma=0;
        for ($contador = $n1; $contador <= $n2; $contador++) { 
            $soma += $contador;
        }
        return $soma;
    }
   
    print "Digite o número inicial:";
    $numero1= (float) fgets(STDIN);
    print "Digite o número final:";
    $numero2= (float) fgets(STDIN);
    $soma= numeros ($numero1,$numero2)-$numero1-$numero2;
    print $soma . "\n";

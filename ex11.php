<?php

    function Polegadas ($polegadas){
        $cm = $polegadas * 2.54;
        return $cm;
    }
    print "Digite um número em polegadas:";
    $polegadas = (float) fgets(STDIN);
    
    $cm = polegadas ($polegadas);
    print "São ".$cm." centímetros" . "\n";

<?php 

function pesoideal ($sexo, $altura) {
    if ($sexo = 1){
    $peso=(62.1 * $altura) - 44.7; 
    }    

    else {
        $peso=(72.7 * $altura) - 58; 
    }

    return $peso;

}

print "Se você for mulher digite 1, se for homem digite 2:";
$sexo= (float) fgets (STDIN);

print "Digite sua altura:";
$altura= (float) fgets (STDIN);

$peso = pesoideal ($sexo, $altura);

print "O peso ideal para vocẽ é:". $peso;



<?php 

function poligono ($num_lados, $medida_lados){

    $perimetro = $medida_lados*3;
    $area = $medida_lados * $medida_lados; 

 if ($num_lados == 3){
    $mensagem = "É um triângulo e o perímetro é:". $perimetro;
 }

 elseif ($num_lados == 4){
    $mensagem= "É um quadrado e o perímetro é:". $area;
 }

 else {
   $mensagem = "É um pentágono e o perímetro";
}

return $mensagem;
}

print "Digite o número de lados:";
$num_lados = (float) fgets (STDIN);

print "Digite a medida de lados em cm:";
$medida_lados = (float) fgets (STDIN);

$mensagem =  poligono ($num_lados, $medida_lados);
print $mensagem;






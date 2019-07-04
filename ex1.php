
<?php 

function FarpCel ($tf)
{
    $tc = ($tf -32) * 5/9;
    return $tc;
}

print "Digite uma temperatura em Fahreinheit;";
$tf = (float) fgets (STDIN);
$tc = FarpCel ($tf);
print $tf . "Farenheits equivale a" . $tc . "Celsius";


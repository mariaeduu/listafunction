
<?php 

function hipotenusa ($catA, $catB)
{
$hip = sqrt ($catA*$catA + $catB*$catB);
return $hip;
}

print "Digite o valor do catetoA:";
$catA = (float) fgets (STDIN);

print "Digite o valor do catetoB:";
$catB = (float) fgets (STDIN);

$hip = hipotenusa ($catA,$catB);
print "a hipotenusa é:" . $hip;








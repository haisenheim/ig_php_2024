<?php
require("malib.php");

$a = 11;
$s = somme($a,4);
$p = produit($a,4);
$car = square($a);
$c = cube($a);
$f = facto($a);

echo "La valeur initiale : ".$a . "\n";
echo "resultat de la somme : ".$s . "\n";
echo "resultat du produit : ".$p . "\n";
echo "resultat du carre : ".$car . "\n";
echo "resultat du cube : ".$c . "\n";
echo "resultat du factoriel : ".$f . "\n";
echo "-------------------- \n";
echo "resultat de la somme et du produit : ". somme(produit($a,$s)) . "\n";
echo "-------------------- \n";
echo "resultat du factoriel de la somme : ". facto(somme($a)) . "\n";

echo "-------------------- \n";
//echo "Je me lache : ". somme(produit($a,square(cube(facto($a))))) . "\n";

?>
<?php

//echo "Hello World! \n";

/*$a = 17;
$b = 9;

$c = $a + $b;

echo $c;

if($a < 10){
    echo "Inferieur a 10 \n";
}else{
    echo "Superieur a 10 \n";
} */

//$a =1;

/* if($a){
    echo "vrai \n";
}else{
    echo "Faux \n";
} */

$tab = [
    "Bonjour",
    "Etudiant","Ananas",
    23,
    true,
    89,"Papa"
];

$tab = [20,3,45,67,7];


//foreach ---> pour chaque element
//for     ---> pour i allant de x a y faire
$i = 0;
foreach($tab as $item){
    echo "Position "
    .$i
    ." : " 
    .$item
    . " --> "
    . $item * $item 
    ."\n";
    //$i = $i + 1;
    //$i +=1;
    $i++;
}


?>
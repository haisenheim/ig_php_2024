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

$tab = [20,3,45,67,7,11,9];


//foreach ---> pour chaque element
//for     ---> pour i allant de x a y faire
/* $i = 0;
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
} */

/*for ($i=0;$i<count($tab);$i++){
    echo $tab[$i]*2 ."\n";
} */

//While ---> Tant que une condition est vrai alors faire
$i =0;
while($i<count($tab)){
    echo $i." - ". $tab[$i]*2 ."\n";
   // echo $i ."\n";
    $i++;
}
echo "------------------------- \n";
$i = 0;
do{
    echo $i." - ". $tab[$i]*2 ."\n";
    $i++; 
}while($i<count($tab));

?>
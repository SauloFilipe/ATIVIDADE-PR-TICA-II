<?php

$numeros = [];


for ($i = 1; $i <= 10; $i++){
    echo "Digite 10 numeros $i: ";
    $numero = (int)trim(fgets(STDIN));
    $numeros[] = $numero;
}

$pares = [];
$impares = [];

foreach($numeros as $n){
    if($n % 2 == 0){
        $pares[] = $n;
    } else {
        $impares[] = $n;
    }
}

echo "\nNumeros pares:\n";
foreach($pares as $par) {
    echo "- $par\n";
}

echo "\nNumeros impares:\n";
foreach($impares as $imp){
    echo "- $imp\n";
}

?>
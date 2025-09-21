<?php 

$frutas = [];

for ($i = 1; $i <= 5; $i++) {
    echo "Digite as frutas $i: ";
    $fruta = trim(fgets(STDIN));
    $frutas[] = $fruta;
}

sort($frutas);
echo "\nFrutas em ordem alfabética:\n";
foreach($frutas as $fruta){
    echo " - $fruta\n";
}
?>
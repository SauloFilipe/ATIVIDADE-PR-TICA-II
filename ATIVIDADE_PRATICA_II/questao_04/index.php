<?php

$matriz1 = [
    [3, 2, 7],
    [6, 1, 6],
    [8, 1, 4]
];

$matriz2 = [
    [1, 5, 2],
    [0, 3, 7],
    [4, 6, 9]
];

$resultado = [];
    for($i = 0; $i <=2; $i++){
        for($j = 0; $j <=2; $j++){
            $resultado[$i][$j] = $matriz1[$i][$j] + $matriz2[$i][$j];
        }
    }

echo "Matriz resultante (soma):\n";
for($i = 0; $i <= 2; $i++) {
    for($j = 0; $j <= 2; $j++) {
        echo $resultado[$i][$j]. " ";
    }
    echo "\n";
}

?>
<?php

function areaQuadrado($lado){
    return $lado * $lado;
}

function areaCirculo($raio){
    return $raio * 3.14;
}

function areaRetangulo($base, $altura){
    return $base * $altura;
}

echo "Digite 1 para Quadrado, 2 para Círculo, 3 para Retângulo: ";
$formas = (int) trim(fgets(STDIN));

switch($formas){
    case 1: 
        echo "Digite o lado do quadrado: ";
        $lado = (float) trim(fgets(STDIN));
        echo "\nA área do quadrado é: " . areaQuadrado($lado) . "\n";
        break;

    case 2: 
        echo "Digite o raio do círculo: ";
        $raio = (float) trim(fgets(STDIN));
        echo "\nA área do circulo é: " . areaCirculo($raio) . "\n";
        break;

    case 3: 
        echo "Digite a base do retângulo: ";
        $base = (float) trim(fgets(STDIN));
        echo "Digite a altura do retângulo: ";
        $altura = (float) trim(fgets(STDIN));
        echo "\nA área do retângulo é: " . areaRetangulo($base, $altura) . "\n";
        break;

    default: 
        echo "Opção inválida. Compile novamente.\n";
}

?>
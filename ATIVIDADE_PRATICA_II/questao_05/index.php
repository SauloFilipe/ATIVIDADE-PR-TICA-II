<?php

function convertCelsiuFahren($celsius){
    return $celsius * 1.8 + 32;
}

function convertFahrenCelsiu($fahren){
    return ($fahren - 32) / 1.8;
}

echo "Digite a temperatura em Celsius: ";
$celsius = (float) trim(fgets(STDIN));

echo "Digite a temperatura em Fahrenheit: ";
$fahren = (float) trim(fgets(STDIN));

echo "\nTemperatura em Celsius: {$celsius} ºC\n";
echo "Convertida para Fahrenheit: " . convertCelsiuFahren($celsius) . " ºF\n";

echo "\nTemperatura em Fahrenheit: {$fahren} ºF\n";
echo "Convertida para Celsius: " . convertFahrenCelsiu($fahren) . " ºC\n";

?>
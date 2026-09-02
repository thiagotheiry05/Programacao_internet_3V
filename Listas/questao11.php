<?php

$numeros = [45, 12, 89, 3, 67, 21, 100, 8, 55];

$maior = $numeros[0];
$menor = $numeros[0];

$posMaior = 0;
$posMenor = 0;

for ($i = 1; $i < count($numeros); $i++) {

    if ($numeros[$i] > $maior) {
        $maior = $numeros[$i];
        $posMaior = $i;
    }

    if ($numeros[$i] < $menor) {
        $menor = $numeros[$i];
        $posMenor = $i;
    }
}

echo "Maior: $maior<br>";
echo "Posição do maior: $posMaior<br>";

echo "Menor: $menor<br>";
echo "Posição do menor: $posMenor";

?>
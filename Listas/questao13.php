<?php

$numeros = [15, 8, 35, 42, 11, 27, 39];

$maior = $numeros[0];
$segundoMaior = $numeros[0];

for ($i = 1; $i < count($numeros); $i++) {

    if ($numeros[$i] > $maior) {
        $segundoMaior = $maior;
        $maior = $numeros[$i];
    } elseif ($numeros[$i] > $segundoMaior && $numeros[$i] != $maior) {
        $segundoMaior = $numeros[$i];
    }

}

echo "Maior número: $maior<br>";
echo "Segundo maior: $segundoMaior";

?>
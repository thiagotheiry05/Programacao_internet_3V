<?php

$numeros = [2, 5, 2, 8, 5, 2, 10, 8, 5, 5];

$frequencias = [];

foreach ($numeros as $numero) {

    if (isset($frequencias[$numero])) {
        $frequencias[$numero]++;
    } else {
        $frequencias[$numero] = 1;
    }

}

foreach ($frequencias as $numero => $quantidade) {

    echo "$numero aparece $quantidade vezes<br>";

}

?>
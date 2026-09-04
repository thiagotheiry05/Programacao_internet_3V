<?php

$numeros = [2, 5, 2, 8, 5, 2, 10, 8, 5, 5];

for ($i = 0; $i < count($numeros); $i++) {

    $valor = $numeros[$i];
    $repetido = false;

    // Verifica se o valor já apareceu antes
    for ($j = 0; $j < $i; $j++) {

        if ($numeros[$j] == $valor) {
            $repetido = true;
        }

    }

    // Se ainda não apareceu, conta suas ocorrências
    if ($repetido == false) {

        $quantidade = 0;

        for ($j = 0; $j < count($numeros); $j++) {

            if ($numeros[$j] == $valor) {
                $quantidade++;
            }

        }

        echo "$valor aparece $quantidade vezes<br>";
    }
}

?>
```

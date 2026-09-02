<?php

$i = 20;

while ($i >= 0) {

    if ($i % 5 == 0) {
        echo "$i - Múltiplo de 5<br>";
    } else {
        echo "$i<br>";
    }

    $i--;
}

echo "Contagem encerrada!";

?>
<?php

$numero = 15;

if ($numero % 3 == 0 && $numero % 5 == 0) {
    echo "É múltiplo de 3 e 5.";
} elseif ($numero % 3 == 0) {
    echo "É múltiplo de 3.";
} elseif ($numero % 5 == 0) {
    echo "É múltiplo de 5.";
} else {
    echo "Não é múltiplo de 3 nem de 5.";
}

?>
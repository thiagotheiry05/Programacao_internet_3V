<?php

$numero = 7;
$divisores = 0;

for ($i = 1; $i <= $numero; $i++) {

    if ($numero % $i == 0) {
        $divisores++;
    }

}

if ($divisores == 2) {
    echo "$numero é primo.";
} else {
    echo "$numero não é primo.";
}

?>
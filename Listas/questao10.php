<?php

$a = 0;
$b = 1;

for ($i = 1; $i <= 15; $i++) {

    echo $a . " ";

    $proximo = $a + $b;
    $a = $b;
    $b = $proximo;
}

?>
<?php

$a = 15;
$b = 32;
$c = 21;

if ($a >= $b && $a >= $c) {
    echo "Maior: $a";
} elseif ($b >= $a && $b >= $c) {
    echo "Maior: $b";
} else {
    echo "Maior: $c";
}

?>
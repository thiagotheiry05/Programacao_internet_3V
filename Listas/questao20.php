<?php

$candidatos = [
    ["numero" => 10, "nome" => "Ana", "votos" => 0],
    ["numero" => 20, "nome" => "Carlos", "votos" => 0],
    ["numero" => 30, "nome" => "Maria", "votos" => 0]
];

$votos = [10, 20, 10, 30, 30, 30, 20, 10, 50, 30, 20, 30, 50, 10];

$votosNulos = 0;
$votosValidos = 0;

foreach ($votos as $voto) {

    $encontrou = false;

    foreach ($candidatos as &$candidato) {

        if ($voto == $candidato["numero"]) {
            $candidato["votos"]++;
            $votosValidos++;
            $encontrou = true;
            break;
        }

    }

    unset($candidato);

    if (!$encontrou) {
        $votosNulos++;
    }
}

$maiorVotos = -1;
$vencedor = "";

echo "<strong>Resultado da eleição:</strong><br><br>";

foreach ($candidatos as $candidato) {

    $percentual = ($candidato["votos"] / $votosValidos) * 100;

    echo $candidato["nome"] . ": ";
    echo $candidato["votos"] . " votos - ";
    echo number_format($percentual, 2, ",", ".") . "%<br>";

    if ($candidato["votos"] > $maiorVotos) {
        $maiorVotos = $candidato["votos"];
        $vencedor = $candidato["nome"];
    }
}

$totalVotos = count($votos);

echo "<br>";
echo "Votos nulos: $votosNulos<br>";
echo "Votos válidos: $votosValidos<br>";
echo "Total de votos: $totalVotos<br>";
echo "Vencedor: $vencedor";

?>
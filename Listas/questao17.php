<?php

$times = [
    ["nome" => "Time A", "vitorias" => 5, "empates" => 2, "derrotas" => 1],
    ["nome" => "Time B", "vitorias" => 4, "empates" => 4, "derrotas" => 0],
    ["nome" => "Time C", "vitorias" => 6, "empates" => 0, "derrotas" => 2],
    ["nome" => "Time D", "vitorias" => 3, "empates" => 3, "derrotas" => 2]
];

$maiorPontos = -1;
$menorPontos = PHP_INT_MAX;

$timeMaior = "";
$timeMenor = "";

$maiorVitorias = -1;
$timeMaisVitorias = "";

$totalPontos = 0;

foreach ($times as $time) {

    $pontos = ($time["vitorias"] * 3) + $time["empates"];

    echo $time["nome"] . ": $pontos pontos<br>";

    $totalPontos += $pontos;

    if ($pontos > $maiorPontos) {
        $maiorPontos = $pontos;
        $timeMaior = $time["nome"];
    }

    if ($pontos < $menorPontos) {
        $menorPontos = $pontos;
        $timeMenor = $time["nome"];
    }

    if ($time["vitorias"] > $maiorVitorias) {
        $maiorVitorias = $time["vitorias"];
        $timeMaisVitorias = $time["nome"];
    }
}

echo "<br>";
echo "Mais pontos: $timeMaior ($maiorPontos)<br>";
echo "Menos pontos: $timeMenor ($menorPontos)<br>";
echo "Mais vitórias: $timeMaisVitorias ($maiorVitorias)<br>";
echo "Total de pontos: $totalPontos";

?>
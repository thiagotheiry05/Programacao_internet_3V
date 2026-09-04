<?php

$candidatos = [
    ["numero" => 10, "nome" => "Ana", "votos" => 0],
    ["numero" => 20, "nome" => "Carlos", "votos" => 0],
    ["numero" => 30, "nome" => "Maria", "votos" => 0]
];

$votos = [10, 20, 10, 30, 30, 30, 20, 10, 50, 30, 20, 30, 50, 10];

$votosNulos = 0;
$votosValidos = 0;

// Conta os votos
foreach ($votos as $voto) {

    $encontrou = false;

    for ($i = 0; $i < count($candidatos); $i++) {

        if ($voto == $candidatos[$i]["numero"]) {

            $candidatos[$i]["votos"]++;
            $votosValidos++;
            $encontrou = true;
        }
    }

    if ($encontrou == false) {
        $votosNulos++;
    }
}

// Descobre o vencedor
$maiorVotos = 0;
$vencedor = "";

foreach ($candidatos as $candidato) {

    if ($candidato["votos"] > $maiorVotos) {

        $maiorVotos = $candidato["votos"];
        $vencedor = $candidato["nome"];
    }
}

// Exibe os resultados
foreach ($candidatos as $candidato) {

    $percentual = ($candidato["votos"] / $votosValidos) * 100;

    echo $candidato["nome"] . ": ";
    echo $candidato["votos"] . " votos - ";
    echo $percentual . "%<br>";
}

echo "<br>";

echo "Votos nulos: $votosNulos<br>";
echo "Votos válidos: $votosValidos<br>";
echo "Total de votos: " . count($votos) . "<br>";
echo "Vencedor: $vencedor";

?>

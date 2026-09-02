<?php

$produtos = [
    ["nome" => "Teclado", "preco" => 120, "quantidade" => 5],
    ["nome" => "Mouse", "preco" => 60, "quantidade" => 0],
    ["nome" => "Monitor", "preco" => 900, "quantidade" => 3],
    ["nome" => "Cabo HDMI", "preco" => 35, "quantidade" => 10],
    ["nome" => "Headset", "preco" => 250, "quantidade" => 2]
];

$totalEstoque = 0;

$maiorValor = 0;
$produtoMaiorValor = "";

foreach ($produtos as $produto) {

    if ($produto["quantidade"] == 0) {

        echo "Sem estoque: " . $produto["nome"] . "<br>";

    } else {

        $valorTotal = $produto["preco"] * $produto["quantidade"];

        echo $produto["nome"] . ": R$ " . number_format($valorTotal, 2, ",", ".") . "<br>";

        $totalEstoque += $valorTotal;

        if ($valorTotal > $maiorValor) {
            $maiorValor = $valorTotal;
            $produtoMaiorValor = $produto["nome"];
        }
    }
}

echo "<br>";
echo "Valor total do estoque: R$ " .
     number_format($totalEstoque, 2, ",", ".") . "<br>";

echo "Maior valor financeiro: $produtoMaiorValor - R$ " .
     number_format($maiorValor, 2, ",", ".");

?>
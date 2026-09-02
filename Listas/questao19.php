<?php

class Produto
{
    public $nome;
    public $preco;
    public $quantidade;

    public function __construct($nome, $preco, $quantidade)
    {
        $this->nome = $nome;
        $this->preco = $preco;
        $this->quantidade = $quantidade;
    }
}

$produtos = [
    new Produto("Teclado", 120, 2),
    new Produto("Mouse", 60, 1),
    new Produto("Monitor", 900, 1),
    new Produto("Cabo HDMI", 35, 2),
    new Produto("Headset", 250, 1)
];

$total = 0;

$maiorGasto = 0;
$produtoMaiorGasto = "";

foreach ($produtos as $produto) {

    $subtotal = $produto->preco * $produto->quantidade;

    echo "Produto: {$produto->nome}<br>";
    echo "Quantidade: {$produto->quantidade}<br>";
    echo "Preço unitário: R$ " .
         number_format($produto->preco, 2, ",", ".") . "<br>";
    echo "Subtotal: R$ " .
         number_format($subtotal, 2, ",", ".") . "<br><br>";

    $total += $subtotal;

    if ($subtotal > $maiorGasto) {
        $maiorGasto = $subtotal;
        $produtoMaiorGasto = $produto->nome;
    }
}

if ($total <= 200) {
    $desconto = 0;
} elseif ($total <= 500) {
    $desconto = 0.05;
} elseif ($total <= 1000) {
    $desconto = 0.10;
} else {
    $desconto = 0.15;
}

$valorDesconto = $total * $desconto;
$valorFinal = $total - $valorDesconto;

echo "Compra sem desconto: R$ " .
     number_format($total, 2, ",", ".") . "<br>";

echo "Desconto: " . ($desconto * 100) . "%<br>";

echo "Valor economizado: R$ " .
     number_format($valorDesconto, 2, ",", ".") . "<br>";

echo "Valor final: R$ " .
     number_format($valorFinal, 2, ",", ".") . "<br>";

echo "Maior gasto: $produtoMaiorGasto - R$ " .
     number_format($maiorGasto, 2, ",", ".");

?>
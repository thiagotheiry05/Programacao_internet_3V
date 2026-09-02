<?php

class Funcionario
{
    public $nome;
    public $salario;
    public $cargo;

    public function __construct($nome, $salario, $cargo)
    {
        $this->nome = $nome;
        $this->salario = $salario;
        $this->cargo = $cargo;
    }
}

$funcionarios = [
    new Funcionario("Ana", 1800, "Assistente"),
    new Funcionario("Carlos", 2500, "Técnico"),
    new Funcionario("Maria", 4000, "Analista"),
    new Funcionario("João", 5500, "Desenvolvedor"),
    new Funcionario("Pedro", 7000, "Gerente")
];

$soma = 0;

$maior = $funcionarios[0];
$menor = $funcionarios[0];

foreach ($funcionarios as $funcionario) {

    echo "Nome: {$funcionario->nome}<br>";
    echo "Cargo: {$funcionario->cargo}<br>";
    echo "Salário: R$ " .
         number_format($funcionario->salario, 2, ",", ".") .
         "<br><br>";

    $soma += $funcionario->salario;

    if ($funcionario->salario > $maior->salario) {
        $maior = $funcionario;
    }

    if ($funcionario->salario < $menor->salario) {
        $menor = $funcionario;
    }
}

$media = $soma / count($funcionarios);

$acimaMedia = 0;

foreach ($funcionarios as $funcionario) {

    if ($funcionario->salario > $media) {
        $acimaMedia++;
    }
}

echo "Média salarial: R$ " .
     number_format($media, 2, ",", ".") . "<br>";

echo "Maior salário: {$maior->nome} - R$ " .
     number_format($maior->salario, 2, ",", ".") . "<br>";

echo "Menor salário: {$menor->nome} - R$ " .
     number_format($menor->salario, 2, ",", ".") . "<br>";

echo "Funcionários acima da média: $acimaMedia<br><br>";

echo "<strong>Aplicação dos aumentos:</strong><br><br>";

foreach ($funcionarios as $funcionario) {

    $salarioAntigo = $funcionario->salario;

    if ($funcionario->salario < 2000) {
        $percentual = 0.15;
    } elseif ($funcionario->salario <= 5000) {
        $percentual = 0.10;
    } else {
        $percentual = 0.05;
    }

    $novoSalario = $salarioAntigo * (1 + $percentual);

    echo "{$funcionario->nome}: ";
    echo "R$ " . number_format($salarioAntigo, 2, ",", ".");
    echo " → R$ " . number_format($novoSalario, 2, ",", ".");
    echo "<br>";
}

?>
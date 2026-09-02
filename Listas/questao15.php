<?php

$alunos = [
    ["nome" => "Ana", "nota1" => 8.0, "nota2" => 7.0],
    ["nome" => "Carlos", "nota1" => 5.0, "nota2" => 4.5],
    ["nome" => "Maria", "nota1" => 9.0, "nota2" => 9.5],
    ["nome" => "João", "nota1" => 6.0, "nota2" => 5.0],
    ["nome" => "Pedro", "nota1" => 3.0, "nota2" => 7.0]
];

$somaMedias = 0;

$maiorMedia = -1;
$menorMedia = 11;

$alunoMaior = "";
$alunoMenor = "";

foreach ($alunos as $aluno) {

    $media = ($aluno["nota1"] + $aluno["nota2"]) / 2;

    if ($media >= 6) {
        $situacao = "Aprovado";
    } else {
        $situacao = "Reprovado";
    }

    echo "Nome: " . $aluno["nome"] . "<br>";
    echo "Média: " . number_format($media, 2) . "<br>";
    echo "Situação: $situacao<br><br>";

    $somaMedias += $media;

    if ($media > $maiorMedia) {
        $maiorMedia = $media;
        $alunoMaior = $aluno["nome"];
    }

    if ($media < $menorMedia) {
        $menorMedia = $media;
        $alunoMenor = $aluno["nome"];
    }
}

$mediaGeral = $somaMedias / count($alunos);

echo "Aluno com maior média: $alunoMaior ($maiorMedia)<br>";
echo "Aluno com menor média: $alunoMenor ($menorMedia)<br>";
echo "Média geral da turma: " . number_format($mediaGeral, 2);

?>
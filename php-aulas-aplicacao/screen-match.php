<?php

echo "Bem vindo ao Screen Match!\n";

$nomeFilme = 'Se beber não case';
$nomeFilme = 'Thor: Ragnarok';
$nomeFilme = 'Top Gun - Maverick';
$anoLancamento = 2022;
$notaFilme = 8.8;
$planoPrime = true;

$incluidoNoPlano = $planoPrime || $anoLancamento;
if ($incluidoNoPlano == true){
    $incluidoNoPlano = "Sim";
} else {
    echo "não";
}

echo "Nome do filme: $nomeFilme \nNota do filme: $notaFilme \nvocê pode assistir o filme: $incluidoNoPlano\n";

if ($anoLancamento >= 2024){
    echo "Esse filme é um lançamento do ano\n";
} else {
    echo "Esse filme não é do ano\n";
}

$genero = match ($nomeFilme){
    "Top Gun - Maverick" => "Ação",
    "Thor: Ragnarok" => "Super Herói",
    "Se beber não case" => "Comédia",
    default => "N/A"
};
echo "Genero: $genero \n";


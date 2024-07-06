<?php

$numero = [0 => 'zero', 1 => 'um', 2 => 'dois', 3 => 'tres'];


foreach ($numero as $valor => $escrito) {
    echo $escrito . PHP_EOL;
}
echo  count($numero) . " números encontrados" . PHP_EOL;

//uso de sort para ordenar números
$nota = [9, 5, 10, 8, 1, 4];
$ordemNota = $nota;
sort($ordemNota);
//var_dump($ordemNota); #já seria o suficiente para fazer o código mostrar o uso de 'sort'


//uso de foreach para poder usar 'echo'
echo 'notas entregues' . PHP_EOL;
foreach ($nota as $desordem){
    echo $desordem . PHP_EOL;
}
//poderia ter criado um código apenas com o var_dump, mas tentei usar o echo por estar apresentando erro, e solução no momento encontrado 'foreach'
echo 'notas em ordem:' . PHP_EOL;
foreach ($ordemNota as $ordenado) {
    echo $ordenado . PHP_EOL;
}

//uso de usort para criar uma função para ordenar, usando comparação para ordenar, retornando 1 para posições a frente que devem estar atrás, 0 para numeros que irão ficar na mesma posição e -1 para posições que irão estar posições a frente
$alunosA = [
    ['aluno'=> 'João', 'nota' => 1],
    ['aluno'=> 'Maria', 'nota' => 10],
    ['aluno' => "pé", 'nota' => 9],
    ['aluno' => 'Feijão', 'nota' => 5]
];
echo 'nota dos alunos em ordem crescente' . PHP_EOL;
function ordemNotas(array $nota1, array $nota2): int{
    return $nota1['nota'] <=> $nota2['nota'];
}

usort($alunosA, 'ordemNotas');
var_dump($alunosA);

echo 'nota dos alunos em ordem decrescente' . PHP_EOL;
//array associativo com ordenação das notas simples
$notas =[
    'João' => 1,
    'Maria' => 10,
    'pé' => 9,
    'Feijão' => 5
];

arsort($notas);
var_dump($notas);
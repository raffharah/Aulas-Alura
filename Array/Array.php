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

<?php
use \SRC\Funcoes;
include "./src/funcoes.php";
$funcao = new Funcoes();

// seculo
$ano = 2022;

echo "Ano: {$ano} | Século: {$funcao->SeculoAno($ano)}<hr>";

// 
$arraySegundoMaior = [
    [25, 22, 18],
    [10, 15, 13],
    [24, 5, 2],
    [80, 17, 15]
];

echo "Segundo Maior valor de array multidimensional: {$funcao->SegundoMaior($arraySegundoMaior)}<hr>";

// 
$arraySequenciaCrescente = [1,2,3,5,4];

$funcao->SequenciaCrescente($arraySequenciaCrescente);

// echo "É possivel obter uma sequência crescente? ".($funcao->SequenciaCrescente($arraySequenciaCrescente))?"Sim":"Não"."<hr>";
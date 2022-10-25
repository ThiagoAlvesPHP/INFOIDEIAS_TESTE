<?php
use \SRC\Funcoes;
include "./src/funcoes.php";
$funcao = new Funcoes();

// seculo
$ano = 2022;

echo "Ano: {$ano} | Século: {$funcao->SeculoAno($ano)}";

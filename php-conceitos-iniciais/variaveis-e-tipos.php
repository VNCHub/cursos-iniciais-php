<?php

$idade1 = 21;

$idade2 = 10;

$soma = $idade1 + $idade2;
$subtracao = $idade1 - $idade2;
$multiplicacao = $idade1 * $idade2;
$divisao = $idade1 / $idade2;
$potencia = $idade1 ** 2;
$resto = $idade1 % $idade2;

echo "soma: ", $soma, "\n";
echo "subtracao: ", $subtracao, "\n";
echo "multiplicacao: ", $multiplicacao, "\n";
echo "divisao: ", $divisao, "\n";
echo "potencia: ", $potencia, "\n";
echo "resto: ", $resto, "\n"; 

//Como descobrir o tipo da variável?
echo "O tipo da variável é: ", gettype($divisao), "\n";
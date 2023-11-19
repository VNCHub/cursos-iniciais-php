<?php

include 'funcoes.php';

$contas = array(
    array('usuario' => 'vinicius', 'saldo' => 1000),
    array('usuario' => 'denise', 'saldo' => 20000),
    array('usuario' => 'clarissa', 'saldo' => 300)
);

$contas[] = array('usuario' => 'gabriela', 'saldo' => 2000);

$contas[0] = sacar($contas[0], 100);
$contas[0] = depositar($contas[0], 2000);

unset($contas[3]);

exibirContas($contas);
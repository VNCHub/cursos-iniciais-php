<?php

function sacar (array $conta, float $valor) {
    if($conta['saldo'] < $valor || $valor < 0){
        echo "Valor de saque inválido";
    } else {
        $conta['saldo'] -= $valor; 
    }
    return $conta;
}

function depositar (array $conta, float $valor) {
    if($valor < 0){
        echo "Valor de deposito inválido";
    } else {
        $conta['saldo'] += $valor; 
    }
    return $conta;
}

function exibirContas($contas){
    foreach ($contas as $conta) {
        list('usuario' => $usuario, 'saldo' => $saldo) = $conta;
        echo "Usuário: $usuario - Saldo: $saldo" . '<br>';
    }
    
}
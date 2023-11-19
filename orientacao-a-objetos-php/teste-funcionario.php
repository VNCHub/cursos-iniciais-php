<?php

require_once "autoload.php";

use Banco\Modelo\Funcionario\{Desenvolvedor, Gerente, Diretor};
use Banco\Service\Autenticador;
use Banco\Service\ControladorBonificacao;
use Banco\Modelo\CPF;

$funcionario = new Desenvolvedor(
    "Vinicius Carrocine",
    new CPF("452.415.488-40"),
    "Desenvolvedor",
    3500
);

$gerente = new Gerente(
    "Denise Pereira",
    new CPF("452.415.488-40"),
    "Gerente de Laboratório",
    4000
);

$diretor = new Diretor(
    "Clarissa Carrocine",
    new CPF("452.415.488-40"),
    "Diretor de arte",
    5000,
    '1234'
);

echo "O funcionário é o: $funcionario->nome," .
" a gerente é a: $gerente->nome," .
" a diretora é a: $diretor->nome" . PHP_EOL;

$controlador = new ControladorBonificacao();
$controlador->adicionaBonificacao($funcionario);
$controlador->adicionaBonificacao($gerente);
$controlador->adicionaBonificacao($diretor);
echo "A bonificação total é: " . $controlador->getTotalBonificacoes() . PHP_EOL;
$autenticador = new Autenticador();
$autenticador->realizaLogin($diretor, $diretor->getSenha());

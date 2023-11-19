<?php 

require_once "autoload.php";

use Banco\Modelo\Conta\{Titular, ContaCorrente, ContaPoupanca};
use Banco\Modelo\{Endereco, CPF};

$primeiroEndereco = new Endereco("SJC", "Vista Verde", "Estados Unidos", "8080");
$primeiroTitular = new Titular("Vinicius Carrocine", new CPF("452.415.488-40"), $primeiroEndereco);
$primeiraConta = new ContaCorrente($primeiroTitular);

$primeiraConta->depositar(1000);
$primeiraConta->sacar(100);

$segundoEndereco = new Endereco("SJC", "Vista Verde", "Estados Unidos", "8081");
$segundoTitular = new Titular("Denise Pereira", new CPF("452.415.488-40"), $segundoEndereco);
$segundaConta = new ContaCorrente($segundoTitular);

$segundaConta->depositar(2000);
$segundaConta->transferir(100, $primeiraConta);
 
echo "O saldo da primeira conta é: R$ {$primeiraConta->getSaldo()} ." . PHP_EOL;
echo "O total de contas é: " . ContaCorrente::getNumeroContas() . PHP_EOL;
echo $primeiraConta->titular->endereco->rua . PHP_EOL;
echo $primeiraConta->titular->endereco . PHP_EOL;

$terceiroEndereco = new Endereco("SJC", "Vista Verde", "Estados Unidos", "8079");
$terceiroTitular = new Titular("Marcus", new CPF("123"), $terceiroEndereco);
$terceiraConta = new ContaCorrente($terceiroTitular);
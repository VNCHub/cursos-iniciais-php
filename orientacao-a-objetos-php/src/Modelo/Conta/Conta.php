<?php

namespace Banco\Modelo\Conta;
abstract class Conta
{
    public readonly Titular $titular;
    protected float $saldo;
    private static $numeroContas = 0;

    public function __construct(Titular $titular) 
    {   
        $this->titular = $titular;
        $this->saldo = 0;
        self::$numeroContas++;        
    }

    public function __destruct()
    {
        self::$numeroContas--;
    }

    public function sacar(float $saque): void
    {
        $tarifa = $saque * $this->tarifaSaque();
        $saque += $tarifa;
        if ($this->saldo < $saque || $saque < 1){
            echo "Não foi possível sacar, valor incorreto.";
            return;
        }
        $this->saldo -= $saque;
    }

    abstract protected function tarifaSaque():float;

    public function depositar(float $deposito): void
    {
        if ($deposito < 1){
            echo "Não foi possível depositar, valor incorreto.";
            return;
        }
        $this->saldo += $deposito;
    }

	public function getSaldo(): float {
		return $this->saldo;
	}

	public static function getNumeroContas() {
		return self::$numeroContas;
	}

    public function getNomeTitular() {
        return $this->titular->nome;
    }

    public function getCpfTitular() {
        return $this->titular->cpf->numero;
    }

}
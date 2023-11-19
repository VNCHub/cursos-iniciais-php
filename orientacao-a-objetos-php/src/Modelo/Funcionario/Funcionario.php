<?php

namespace Banco\Modelo\Funcionario;

use Banco\Modelo\{Pessoa, CPF};


abstract class Funcionario extends Pessoa
{
    protected string $cargo;
    protected float $salario;

    public function __construct(string $nome, CPF $cpf, string $cargo, float $salario)
    {
        parent::__construct($nome, $cpf);
        $this->cargo = $cargo;
        $this->salario = $salario;
    }

	public function getCargo(): string {
		return $this->cargo;
	}
	
	public function setCargo(string $cargo): self {
		$this->cargo = $cargo;
		return $this;
	}

	public function getSalario(): float {
		return $this->salario;
	}
	
	public function setSalario(float $salario): self {
		$this->salario = $salario;
		return $this;
	}

    abstract public function bonificacao(): float;

	abstract public function podeAutenticar(): bool;
}

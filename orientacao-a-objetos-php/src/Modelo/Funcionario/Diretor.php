<?php

namespace Banco\Modelo\Funcionario;

use Banco\Modelo\{CPF, Autenticavel};

class Diretor extends Funcionario implements Autenticavel
{
    private string $senha;
    
    public function __construct(string $nome, CPF $cpf, string $cargo, float $salario, string $senha){
        parent::__construct($nome, $cpf, $cargo, $salario);
        $this->senha = $senha;
    }

    public function bonificacao(): float
    {
        return $this->salario * 2;
    }

    public function podeAutenticar(): bool
    {
        return True;
    }

	public function getSenha(): string {
		return $this->senha;
	}
}
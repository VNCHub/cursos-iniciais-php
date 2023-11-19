<?php

namespace Banco\Modelo\Funcionario;
use Banco\Modelo\Autenticavel;

class Gerente extends Funcionario implements Autenticavel
{
    public function bonificacao(): float
    {
        return $this->salario;
    }

    public function podeAutenticar(): bool
    {
        return True;
    }
}
<?php

namespace Banco\Modelo\Funcionario;
use Banco\Modelo\Autenticavel;

class Desenvolvedor extends Funcionario implements Autenticavel
{
    public function bonificacao(): float
    {
        return 500;
    }

    public function podeAutenticar(): bool
    {
        return False;
    }
}
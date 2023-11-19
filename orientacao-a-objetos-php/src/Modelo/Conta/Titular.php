<?php

namespace Banco\Modelo\Conta;

use Banco\Modelo\{Pessoa, Endereco, CPF};

class Titular extends Pessoa
{
    public readonly Endereco $endereco;

    public function __construct(string $nome, CPF $cpf, Endereco $endereco)
    {
        parent::__construct($nome, $cpf);
        $this->endereco = $endereco;
    }
}

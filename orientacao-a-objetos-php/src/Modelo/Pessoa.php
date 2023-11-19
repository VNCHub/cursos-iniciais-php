<?php

namespace Banco\Modelo;
class Pessoa
{
    public readonly CPF $cpf;
    public readonly string $nome;

    public function __construct(string $nome, CPF $cpf)
    {
        $this->cpf = $cpf;
        $this->nome = $nome;
    }
}
<?php

namespace Banco\Modelo\Conta;

class ContaPoupanca extends Conta
{
    protected function tarifaSaque():float
    {
        return 0.03;
    }
}
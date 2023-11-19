<?php

namespace Banco\Modelo\Conta;

class ContaCorrente extends Conta
{
    public function transferir(float $valor, self $destino): void
    {
        if($valor < 0){
            echo "Não foi possível transferir, valor incorreto.";
            return;
        }
        $this->sacar($valor);
        $destino->depositar($valor);
    }

    protected function tarifaSaque():float
    {
        return 0.05;
    }
}
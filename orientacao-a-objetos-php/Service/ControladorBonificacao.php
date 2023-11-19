<?php

namespace Banco\Service;

use Banco\Modelo\Funcionario\Funcionario;

class ControladorBonificacao
{
    private $totalBonificacoes = 0;

    public function adicionaBonificacao(Funcionario $funcionario){
        $this->totalBonificacoes += $funcionario->bonificacao();
    }

	public function getTotalBonificacoes() {
		return $this->totalBonificacoes;
	}
}
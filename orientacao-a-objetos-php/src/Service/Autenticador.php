<?php

namespace Banco\Service;

use Banco\Modelo\Autenticavel;

class Autenticador 
{
    public function realizaLogin(Autenticavel $usuario, $senha)
    {
        if ($usuario->podeAutenticar() && $senha == '1234'){
            echo "Login realizado com sucesso!" . PHP_EOL;
            return;
        }
        echo "Login não realizado. Verifique com seu administrador." . PHP_EOL;
    }
}
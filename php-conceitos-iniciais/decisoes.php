<?php

$idade = 17;
$acompanhado = true;

echo "Você só pode entrar se for maior de 18 anos, ou a partir de 16 anos acompanhado." . PHP_EOL;

if ($idade < 16) {
    echo "Você só tem $idade anos. Não pode entrar";
} else if ($idade < 18){
    if($acompanhado) {
        echo "Você tem $idade e está acompanhado. Pode entrar";
    } else {
        echo "Você tem $idade e não está acompanhado. Não pode entrar";
    }  
} else {
    echo "Você tem $idade anos. Pode entrar";
}

echo PHP_EOL;